<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController, ArtikelController, PengumumanController, 
    GuruController, KalenderAkademikController, KurikulumController, 
    PpdbPendaftarController, AcademicController, PpdbController,
    EkskulController
};
use App\Http\Controllers\Auth\SocialiteController;  
use App\Models\Fasilitas;
use App\Models\Guru;

/*
|--------------------------------------------------------------------------
| Web Routes - SDN Ciledug Barat
|--------------------------------------------------------------------------
*/

// ==========================================
// 🌍 JALUR UTAMA WEBSITE (USER UMUM / PUBLIK)
// ==========================================

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/tentang', [App\Http\Controllers\HomeController::class, 'tentang'])->name('tentang');

// 2. Academic / Akademik
Route::prefix('akademik')->group(function () {
    Route::get('/kurikulum', [AcademicController::class, 'kurikulum'])->name('akademik.kurikulum');
    Route::get('/kalender', [AcademicController::class, 'kalender'])->name('akademik.kalender');
    Route::get('/tenaga-pendidik', [AcademicController::class, 'pendidik'])->name('akademik.pendidik');
});

// 3. Kegiatan & Pengumuman Publik
Route::prefix('kegiatan')->group(function () {
    Route::get('/{kategori}', [ArtikelController::class, 'kategori'])->name('kegiatan.kategori');
    Route::get('/{kategori}/{slug}', [ArtikelController::class, 'show'])->name('kegiatan.show');
});

Route::prefix('pengumuman')->group(function () {
    Route::get('/', [PengumumanController::class, 'index'])->name('pengumuman.index');
    Route::get('/{slug}', [PengumumanController::class, 'show'])->name('pengumuman.show');
});

// 4. PPDB PUBLIK 
Route::prefix('ppdb')->group(function () {
    Route::get('/', [PpdbController::class, 'index'])->name('ppdb.index');
    Route::get('/formulir', [PpdbController::class, 'form'])->name('ppdb.formulir');
    Route::post('/formulir', [PpdbController::class, 'store'])->name('ppdb.store');
    Route::get('/cek-status', [PpdbController::class, 'cekStatusForm'])->name('ppdb.cek-status');
    Route::post('/cek-status', [PpdbController::class, 'cekStatusProses'])->name('ppdb.cek-status.proses');
});

Route::get('/kontak', function () { return view('contact'); })->name('kontak');


// ==========================================
// 🔒 JALUR KHUSUS ADMIN PANEL (ONE-GATE SYSTEM)
// ==========================================

// --- FIX JALUR UTAMA EKSKUL ADMIN ---
// Kita pisah rutenya sendiri agar namanya BERSIH 'ekskul.create' tanpa keganggu prefix 'admin.'
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('ekskul', EkskulController::class);
});

// --- JALUR DATA ADMIN PANEL LAINNYA ---
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard Utama Admin
    Route::get('/dashboard', [ArtikelController::class, 'adminDashboard'])->name('dashboard');

    // 1. CRUD Kegiatan / Artikel
    Route::resource('kegiatan', ArtikelController::class)->except(['index', 'show']);

    // 2. CRUD Pengumuman
    Route::get('pengumuman', [PengumumanController::class, 'adminIndex'])->name('pengumuman.index');
    Route::resource('pengumuman', PengumumanController::class)->except(['index', 'show']);

    // 3. CRUD Fasilitas
    Route::resource('fasilitas', App\Http\Controllers\FasilitasController::class);

    // 4. CRUD Guru, Kalender, Kurikulum
    Route::resource('guru', GuruController::class);
    Route::resource('kalender', KalenderAkademikController::class);
    Route::resource('kurikulum', KurikulumController::class);
    
    // 5. PPDB Admin Panel
    Route::get('/ppdb/export-excel', [PpdbPendaftarController::class, 'exportExcel'])->name('ppdb.export');
    Route::get('/ppdb', [PpdbPendaftarController::class, 'index'])->name('ppdb.index');
    Route::patch('/ppdb/{id}/status', [PpdbPendaftarController::class, 'updateStatus'])->name('ppdb.updateStatus');
    Route::resource('ppdb', PpdbPendaftarController::class)->except(['index', 'show']);
});


// ==========================================
// 🌐 RUTE LOGIN GOOGLE (SOCIALITE)
// ==========================================
Route::get('/auth/google', [SocialiteController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);

// Memuat rute bawaan dari Laravel Breeze
require __DIR__.'/auth.php';