<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    // Tambahkan baris fillable ini abangkuh
    protected $fillable = ['nama_dokumen', 'deskripsi', 'file_url'];
}