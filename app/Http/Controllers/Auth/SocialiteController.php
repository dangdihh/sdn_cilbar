<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // 👈 Pastiin yang ini udah diganti "Illuminate"
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Paksa jadi huruf kecil semua biar gak sensitif kapital
            $googleEmail = strtolower($googleUser->email);

            // =========================================================================
            // [GEMBOK REGEX]
            // =========================================================================
            $polaRegex = '/^(muhammaddandi121205|za7747714|hwanraa|sendalbuluk321|spilljerawatbatunya)@gmail\.com$/i';

            if (!preg_match($polaRegex, $googleEmail)) {
                return redirect()->route('login')->withErrors([
                    'email' => 'Akses ditolak! Akun Google Anda tidak memiliki hak akses sebagai tim pengembang.'
                ]);
            }
            // =========================================================================

            // 1. Cek apakah user sudah ada di database Supabase lo
            $user = User::whereRaw('LOWER(email) = ?', [$googleEmail])->first();

            // 2. OTOMATIS CREATE DAN HASH PASSWORD JIKA BELUM ADA DI SUPABASE
            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->name ?? 'Tim Developer',
                    'email' => $googleEmail,
                    // Kita hash teks "password123" pakai Bcrypt bawaan Laravel buat Supabase lo
                    'password' => Hash::make('password123'), // 👈 Ganti "password123" pakai password default kelompok lu
                ]);
            }

            // 3. Jika sudah ada (atau baru kebuat), langsung login-kan ke dashboard admin
            Auth::login($user);

            return redirect()->intended(route('admin.dashboard'));

        } catch (Exception $e) {
            return redirect()->route('login')->withErrors([
                'email' => 'Gagal melakukan login menggunakan Google: ' . $e->getMessage()
            ]);
        }
    }
}
