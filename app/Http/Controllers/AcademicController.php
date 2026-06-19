<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\KalenderAkademik;
use App\Models\Kurikulum;

class AcademicController extends Controller
{
    /**
     * Menampilkan Halaman Direktori Guru & Tenaga Pendidik untuk Publik.
     */
    public function pendidik()
    {
        // Ambil data guru, kelompokkan biar rapi saat ditampilkan di view
        $gurus = Guru::where('jenis_pegawai', 'guru')->orderBy('nama', 'asc')->get();
        $tendiks = Guru::where('jenis_pegawai', 'tendik')->orderBy('nama', 'asc')->get();

        return view('akademik.pendidik', compact('gurus', 'tendiks'));
    }

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

    public function kurikulum()
    {
        // Ambil semua data kurikulum/mapel terbaru
        $kurikulums = Kurikulum::orderBy('created_at', 'desc')->get();

        return view('akademik.kurikulum', compact('kurikulums'));
    }
}