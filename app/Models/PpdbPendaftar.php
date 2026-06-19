<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpdbPendaftar extends Model
{
    // Tambahkan ini biar Laravel mengizinkan pengisian data massal:
    protected $fillable = [
        'nama_lengkap',
        'nik_anak',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'nama_ayah',
        'nama_ibu',
        'nomor_telepon_ortu',
        'status_pendaftaran',
    ];
}