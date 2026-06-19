<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    // Tambahkan baris fillable ini abangkuh
    protected $fillable = ['nama', 'nip', 'jabatan', 'jenis_pegawai', 'foto_url'];
}