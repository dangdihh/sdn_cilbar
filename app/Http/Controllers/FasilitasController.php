<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    // 1. Tampilkan Semua Fasilitas di Dashboard Admin
    public function index()
    {
        $fasilitas = Fasilitas::latest()->get();
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    // 2. Tampilkan Form Tambah Data
    public function create()
    {
        return view('admin.fasilitas.create');
    }

    // 3. Proses Simpan Data Baru + Upload Foto
    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required|string|max:100',
            'deskripsi'      => 'required|string',
            'foto'           => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', // Max 2MB
        ]);

        $data = $request->only(['nama_fasilitas', 'deskripsi']);

        // Logic Upload Foto ke public/img
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $fileName);
            $data['foto'] = $fileName;
        }

        Fasilitas::create($data);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas baru berhasil ditambahkan abangkuh!');
    }

    // 1. Tampilkan Halaman Form Edit dengan Data Lama
    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    // 2. Proses Simpan Perubahan Data (Update)
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_fasilitas' => 'required|string|max:100',
            'deskripsi'      => 'required|string',
            'foto'           => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $fasilitas = Fasilitas::findOrFail($id);
        
        // Ambil input teks
        $data = $request->only(['nama_fasilitas', 'deskripsi']);

        // Logic jika admin ganti foto baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama dari public/img jika sebelumnya ada file fisiknya
            if ($fasilitas->foto && file_exists(public_path('img/' . $fasilitas->foto))) {
                unlink(public_path('img/' . $fasilitas->foto));
            }

            // Upload foto baru
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $fileName);
            $data['foto'] = $fileName;
        }

        // Eksekusi update ke database Supabase
        $fasilitas->update($data);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui, abangkuh!');
    }

    // 4. Proses Hapus Data (Opsional tapi berguna)
    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        
        // Hapus file fisik foto jika ada
        if ($fasilitas->foto && file_exists(public_path('img/' . $fasilitas->foto))) {
            unlink(public_path('img/' . $fasilitas->foto));
        }

        $fasilitas->delete();
        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil dihapus!');
    }
}