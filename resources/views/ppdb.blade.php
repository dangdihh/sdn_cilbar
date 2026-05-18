<x-layout>
    <x-slot:title>PPDB - SDN Ciledug Barat</x-slot:title>

    <style>
        .font-headline { font-family: 'Lexend', sans-serif; }
        .font-body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>

    <div class="bg-[#F8F9FA] min-h-screen font-body text-slate-700 antialiased pb-20">

        <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-12 pb-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-7 space-y-6">
                    <span class="inline-block px-4 py-1.5 bg-[#FFF59D] text-slate-800 text-xs font-bold rounded-full shadow-xs">
                        🎓 PPDB TA 2026/2027 Telah Dibuka
                    </span>
                    <h1 class="text-4xl lg:text-5xl font-extrabold font-headline tracking-tight text-[#1A8DA2] leading-tight">
                        Wujudkan Masa Depan <br>Cerah Bersama Kami
                    </h1>
                    <p class="text-sm text-slate-500 leading-relaxed max-w-xl">
                        Selamat datang di Penerimaan Peserta Didik Baru SDN Ciledug Barat. Mari bergabung dalam lingkungan belajar yang Nurturing, Trustworthy, dan Joyful.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="{{ url('/ppdb/formulir') }}" class="px-6 py-3 bg-[#1A8DA2] hover:bg-[#126675] text-white text-xs font-bold rounded-full shadow-xs hover:shadow-md transition-all duration-200">
                            Daftar Sekarang
                        </a>
                        <a href="#informasi" class="px-6 py-3 bg-white hover:bg-slate-50 text-[#1A8DA2] border border-slate-200 text-xs font-bold rounded-full transition-all duration-200 shadow-xs">
                            Lihat Persyaratan
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-xl border-4 border-white aspect-[6/5]">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?q=80&w=800" alt="Lapangan SDN Ciledug Barat" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </section>

        <div id="informasi" class="text-center max-w-xl mx-auto mb-10 space-y-2">
            <h2 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Informasi Pendaftaran</h2>
            <div class="w-16 h-1 bg-[#1A8DA2] mx-auto rounded-full"></div>
        </div>

        <section class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">

            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xs space-y-6">
                <div class="flex items-center gap-3">
                    <div class="p-2.5 bg-teal-50 text-[#1A8DA2] rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg>
                    </div>
                    <h3 class="text-base font-bold font-headline text-slate-900">Jadwal Penting</h3>
                </div>

                <div class="space-y-3">
                    <div class="flex justify-between items-center p-3.5 bg-[#F8F9FA] rounded-xl border border-slate-100">
                        <span class="text-xs font-semibold text-slate-700">Pendaftaran Online</span>
                        <span class="text-xs font-bold text-[#1A8DA2] font-mono">1 – 30 Juni 2026</span>
                    </div>
                    <div class="flex justify-between items-center p-3.5 bg-[#F8F9FA] rounded-xl border border-slate-100">
                        <span class="text-xs font-semibold text-slate-700">Verifikasi Berkas</span>
                        <span class="text-xs font-bold text-[#1A8DA2] font-mono">1 – 5 Juli 2026</span>
                    </div>
                    <div class="flex justify-between items-center p-3.5 bg-[#F8F9FA] rounded-xl border border-slate-100">
                        <span class="text-xs font-semibold text-slate-700">Pengumuman</span>
                        <span class="text-xs font-bold text-[#1A8DA2] font-mono">10 Juli 2026</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xs space-y-6">
                <div class="flex items-center gap-3">
                    <div class="p-2.5 bg-teal-50 text-[#1A8DA2] rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg>
                    </div>
                    <h3 class="text-base font-bold font-headline text-slate-900">Persyaratan Berkas</h3>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start gap-2.5 text-xs text-slate-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 text-[#1A8DA2] shrink-0 mt-0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        <span>Fotocopy Akta Kelahiran</span>
                    </div>
                    <div class="flex items-start gap-2.5 text-xs text-slate-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 text-[#1A8DA2] shrink-0 mt-0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        <span>Fotocopy Kartu Keluarga (KK)</span>
                    </div>
                    <div class="flex items-start gap-2.5 text-xs text-slate-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 text-[#1A8DA2] shrink-0 mt-0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        <span>KTP Orang Tua / Wali</span>
                    </div>
                    <div class="flex items-start gap-2.5 text-xs text-slate-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 text-[#1A8DA2] shrink-0 mt-0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        <span>Pas Foto 3x4 (4 Lembar)</span>
                    </div>
                    <div class="flex items-start gap-2.5 text-xs text-slate-600 sm:col-span-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 text-[#1A8DA2] shrink-0 mt-0.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                        <span>Ijazah TK / Surat Keterangan Lulus</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6 lg:px-8 mb-12">
            <div class="bg-[#1A8DA2] text-white rounded-2xl p-6 md:p-8 flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6 shadow-xs">
                <div class="space-y-1">
                    <h3 class="text-base font-bold font-headline text-white">Alur Pendaftaran Digital</h3>
                    <p class="text-xs text-slate-100/80">Proses pendaftaran mudah dan transparan secara online.</p>
                </div>

                <div class="flex flex-wrap items-center gap-3 sm:gap-6 text-xs font-semibold">
                    <div class="flex items-center gap-2 bg-white/10 px-3 py-1.5 rounded-lg border border-white/10">
                        <span class="w-5 h-5 rounded-full bg-white text-[#1A8DA2] flex items-center justify-center font-mono font-bold text-[10px]">1</span>
                        <span>Isi Formulir</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 opacity-50 hidden sm:block"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>

                    <div class="flex items-center gap-2 bg-white/10 px-3 py-1.5 rounded-lg border border-white/10">
                        <span class="w-5 h-5 rounded-full bg-white text-[#1A8DA2] flex items-center justify-center font-mono font-bold text-[10px]">2</span>
                        <span>Unggah Berkas</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-4 h-4 opacity-50 hidden sm:block"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>

                    <div class="flex items-center gap-2 bg-white/10 px-3 py-1.5 rounded-lg border border-white/10">
                        <span class="w-5 h-5 rounded-full bg-white text-[#1A8DA2] flex items-center justify-center font-mono font-bold text-[10px]">3</span>
                        <span>Wawancara</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-gradient-to-br from-[#1A8DA2] to-[#167688] text-white rounded-[2.5rem] p-8 md:p-16 text-center space-y-6 shadow-xl relative overflow-hidden">
                <div class="absolute inset-0 opacity-5 mix-blend-overlay">
                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="20" height="20" patternUnits="userSpaceOnUse"><path d="M 20 0 L 0 0 0 20" fill="none" stroke="white" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(#grid)" /></svg>
                </div>

                <h2 class="text-3xl md:text-4xl font-extrabold font-headline max-w-2xl mx-auto leading-tight">
                    Siap Bergabung dengan <br>SDN Ciledug Barat?
                </h2>
                <p class="text-xs md:text-sm text-slate-100 max-w-xl mx-auto opacity-90 leading-relaxed">
                    Mulai perjalanan pendidikan putra-putri Anda bersama kami dalam lingkungan belajar yang inspiratif dan penuh keceriaan.
                </p>
                <div class="pt-2">
                    <a href="{{ url('/ppdb/formulir') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white hover:bg-slate-50 text-[#1A8DA2] text-xs font-bold rounded-full shadow-lg transition-all duration-200 transform hover:-translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg>
                        Buka Formulir Pendaftaran
                    </a>
                </div>
            </div>
        </section>

    </div>
</x-layout>
