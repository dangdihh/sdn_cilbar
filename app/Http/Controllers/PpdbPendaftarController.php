<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PpdbPendaftar;
use App\Exports\PendaftarExport;
use Maatwebsite\Excel\Facades\Excel;

class PpdbPendaftarController extends Controller
{
    /**
     * Menampilkan daftar seluruh calon siswa yang mendaftar PPDB.
     */
    public function index()
    {
        $pendaftars = PpdbPendaftar::orderBy('created_at', 'desc')->get();
        return view('admin.ppdb.index', compact('pendaftars'));
    }

    /**
     * Menampilkan form edit data pendaftar.
     */
    public function edit($id)
    {
        $pendaftar = \App\Models\PpdbPendaftar::findOrFail($id);
        return view('admin.ppdb.edit', compact('pendaftar'));
    }

    /**
     * Menyimpan perubahan data pendaftar.
     */
    public function update(Request $request, $id)
    {
        $pendaftar = PpdbPendaftar::findOrFail($id);
        
        // Sesuaikan dengan kolom yang ada di tabel pendaftar lu
        $pendaftar->update($request->all());

        return redirect()->route('admin.ppdb.index')
            ->with('success', 'Data pendaftar ' . $pendaftar->nama_lengkap . ' berhasil diupdate!');
    }

    /**
     * Mengubah status seleksi pendaftaran siswa (Diterima / Ditolak).
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status_pendaftaran' => 'required|string|in:Diterima,Ditolak,Menunggu Seleksi',
        ]);

        $pendaftar = PpdbPendaftar::findOrFail($id);
        $pendaftar->status_pendaftaran = $request->status_pendaftaran;
        $pendaftar->save();

        return redirect()->route('admin.ppdb.index')
            ->with('success', 'Status pendaftaran ' . $pendaftar->nama_lengkap . ' berhasil diperbarui!');
    }
    public function destroy($id)
    {
        $pendaftar = PpdbPendaftar::findOrFail($id);
        $pendaftar->delete();

        return redirect()->route('admin.ppdb.index')
            ->with('success', 'Data pendaftar ' . $pendaftar->nama_lengkap . ' berhasil dihapus!');
    }

    /**
     * Fitur Ekspor Data PPDB ke Excel.
     */
    public function exportExcel()
    {
        return Excel::download(new PendaftarExport, 'Data_Pendaftar_PPDB_2026.xlsx');
    }
}