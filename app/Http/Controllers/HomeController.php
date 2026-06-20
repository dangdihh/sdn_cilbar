<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Guru;
use App\Models\KalenderAkademik;
use App\Models\Pengumuman;
use App\Models\Fasilitas; // 👈 FIX: Import model Fasilitas biar gak error class not found

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

    /**
     * FIX: Menampilkan Halaman Tentang Kami dengan Struktur Berjenjang (Level 1, 2, dan 3)
     */
    public function tentang()
    {
        // 1. Ambil Pimpinan Utama (Level 1)
        $kepalaSekolah = Guru::where('level', 1)->first();

        // 2. Ambil Jajaran Wakil & Kaur Manajemen Inti (Level 2)
        $wakilDanKaur = Guru::where('level', 2)->orderBy('nama', 'asc')->get();

        // 3. Ambil Jajaran Guru Kelas, Mapel & Staff/Tendik (Level 3)
        $guruDanStaff = Guru::where('level', 3)->orderBy('nama', 'asc')->get();

        // 4. Ambil Daftar Fasilitas Sekolah untuk ditaruh di Bento Grid bawah
        $daftarFasilitas = Fasilitas::latest()->get();

        // 5. Lempar semua variabel ke view about.blade.php
        return view('about', compact('kepalaSekolah', 'wakilDanKaur', 'guruDanStaff', 'daftarFasilitas'));
    }
}