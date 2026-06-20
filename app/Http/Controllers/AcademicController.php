<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\KalenderAkademik;
use App\Models\Kurikulum;

class AcademicController extends Controller
{
    /**
     * Menampilkan Halaman Direktori Guru & Tenaga Pendidik untuk Publik (LENGKAP SEMUA LEVEL).
     */
    public function pendidik()
    {
        // Ambil SEMUA data personil guru (Level 1, 2, dan 3) lalu urutkan dari jabatan tertinggi (level terkecil) baru nama
        $gurus = Guru::where('jenis_pegawai', 'guru')
            ->orderBy('level', 'asc')
            ->orderBy('nama', 'asc')
            ->get();

        // Ambil semua tenaga kependidikan/staf tata usaha
        $tendiks = Guru::where('jenis_pegawai', 'tendik')
            ->orderBy('level', 'asc')
            ->orderBy('nama', 'asc')
            ->get();

        return view('akademik.pendidik', compact('gurus', 'tendiks'));
    }

    /**
     * Menampilkan Halaman Kalender Akademik Sekolah.
     */
    public function kalender()
    {
        // 1. Ambil agenda yang akan datang (tanggal mulai dari hari ini ke depan)
        $agendaMendatang = KalenderAkademik::where('tanggal_mulai', '>=', now()->startOfDay())
            ->orderBy('tanggal_mulai', 'asc')
            ->get();

        // 2. Ambil agenda yang sudah lewat (sebagai arsip/riwayat kegiatan)
        $agendaLampau = KalenderAkademik::where('tanggal_mulai', '<', now()->startOfDay())
            ->orderBy('tanggal_mulai', 'desc')
            ->take(10) // Kita batasi 10 riwayat terakhir saja biar gak kepanjangan
            ->get();

        return view('akademik.kalender', compact('agendaMendatang', 'agendaLampau'));
    }

    /**
     * Menampilkan Halaman Kurikulum / Mata Pelajaran Sekolah.
     */
    public function kurikulum()
    {
        // Ambil semua data kurikulum/mapel terbaru
        $kurikulums = Kurikulum::orderBy('created_at', 'desc')->get();

        return view('akademik.kurikulum', compact('kurikulums'));
    }
}