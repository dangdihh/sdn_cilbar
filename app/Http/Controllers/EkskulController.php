<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    /**
     * Menampilkan daftar ekskul (Sisi Admin Panel).
     */
    public function index()
    {
        $ekskuls = Ekskul::orderBy('created_at', 'desc')->get();
        return view('admin.ekskul.index', compact('ekskuls'));
    }

    /**
     * Menampilkan form input ekskul baru.
     */
    public function create()
    {
        return view('admin.ekskul.create');
    }

    /**
     * Menyimpan data ekskul baru ke database.
     */
    public function store(Request $request)
    {
        // 1. Validasi Input Form
        $request->validate([
            'nama_ekskul'    => 'required|string|max:255',
            'pembina'        => 'required|string|max:255',
            'foto_url'       => 'nullable|url', // Diganti jadi url biar validasinya pas
            'jadwal_latihan' => 'nullable|string|max:255',
            'deskripsi'      => 'nullable|string',
        ]);

        $data = $request->all();

        // 2. Trik Gambar Default: Jika link foto kosong, set otomatis dari Unsplash pendidikan
        if (empty($data['foto_url'])) {
            $data['foto_url'] = 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600&q=80';
        }

        // 3. Insert ke Database
        Ekskul::create($data);

        return redirect()->route('ekskul.index')
            ->with('success', 'Ekskul baru berhasil didaftarkan, abangkuh!');
    }

    /**
     * Menampilkan form edit data ekskul.
     */
    public function edit(string $id)
    {
        $ekskul = Ekskul::findOrFail($id);
        return view('admin.ekskul.edit', compact('ekskul'));
    }

    /**
     * Memproses simpan perubahan data ekskul.
     */
    public function update(Request $request, string $id)
    {
        // 1. Validasi Input Form Perubahan
        $request->validate([
            'nama_ekskul'    => 'required|string|max:255',
            'pembina'        => 'required|string|max:255',
            'foto_url'       => 'nullable|url',
            'jadwal_latihan' => 'nullable|string|max:255',
            'deskripsi'      => 'nullable|string',
        ]);

        $ekskul = Ekskul::findOrFail($id);
        $data = $request->all();

        // 2. Jaga-jaga kalau pas di-edit foto lamanya dihapus/dikosongkan
        if (empty($data['foto_url'])) {
            $data['foto_url'] = 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=600&q=80';
        }

        // 3. Update Database
        $ekskul->update($data);

        return redirect()->route('ekskul.index')
            ->with('success', 'Data ekskul berhasil diperbarui!');
    }

    /**
     * Menghapus data ekskul secara permanen.
     */
    public function destroy(string $id)
    {
        $ekskul = Ekskul::findOrFail($id);
        $ekskul->delete();

        return redirect()->route('ekskul.index')
            ->with('success', 'Ekskul berhasil dihapus secara permanen!');
    }
}