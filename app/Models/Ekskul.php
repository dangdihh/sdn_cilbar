<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    use HasFactory;

    protected $fillable = ['nama_ekskul', 'pembina', 'foto_url', 'jadwal_latihan', 'deskripsi'];
}