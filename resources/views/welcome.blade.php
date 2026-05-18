<x-layout>
    <x-slot:title>Beranda - SDN Ciledug Barat</x-slot:title>

    <style>
        .font-headline { font-family: 'Lexend', sans-serif; }
        .font-body { font-family: 'Plus Jakarta Sans', sans-serif; }
        /* Blob background untuk estetika hero section */
        .bg-blob {
            background-image: radial-gradient(circle at top right, rgba(26, 141, 162, 0.08) 0%, transparent 40%),
                              radial-gradient(circle at bottom left, rgba(255, 245, 157, 0.15) 0%, transparent 40%);
        }
    </style>

    <div class="bg-[#F8F9FA] min-h-screen font-body text-slate-700 antialiased overflow-hidden">

        <section class="relative max-w-7xl mx-auto px-6 lg:px-8 pt-12 pb-20 lg:pt-24 lg:pb-32 bg-blob">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">

                <div class="space-y-6 lg:pr-10 z-10">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-teal-50 border border-teal-100 rounded-full">
                        <span class="w-2 h-2 rounded-full bg-[#1A8DA2] animate-pulse"></span>
                        <span class="text-[10px] font-bold text-[#1A8DA2] uppercase tracking-wider font-headline">Mencerdaskan & Menyenangkan</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold font-headline text-slate-900 tracking-tight leading-[1.15]">
                        Wujudkan Masa Depan Gemilang Buah Hati Anda
                    </h1>

                    <p class="text-sm sm:text-base text-slate-500 leading-relaxed max-w-lg">
                        Di SDN Ciledug Barat, kami memadukan kurikulum unggulan dengan lingkungan belajar yang suportif untuk membentuk karakter siswa yang berprestasi.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="/ppdb" class="inline-flex items-center justify-center px-6 py-3.5 bg-[#1A8DA2] text-white text-sm font-semibold rounded-full hover:bg-[#157283] transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                            Daftar Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 ml-2"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
                        </a>
                        <a href="/akademik" class="inline-flex items-center justify-center px-6 py-3.5 bg-[#FFF59D] text-slate-800 text-sm font-semibold rounded-full hover:bg-[#f2e679] transition-all shadow-sm hover:shadow-md transform hover:-translate-y-0.5">
                            Jelajahi Program
                        </a>
                    </div>
                </div>

                <div class="relative z-10 w-full flex justify-center lg:justify-end">
                    <div class="relative w-full max-w-md aspect-square rounded-[2.5rem] overflow-hidden shadow-2xl border-4 border-white/40">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=800" alt="Gedung Sekolah" class="w-full h-full object-cover">
                    </div>
                    <svg class="absolute -bottom-6 -left-6 w-24 h-24 text-teal-200 -z-10" fill="currentColor" viewBox="0 0 100 100"><pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="2"></circle></pattern><rect width="100" height="100" fill="url(#dots)"></rect></svg>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
            <div class="flex justify-between items-end border-b-2 border-slate-200 pb-4 mb-8">
                <h2 class="text-2xl font-bold font-headline text-slate-900">Pengumuman Terbaru</h2>
                <a href="/pengumuman" class="text-xs font-bold text-[#1A8DA2] hover:text-[#126675] inline-flex items-center transition-colors">
                    Lihat Semua
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-3 h-3 ml-1"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 group flex flex-col justify-between h-full">
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg>
                            <span class="text-[11px] font-medium">20 Des 2023</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold font-headline text-slate-900 group-hover:text-[#1A8DA2] transition-colors line-clamp-2">Libur Semester Ganjil</h3>
                            <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">Informasi mengenai jadwal libur akhir semester ganjil dan pembagian rapor siswa.</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <span class="inline-block px-3 py-1 bg-[#FFF59D]/40 text-slate-700 text-[10px] font-bold rounded-md">Akademik</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 group flex flex-col justify-between h-full">
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg>
                            <span class="text-[11px] font-medium">15 Jan 2024</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold font-headline text-slate-900 group-hover:text-[#1A8DA2] transition-colors line-clamp-2">Pentas Seni Tahunan</h3>
                            <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">Persiapkan penampilan terbaikmu untuk ajang kreativitas siswa bulan depan!</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <span class="inline-block px-3 py-1 bg-teal-50 text-[#1A8DA2] text-[10px] font-bold rounded-md">Kegiatan</span>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 group flex flex-col justify-between h-full">
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.054-2.066.05A6 6 0 0 1 1.5 9v-.632a.75.75 0 0 1 .494-.707l1.455-.544a8.169 8.169 0 0 1 2.378-.45A8.17 8.17 0 0 1 8.204 7.11a.75.75 0 0 1 .494.707V9a6 6 0 0 1 .184 1.455M10.34 15.84A8.168 8.168 0 0 0 13.5 15.5c1.104 0 2.164.212 3.134.596M10.34 15.84c.328 1.455.08 3.136-.579 4.394-.436.834-1.503 1.055-2.229.418L6.2 19.34m7.3-3.84c1.23-.424 2.593-.424 3.823 0 1.25.431 2.016 1.636 1.83 2.935-.125.867-.803 1.536-1.68 1.536H15m-1.5-3.84v3.84" /></svg>
                            <span class="text-[11px] font-medium">05 Feb 2024</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold font-headline text-slate-900 group-hover:text-[#1A8DA2] transition-colors line-clamp-2">Penerimaan Siswa Baru</h3>
                            <p class="text-xs text-slate-500 mt-2 line-clamp-3 leading-relaxed">PPDB Tahun Ajaran 2024/2025 akan segera dibuka. Siapkan berkas pendaftaran Anda.</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <span class="inline-block px-3 py-1 bg-[#FFF59D]/40 text-slate-700 text-[10px] font-bold rounded-md">PPDB</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="relative flex justify-center lg:justify-start h-[400px]">
                    <div class="absolute right-0 top-0 w-2/3 h-[300px] bg-slate-200 rounded-3xl overflow-hidden shadow-md">
                         <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=600" alt="Siswa Belajar" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute left-0 bottom-0 w-2/3 h-[280px] bg-white rounded-3xl overflow-hidden border-4 border-white shadow-xl">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?q=80&w=600" alt="Perpustakaan" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -left-4 top-1/2 -translate-y-1/2 bg-[#1A8DA2] text-white p-6 rounded-2xl shadow-lg border border-teal-600/30">
                        <div class="text-3xl font-extrabold font-headline">20+</div>
                        <div class="text-[10px] font-medium opacity-90 uppercase tracking-wider mt-1">Penghargaan Tertinggi</div>
                    </div>
                    <div class="absolute right-4 bottom-10 bg-[#FFF59D] text-slate-800 p-5 rounded-2xl shadow-lg border border-yellow-200/50 flex flex-col items-center justify-center">
                        <div class="text-3xl font-extrabold font-headline">A</div>
                        <div class="text-[10px] font-bold opacity-90 uppercase tracking-wider mt-1">Akreditasi Sekolah</div>
                    </div>
                </div>

                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl font-bold font-headline text-slate-900 leading-tight">Membentuk Generasi Cerdas Berkarakter</h2>
                        <p class="text-sm text-slate-500 leading-relaxed mt-4">
                            SDN Ciledug Barat berkomitmen untuk menjadi institusi pendidikan yang tidak hanya unggul secara akademis, tetapi juga menanamkan nilai-nilai luhur dan kreativitas pada setiap siswa.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4 hover:shadow-md transition-shadow">
                            <div class="p-3 bg-teal-50 text-[#1A8DA2] rounded-xl shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 font-headline text-sm">Visi Kami</h4>
                                <p class="text-xs text-slate-500 mt-1 leading-relaxed">Menjadi sekolah dasar unggulan yang menghasilkan lulusan berakhlak mulia, cerdas, kreatif, dan mandiri.</p>
                            </div>
                        </div>

                        <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex items-start gap-4 hover:shadow-md transition-shadow">
                            <div class="p-3 bg-yellow-50 text-yellow-600 rounded-xl shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" /></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900 font-headline text-sm">Misi Kami</h4>
                                <p class="text-xs text-slate-500 mt-1 leading-relaxed">Menyelenggarakan pendidikan berkualitas, mengembangkan bakat minat, dan membangun ekosistem sekolah yang menyenangkan.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6 lg:px-8 py-16 text-center">
            <h2 class="text-2xl font-bold font-headline text-slate-900 mb-10">Ekstrakurikuler Pilihan</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-all transform hover:-translate-y-1 flex flex-col items-center justify-center gap-4 group">
                    <div class="w-14 h-14 rounded-full bg-teal-50 text-[#1A8DA2] flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" /></svg>
                    </div>
                    <span class="font-semibold text-sm font-headline text-slate-800">Sepak Bola</span>
                </div>

                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-all transform hover:-translate-y-1 flex flex-col items-center justify-center gap-4 group">
                    <div class="w-14 h-14 rounded-full bg-teal-50 text-[#1A8DA2] flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.813-3.814a1.151 1.151 0 0 0-1.623-1.623l-3.814 3.814a15.995 15.995 0 0 0-4.648 4.764ZM12 15.994a11.966 11.966 0 0 0-4.223-4.223" /></svg>
                    </div>
                    <span class="font-semibold text-sm font-headline text-slate-800">Seni Lukis</span>
                </div>

                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-all transform hover:-translate-y-1 flex flex-col items-center justify-center gap-4 group">
                    <div class="w-14 h-14 rounded-full bg-teal-50 text-[#1A8DA2] flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 11-.99-3.467l2.31-.66a2.25 2.25 0 001.632-2.163zm0 0V2.25L9 5.25v13.033a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 01-.99-3.467l2.31-.66A2.25 2.25 0 009 15.553z" /></svg>
                    </div>
                    <span class="font-semibold text-sm font-headline text-slate-800">Musik Angklung</span>
                </div>

                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-all transform hover:-translate-y-1 flex flex-col items-center justify-center gap-4 group">
                    <div class="w-14 h-14 rounded-full bg-teal-50 text-[#1A8DA2] flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-7 h-7"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148a1.204 1.204 0 010 1.704l-2.148 2.148a1.204 1.204 0 01-1.704 0l-1.25-1.25m4.204-4.204L18 8m-6-4v1.5" /></svg>
                    </div>
                    <span class="font-semibold text-sm font-headline text-slate-800">Pramuka</span>
                </div>
            </div>
        </section>

    </div>
</x-layout>
