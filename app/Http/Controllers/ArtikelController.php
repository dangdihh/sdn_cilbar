<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Ekskul;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function adminDashboard()
    {
        $artikels = Artikel::orderBy('published_at', 'desc')->get(); 
        return view('admin.kegiatan.index', compact('artikels'));
    }

    /**
     * Menampilkan daftar artikel/kegiatan berdasarkan kategori di Halaman Publik.
     */
    public function kategori(string $kategori)
    {
        $kategoriClean = strtolower($kategori);

        if ($kategoriClean == 'berita') {
            // BERITA SEKOLAH: Ambil kategori 'dokumentasi' yang slug-nya berawalan 'berita-'
            $artikels = Artikel::where('kategori', 'dokumentasi')
                ->where('slug', 'like', 'berita-%')
                ->orderBy('published_at', 'desc')
                ->paginate(9);

            return view('kegiatan.index', compact('artikels', 'kategori'));

        } elseif ($kategoriClean == 'dokumentasi') {
            // DOKUMENTASI MURNI: Ambil kategori 'dokumentasi' yang slug-nya bersih dari kata 'berita-'
            $artikels = Artikel::where('kategori', 'dokumentasi')
                ->where('slug', 'not like', 'berita-%')
                ->orderBy('published_at', 'desc')
                ->paginate(9);

            return view('kegiatan.index', compact('artikels', 'kategori'));

        } elseif ($kategoriClean == 'ekstrakurikuler' || $kategoriClean == 'ekskul') {
            // JALUR PINTAR EKSKUL: Tarik data dinamis dari tabel ekskul mandiri
            $ekskuls = Ekskul::orderBy('nama_ekskul', 'asc')->paginate(9);
            
            return view('kegiatan.ekskul', compact('ekskuls', 'kategori'));

        } else {
            // Kategori lain (misal: prestasi) berjalan normal sesuai teks DB
            $artikels = Artikel::where('kategori', $kategoriClean)
                ->orderBy('published_at', 'desc')
                ->paginate(9);

            return view('kegiatan.index', compact('artikels', 'kategori'));
        }
    }

    public function show(string $kategori, string $slug)
    {
        $dbKategori = (strtolower($kategori) == 'berita') ? 'dokumentasi' : strtolower($kategori);

        $artikel = Artikel::where('kategori', $dbKategori)
            ->where('slug', $slug)
            ->firstOrFail();

        return view('kegiatan.show', compact('artikel'));
    }

    public function create()
    {
        return view('admin.kegiatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'kategori' => 'required|string',
            'thumbnail' => 'nullable|url',
            'body' => 'required|string',
        ]);

        $artikel = new Artikel();
        $artikel->title = $request->title;
        
        if ($request->kategori == 'berita') {
            $artikel->slug = 'berita-' . Str::slug($request->title);
            $artikel->kategori = 'dokumentasi'; // Belokkan demi bypass constraint Supabase
        } else {
            $artikel->slug = Str::slug($request->title);
            $artikel->kategori = $request->kategori;
        }

        $artikel->thumbnail = $request->thumbnail ?? 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?q=80&w=600'; 
        $artikel->body = $request->body;
        $artikel->published_at = now(); 
        $artikel->save();

        return redirect()->route('admin.dashboard')
            ->with('success', 'Kegiatan baru berhasil dipublikasikan!');
    }

    public function edit(string $id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.kegiatan.edit', compact('artikel'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'kategori' => 'required|string',
            'thumbnail' => 'nullable|url',
            'body' => 'required|string',
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->title = $request->title;
        
        if ($request->kategori == 'berita') {
            $cleanTitle = str_replace('berita-', '', Str::slug($request->title));
            $artikel->slug = 'berita-' . $cleanTitle;
            $artikel->kategori = 'dokumentasi';
        } else {
            $artikel->slug = Str::slug($request->title);
            $artikel->kategori = $request->kategori;
        }

        $artikel->thumbnail = $request->thumbnail ?? 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?q=80&w=600';
        $artikel->body = $request->body;
        $artikel->save();

        return redirect()->route('admin.dashboard')
            ->with('success', 'Kegiatan/Artikel berhasil diperbarui!');
    }

    public function destroy(string $id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('admin.dashboard')
            ->with('success', 'Kegiatan/Artikel berhasil dihapus permanen!');
    }
}