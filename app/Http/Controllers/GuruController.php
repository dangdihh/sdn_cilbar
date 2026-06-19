<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    /**
     * Menampilkan daftar semua guru & tendik di halaman admin.
     */
    public function index()
    {
        $gurus = Guru::orderBy('nama', 'asc')->get();
        return view('admin.guru.index', compact('gurus'));
    }

    /**
     * Menampilkan form tambah guru baru.
     */
    public function create()
    {
        return view('admin.guru.create');
    }

    /**
     * Menyimpan data guru baru ke Supabase.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:50',
            'jabatan' => 'required|string|max:100',
            'jenis_pegawai' => 'required|string',
            'foto_url' => 'nullable|url',
        ]);

        $guru = new Guru();
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->jabatan = $request->jabatan;
        $guru->jenis_pegawai = $request->jenis_pegawai;
        // Jika foto kosong, kita kasih gambar avatar default anonim
        $guru->foto_url = $request->foto_url ?? 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=150';
        $guru->save();

        return redirect()->route('admin.guru.index')->with('success', 'Data Guru/Tendik berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit data guru (Sisi Admin).
     */
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Memproses simpan perubahan data guru (Sisi Admin).
     */
    public function update(Request $request, $id)
    {
        // 1. Validasi Input Form
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|max:50',
            'jabatan' => 'required|string|max:100',
            'jenis_pegawai' => 'required|string',
            'foto_url' => 'nullable|url',
        ]);

        // 2. Cari data lama dan timpa nilainya
        $guru = Guru::findOrFail($id);
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->jabatan = $request->jabatan;
        $guru->jenis_pegawai = $request->jenis_pegawai;
        $guru->foto_url = $request->foto_url ?? 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=150';
        $guru->save();

        // 3. Redirect balik ke index dengan pesan sukses
        return redirect()->route('admin.guru.index')->with('success', 'Data Guru/Tendik berhasil diperbarui!');
    }

    /**
     * Menghapus data guru dari Supabase.
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Data Guru/Tendik berhasil dihapus!');
    }
}