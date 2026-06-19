<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
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
            
            // 1. Cek apakah user sudah ada di database
            $user = User::where('email', $googleUser->email)->first();

            if (!$user) {
                // 2. Kalau BELUM ADA, otomatis daftarkan ke database
                // Kita kasih password acak (Str::random) biar lolos dari constraint NOT NULL Supabase
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => bcrypt(Str::random(16)), 
                ]);
            }

            // 3. Langsung login-kan user (baik yang baru dibuat maupun yang sudah ada)
            Auth::login($user);
            
            return redirect()->intended(route('admin.dashboard'));

        } catch (Exception $e) {
            return redirect()->route('login')->withErrors([
                'email' => 'Gagal melakukan login menggunakan Google atau koneksi terputus.'
            ]);
        }
    }
}