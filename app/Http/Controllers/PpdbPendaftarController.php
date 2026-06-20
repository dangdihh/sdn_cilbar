<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PpdbPendaftar;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PpdbPendaftarController extends Controller
{
    /**
     * Menampilkan daftar seluruh calon siswa yang mendaftar PPDB.
     */
    public function index()
    {
        $pendaftars = PpdbPendaftar::orderBy('created_at', 'desc')->get();
        return view('admin.ppdb.index', compact('pendaftars'));
    }

    /**
     * Menampilkan form edit data pendaftar.
     */
    public function edit($id)
    {
        $pendaftar = \App\Models\PpdbPendaftar::findOrFail($id);
        return view('admin.ppdb.edit', compact('pendaftar'));
    }

    /**
     * Menyimpan perubahan data pendaftar.
     */
    public function update(Request $request, $id)
    {
        $pendaftar = PpdbPendaftar::findOrFail($id);
        
        // Sesuaikan dengan kolom yang ada di tabel pendaftar lu
        $pendaftar->update($request->all());

        return redirect()->route('admin.ppdb.index')
            ->with('success', 'Data pendaftar ' . $pendaftar->nama_lengkap . ' berhasil diupdate!');
    }

    /**
     * Mengubah status seleksi pendaftaran siswa (Diterima / Ditolak).
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status_pendaftaran' => 'required|string|in:Diterima,Ditolak,Menunggu Seleksi',
        ]);

        $pendaftar = PpdbPendaftar::findOrFail($id);
        $pendaftar->status_pendaftaran = $request->status_pendaftaran;
        $pendaftar->save();

        return redirect()->route('admin.ppdb.index')
            ->with('success', 'Status pendaftaran ' . $pendaftar->nama_lengkap . ' berhasil diperbarui!');
    }

    /**
     * Menghapus data pendaftar.
     */
    public function destroy($id)
    {
        $pendaftar = PpdbPendaftar::findOrFail($id);
        $pendaftar->delete();

        return redirect()->route('admin.ppdb.index')
            ->with('success', 'Data pendaftar ' . $pendaftar->nama_lengkap . ' berhasil dihapus!');
    }

    /**
     * Fitur Ekspor Data PPDB ke Excel (FIXED FOR VERCEL SERVERLESS & AUTO FORMAT VISUAL)
     */
    public function exportExcel()
    {
        // 1. Ambil data pendaftar yang statusnya 'Diterima'
        $data = PpdbPendaftar::where('status_pendaftaran', 'Diterima')
                            ->orderBy('created_at', 'desc')
                            ->get();

        // 2. Alirkan data langsung sebagai stream output biner teks biasa
        $response = new StreamedResponse(function() use ($data) {
            $file = fopen('php://output', 'w');
            
            // Trik khusus agar Microsoft Excel langsung otomatis memisahkan kolom dengan koma
            fputs($file, "sep=,\n"); 

            // 3. Daftarkan Headings Kolom Excel-nya
            fputcsv($file, [
                'ID',
                'Nama Lengkap Siswa',
                'Jenis Kelamin',
                'Tempat Lahir',
                'Tanggal Lahir',
                'Nama Ayah',
                'Nama Ibu',
                'No. HP / WhatsApp',
                'Status',
                'Tanggal Daftar'
            ]);

            // 4. Lakukan looping data dari DB Supabase
            foreach ($data as $pendaftar) {
                // FIX NO HP: Dipaksa jadi teks murni lewat string petik tunggal agar angka 0 di depan TIDAK HILANG
                $nomorHp = "'" . $pendaftar->nomor_telepon_ortu;

                // FIX SENSOR TANGGAL: Ditambahkan spasi ekstra di ujungnya agar string fleksibel dan tidak memicu '###'
                $tanggalLahirSafe = $pendaftar->tanggal_lahir . ' ';
                $tanggalDaftarSafe = $pendaftar->created_at ? $pendaftar->created_at->format('d-m-Y H:i') . ' ' : '-';

                fputcsv($file, [
                    $pendaftar->id,
                    $pendaftar->nama_lengkap,
                    $pendaftar->jenis_kelamin,
                    $pendaftar->tempat_lahir,
                    $tanggalLahirSafe, 
                    $pendaftar->nama_ayah,
                    $pendaftar->nama_ibu,
                    $nomorHp, 
                    $pendaftar->status_pendaftaran, 
                    $tanggalDaftarSafe
                ]);
            }

            fclose($file);
        });

        // 5. Setup Header HTTP untuk memicu file download berformat Excel (.xls) di komputer user
        $namaFile = 'Data_Pendaftar_PPDB_Diterima_' . date('d-m-Y') . '.xls';
        
        $response->headers->set('Content-Type', 'application/vnd.ms-excel');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $namaFile . '"');
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }
}