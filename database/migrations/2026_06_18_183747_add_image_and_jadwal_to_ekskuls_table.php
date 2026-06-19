<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ekskuls', function (Blueprint $table) {
            // Kita tambah kolom foto_url (default gambar sekolah) dan jadwal_latihan
            $table->string('foto_url')->nullable()->after('pembina');
            $table->string('jadwal_latihan')->nullable()->after('foto_url');
        });
    }

    public function down(): void
    {
        Schema::table('ekskuls', function (Blueprint $table) {
            $table->dropColumn(['foto_url', 'jadwal_latihan']);
        });
    }
};