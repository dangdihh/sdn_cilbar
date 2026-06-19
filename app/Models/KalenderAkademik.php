<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KalenderAkademik extends Model
{
    // Tambahkan baris fillable ini abangkuh
    protected $fillable = ['nama_kegiatan', 'tanggal_mulai', 'tanggal_selesai', 'keterangan'];
}