<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * @group Pengumuman
 * API untuk mengakses data pengumuman di aplikasi EduMarket.
 */
class PengumumanController extends Controller
{
    /**
     * DAFTAR PENGUMUMAN UNTUK PUBLIK & API FLUTTER
     */
    public function index(Request $request)
    {
        $pengumumans = Pengumuman::query()
            ->orderByDesc('published_at')
            ->paginate(10)
            ->withQueryString();

        // FIX SINKRONISASI VIEW WARISAN TEMEN LU: 
        // Definisikan variabel $notifications agar loop @forelse di baris 223 tidak eror
        $notifications = $pengumumans;

        if ($request->expectsJson()) {
            return response()->json($pengumumans);
        }

        // Lempar kedua variabelnya ke view publik abangkuh
        return view('pengumuman.index', compact('pengumumans', 'notifications'));
    }

    /**
     * DAFTAR PENGUMUMAN KHUSUS DI DASHBOARD ADMIN
     */
    public function adminIndex()
    {
        $pengumumans = Pengumuman::orderByDesc('published_at')->paginate(10);
        
        return view('admin.pengumuman.index', compact('pengumumans'));
    }

    /**
     * Menampilkan form tambah pengumuman baru (Sisi Admin).
     */
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    /**
     * Menyimpan data pengumuman baru ke database Supabase (Sisi Admin).
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'is_important' => 'nullable|boolean',
        ]);

        $pengumuman = new Pengumuman();
        $pengumuman->title = $request->title;
        
        // FIX UNIQUE CONSTRAINT: Menambahkan random string agar slug tidak pernah kembar/bentrok
        $pengumuman->slug = Str::slug($request->title) . '-' . Str::random(5);
        
        $pengumuman->category = $request->category;
        $pengumuman->description = $request->description;
        $pengumuman->is_important = $request->has('is_important') ? true : false;
        
        // FIX: Menghapus penugasan is_published agar tidak memicu eror column tidak ada saat insert
        $pengumuman->published_at = now();
        $pengumuman->save();

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman baru berhasil diterbitkan!');
    }

    /**
     * Detail Pengumuman (Sisi User Umum & API)
     */
    public function show(string $slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)->firstOrFail();
        
        if (request()->expectsJson()) {
            return response()->json($pengumuman);
        }

        $notification = $pengumuman;
        return view('pengumuman.show', compact('pengumuman', 'notification'));
    }

    /**
     * Menampilkan form edit pengumuman (Sisi Admin).
     */
    public function edit(string $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Memproses simpan perubahan data pengumuman (Sisi Admin).
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'required|string',
            'is_important' => 'nullable|boolean',
        ]);

        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->title = $request->title;
        
        // FIX UNIQUE CONSTRAINT (EDIT): Regenerasi slug unik baru kalau judulnya ikut diganti
        $pengumuman->slug = Str::slug($request->title) . '-' . Str::random(5);
        
        $pengumuman->category = $request->category;
        $pengumuman->description = $request->description;
        $pengumuman->is_important = $request->has('is_important') ? true : false;
        $pengumuman->save();

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil diperbarui!');
    }

    /**
     * Menghapus data pengumuman dari database (Sisi Admin).
     */
    public function destroy(string $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil dihapus dari sistem!');
    }
}