<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurikulum;

class KurikulumController extends Controller
{
    /**
     * Menampilkan daftar dokumen/struktur kurikulum di panel admin.
     */
    public function index()
    {
        $kurikulums = Kurikulum::orderBy('created_at', 'desc')->get();
        return view('admin.kurikulum.index', compact('kurikulums'));
    }

    /**
     * Menampilkan form tambah kurikulum/mata pelajaran baru.
     */
    public function create()
    {
        return view('admin.kurikulum.create');
    }

    /**
     * Menyimpan data kurikulum baru ke database Supabase.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_dokumen' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file_url' => 'nullable|url',
        ]);

        $kurikulum = new Kurikulum();
        $kurikulum->nama_dokumen = $request->nama_dokumen;
        $kurikulum->deskripsi = $request->deskripsi;
        $kurikulum->file_url = $request->file_url;
        $kurikulum->save();

        return redirect()->route('admin.kurikulum.index')->with('success', 'Data Kurikulum/Mata Pelajaran berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit data kurikulum (Sisi Admin).
     */
    public function edit($id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        return view('admin.kurikulum.edit', compact('kurikulum'));
    }

    /**
     * Memproses simpan perubahan data kurikulum (Sisi Admin).
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dokumen' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file_url' => 'nullable|url',
        ]);

        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->nama_dokumen = $request->nama_dokumen;
        $kurikulum->deskripsi = $request->deskripsi;
        $kurikulum->file_url = $request->file_url;
        $kurikulum->save();

        return redirect()->route('admin.kurikulum.index')->with('with', 'Data Kurikulum berhasil diperbarui!');
    }

    /**
     * Menghapus data kurikulum dari database.
     */
    public function destroy($id)
    {
        $kurikulum = Kurikulum::findOrFail($id);
        $kurikulum->delete();

        return redirect()->route('admin.kurikulum.index')->with('success', 'Data Kurikulum berhasil dihapus!');
    }
}