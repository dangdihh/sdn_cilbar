<x-layout>
    {{-- Container Utama disamain sama style page lain (pake font & padding standar lu) --}}
    <section class="min-h-[70vh] flex items-center justify-center py-16 px-6 bg-slate-50">
        
        <div class="w-full max-w-md bg-white rounded-3xl border border-gray-100 p-8 shadow-xl shadow-slate-200/50" data-aos="fade-up">
            
            {{-- Header Title --}}
            <div class="text-center mb-8">
                <span class="text-3xl">🔑</span>
                <h2 class="text-2xl font-bold text-gray-900 mt-3 tracking-tight">Portal Log In</h2>
                
                {{-- Badge Pengingat Akses Khusus --}}
                <div class="mt-3">
                    <span class="text-[11px] text-rose-600 font-semibold bg-rose-50 px-3 py-1.5 rounded-full border border-rose-100 inline-block">
                        ⚠️ Akses Khusus Admin & Guru SDN Ciledug Barat
                    </span>
                </div>
            </div>

            {{-- Info Alert jika Email Google belum terdaftar di database --}}
            @if ($errors->any())
                <div class="mb-5 p-4 bg-red-50 border border-red-200 text-red-600 text-xs rounded-xl flex flex-col gap-1">
                    @foreach ($errors->all() as $error)
                        <p class="font-medium">• {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            {{-- Tombol Login Google Premium (Aksen Hijau Toska/Warna Utama Web Lu) --}}
            <div class="space-y-4">
                <a href="{{ route('google.login') }}" class="w-full flex items-center justify-center gap-3 py-3.5 border border-gray-200 rounded-xl bg-white hover:bg-slate-50 text-sm font-bold text-gray-700 shadow-sm transition-all duration-200 cursor-pointer hover:scale-[1.01]">
                    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google Logo">
                    Masuk dengan Akun Google
                </a>
            </div>

            {{-- Footer Card --}}
            <div class="mt-8 pt-5 border-t border-gray-100 text-center">
                <p class="text-[11px] text-gray-400 leading-relaxed">
                    Pastikan Anda menggunakan email yang telah didaftarkan oleh sistem sekolah untuk dapat mengakses Dashboard Admin.
                </p>
            </div>

        </div>

    </section>
</x-layout>