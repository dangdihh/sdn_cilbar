<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Guru;
use App\Models\KalenderAkademik;
use App\Models\Pengumuman;

class HomeController extends Controller
{
    /**
     * Menampilkan Halaman Utama / Beranda Publik Website Sekolah Lengkap Paripurna.
     */
    public function index()
    {
        // 1. Ambil 3 data pengumuman terbaru (Section Pengumuman)
        $pengumumans = Pengumuman::orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        // 2. Ambil 4 data Berita/Artikel Terbaru secara umum (Section Berita Utama)
        $kegiatans = Artikel::orderBy('published_at', 'desc')
            ->take(4)
            ->get();

        // 3. Ambil 4 data Agenda Akademik mendatang (Section Kalender/Agenda)
        $agendas = KalenderAkademik::orderBy('tanggal_mulai', 'asc')
            ->where('tanggal_mulai', '>=', now())
            ->take(4)
            ->get();

        // 4. Ambil 4 sampel personil guru (Section Direktori Guru)
        $gurus = Guru::where('jenis_pegawai', 'guru')
            ->take(4)
            ->get();

        // 5. Ambil 3 data preview kegiatan per kategori (Section 3 Kolom Bawah)
        $artikelEkskulPreview = Artikel::where('kategori', 'ekstrakurikuler')
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        $artikelPrestasiPreview = Artikel::where('kategori', 'prestasi')
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        $artikelDokumentasiPreview = Artikel::where('kategori', 'dokumentasi')
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        // Kirim SEMUA variabel tanpa terkecuali ke view home.blade.php
        return view('home', compact(
            'pengumumans', 
            'kegiatans',
            'agendas',
            'gurus', 
            'artikelEkskulPreview', 
            'artikelPrestasiPreview', 
            'artikelDokumentasiPreview'
        ));
    }
}