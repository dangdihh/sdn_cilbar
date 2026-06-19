<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PpdbPendaftar;

class PpdbController extends Controller
{
    // Halaman Formulir PPDB Publik
    public function index() {
        return view('ppdb.index');
    }

    public function form() {
        return view('ppdb.formulir');
    }

    // Proses Simpan dari Formulir Publik
    public function store(Request $request)
    {
        // 1. Validasi Ketat Sesuai Nama Input di View
        $validatedData = $request->validate([
            'nama_lengkap'       => 'required|string|max:100|regex:/^[a-zA-Z\s]+$/',
            
            // Menggunakan nik_anak sesuai attribute name di HTML
            'nik_anak'           => 'required|numeric|digits:16|unique:ppdb_pendaftars,nik_anak', 
            
            'jenis_kelamin'      => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir'       => 'required|string|max:50',
            
            // Pembatasan Umur (Minimal 5 tahun, Maksimal 10 tahun)
            'tanggal_lahir'      => [
                'required',
                'date',
                'before:' . now()->subYears(5)->format('Y-m-d'), // Maksimal kelahiran 5 tahun lalu
                'after:' . now()->subYears(10)->format('Y-m-d'),  // Minimal kelahiran 10 tahun lalu
            ],
            
            'nama_ayah'          => 'required|string|max:100',
            'nama_ibu'           => 'required|string|max:100',
            
            // Menggunakan nomor_telepon_ortu sesuai attribute name di HTML
            'nomor_telepon_ortu' => 'required|numeric|digits_between:10,14',
        ], [
            // Custom Pesan Eror Bahasa Indonesia
            'nama_lengkap.regex'          => 'Nama lengkap hanya boleh berisi huruf dan spasi.',
            'nik_anak.required'           => 'NIK anak wajib diisi.',
            'nik_anak.numeric'            => 'NIK harus berupa angka murni.',
            'nik_anak.digits'             => 'NIK harus tepat 16 digit.',
            'nik_anak.unique'             => 'NIK anak ini sudah terdaftar dalam sistem PPDB.',
            'tanggal_lahir.before'        => 'Usia calon siswa terlalu muda (Minimal 5 tahun).',
            'tanggal_lahir.after'         => 'Usia calon siswa melebihi batas umur ideal Sekolah Dasar.',
            'nomor_telepon_ortu.numeric'  => 'Nomor WhatsApp harus berupa angka.',
            'nomor_telepon_ortu.digits_between' => 'Nomor WhatsApp tidak valid (Harus antara 10-14 digit).',
        ]);

        // 2. Simpan ke Database via Model PPDB Lu
        // (Pastikan property $fillable di model PpdbPendaftar.php lu udah mengizinkan field-field ini)
        PpdbPendaftar::create($validatedData);

        // 3. Redirect Balik dengan Membawa Session Success
        return redirect()->route('ppdb.formulir')->with('success', 'Pendaftaran PPDB online berhasil dikirim! Silakan pantau status pendaftaran secara berkala.');
    }

    // 1. Tampilkan halaman form edit dengan data pendaftar yang lama
    // 1. Fungsi untuk nampilin halaman form edit (ini yang bikin eror tadi)
    // 1. Fungsi untuk nampilin halaman form edit
    public function edit($id)
    {
        // SESUAIKAN: Pakai model PpdbPendaftar sesuai database lu abangkuh
        $pendaftar = \App\Models\PpdbPendaftar::findOrFail($id); 
        
        return view('admin.ppdb.edit', compact('pendaftar'));
    }

    // 2. Fungsi proses update data
    public function update(Request $request, $id)
    {
        // SESUAIKAN: Pakai model PpdbPendaftar juga di sini
        $pendaftar = \App\Models\PpdbPendaftar::findOrFail($id);

        // Validasi data inputan (bisa lu tambah field lain sesuai kebutuhan)
        $request->validate([
            'nama_lengkap'         => 'required|string|max:255',
            'nik_anak'             => 'required|numeric',
            'nomor_telepon_ortu'   => 'required|string',
        ]);

        // Update data ke database Supabase via model PpdbPendaftar
        $pendaftar->update($request->all());

        return redirect()->route('admin.ppdb.index')->with('success', 'Data berkas PPDB siswa berhasil diperbarui, abangkuh!');
    }

        public function cekStatusForm() {
        return view('ppdb.cek-status');
    }

    public function cekStatusProses(Request $request) {
        $request->validate(['nik_anak' => 'required|size:16']);
        
        // Cari data pendaftar berdasarkan NIK
        $pendaftar = \App\Models\PpdbPendaftar::where('nik_anak', $request->nik_anak)->first();
        
        if (!$pendaftar) {
            return back()->with('error', 'Data dengan NIK tersebut tidak ditemukan.');
        }
        
        return view('ppdb.cek-status', compact('pendaftar'));
    }
}