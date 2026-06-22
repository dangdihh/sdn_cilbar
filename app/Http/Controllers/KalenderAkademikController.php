<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KalenderAkademik;
use Carbon\Carbon; // 👈 PASTIKAN INI DI-IMPORT UTK FILTER TANGGAL

class KalenderAkademikController extends Controller
{
    /**
     * TAMPILAN HALAMAN DEPAN USER (LANDING PAGE)
     * Fungsi baru buat nembak variabel $agendaMendatang & $agendaLampau ke kalender.blade.php
     */
    public function showKalenderPublik()
    {
        // 1. Ambal agenda mendatang (tanggal mulai hari ini ke depan)
        $agendaMendatang = KalenderAkademik::where('tanggal_mulai', '>=', Carbon::today())
                            ->orderBy('tanggal_mulai', 'asc')
                            ->get();

        // 2. Ambil agenda lampau (tanggal mulai sudah lewat)
        $agendaLampau = KalenderAkademik::where('tanggal_mulai', '<', Carbon::today())
                            ->orderBy('tanggal_mulai', 'desc')
                            ->get();

        // 3. Oper bersih ke file blade depan lo
        return view('kalender', compact('agendaMendatang', 'agendaLampau'));
    }

    /**
     * Menampilkan daftar agenda kalender akademik di panel admin.
     */
    public function index()
    {
        // Urutkan berdasarkan tanggal mulai paling dekat/terbaru
        $agendas = KalenderAkademik::orderBy('tanggal_mulai', 'asc')->get();
        return view('admin.kalender.index', compact('agendas'));
    }

    /**
     * Menampilkan form tambah agenda akademik baru.
     */
    public function create()
    {
        return view('admin.kalender.create');
    }

    /**
     * Menyimpan agenda baru ke database Supabase.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'keterangan' => 'nullable|string',
        ]);

        $kalender = new KalenderAkademik();
        $kalender->nama_kegiatan = $request->nama_kegiatan;
        $kalender->tanggal_mulai = $request->tanggal_mulai;
        $kalender->tanggal_selesai = $request->tanggal_selesai;
        $kalender->keterangan = $request->keterangan;
        $kalender->save();

        return redirect()->route('admin.kalender.index')->with('success', 'Agenda akademik berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit agenda akademik (Sisi Admin).
     */
    public function edit($id)
    {
        $agenda = KalenderAkademik::findOrFail($id);
        return view('admin.kalender.edit', compact('agenda'));
    }

    /**
     * Memproses simpan perubahan data agenda akademik (Sisi Admin).
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'keterangan' => 'nullable|string',
        ]);

        $kalender = KalenderAkademik::findOrFail($id);
        $kalender->nama_kegiatan = $request->nama_kegiatan;
        $kalender->tanggal_mulai = $request->tanggal_mulai;
        $kalender->tanggal_selesai = $request->tanggal_selesai;
        $kalender->keterangan = $request->keterangan;
        $kalender->save();

        return redirect()->route('admin.kalender.index')->with('success', 'Agenda akademik berhasil diperbarui!');
    }

    /**
     * Menghapus agenda dari database.
     */
    public function destroy($id)
    {
        $agenda = KalenderAkademik::findOrFail($id);
        $agenda->delete();

        return redirect()->route('admin.kalender.index')->with('success', 'Agenda akademik berhasil dihapus!');
    }
}
