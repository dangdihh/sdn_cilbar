<?php

namespace App\Exports;

use App\Models\PpdbPendaftar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PendaftarExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * Mengambil hanya data yang berstatus 'Diterima'
    */
    public function collection()
    {
        return PpdbPendaftar::where('status_pendaftaran', 'Diterima')
                            ->orderBy('created_at', 'desc')
                            ->get();
    }

    /**
    * Header kolom yang lebih deskriptif
    */
    public function headings(): array
    {
        return [
            'ID',
            'Nama Lengkap Siswa',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Nama Ayah',
            'Nama Ibu',
            'No. HP / WhatsApp',
            'Status',
            'Tanggal Daftar'
        ];
    }

    /**
    * Memetakan data ke kolom Excel
    */
    public function map($pendaftar): array
    {
        return [
            $pendaftar->id,
            $pendaftar->nama_lengkap,
            $pendaftar->jenis_kelamin,
            $pendaftar->tempat_lahir,
            $pendaftar->tanggal_lahir,
            $pendaftar->nama_ayah,
            $pendaftar->nama_ibu,
            $pendaftar->nomor_telepon_ortu, // Disesuaikan dengan controller lu
            $pendaftar->status_pendaftaran, // Disesuaikan dengan kolom di database
            $pendaftar->created_at->format('d-m-Y H:i')
        ];
    }
}