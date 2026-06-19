<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    // KUNCI UTAMA: Paksa Laravel pake tabel 'pengumuman' (tanpa huruf 's')
    protected $table = 'pengumuman';

    // Kolom yang diizinkan untuk mass assignment (sesuaikan dengan kolom lu di Supabase)
    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'is_important',
        'is_published',
        'published_at'
    ];
}