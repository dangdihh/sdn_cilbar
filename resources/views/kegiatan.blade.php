<x-layout>
    <x-slot:title>Kegiatan Sekolah - SDN Ciledug Barat</x-slot:title>

    <style>
        .font-headline { font-family: 'Lexend', sans-serif; }
        .font-body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>

    <div class="bg-[#F8F9FA] min-h-screen font-body text-slate-700 antialiased overflow-x-hidden" x-data="{ kategoriFilter: 'semua' }">

        <section class="relative bg-gradient-to-br from-[#1A8DA2] to-[#126675] text-white py-16 md:py-20 overflow-hidden">
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="kegiatan-grid" width="40" height="40" patternUnits="userSpaceOnUse">
                            <circle cx="2" cy="2" r="1" fill="white"/>
                        </pattern>
                    </defs>
                    <rect width="100%" height="100%" fill="url(#kegiatan-grid)" />
                </svg>
            </div>

            <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
                <div class="max-w-3xl space-y-4">
                    <span class="inline-block px-3 py-1.5 bg-[#FFF59D] text-slate-800 text-[11px] font-bold uppercase tracking-wider rounded">
                        Membangun Karakter
                    </span>
                    <h1 class="text-3xl md:text-5xl font-extrabold font-headline tracking-tight leading-tight">
                        Membentuk Generasi <br><span class="text-[#FFF59D]">Cerdas & Berkarakter</span>
                    </h1>
                    <p class="text-xs md:text-sm text-slate-100 max-w-2xl leading-relaxed opacity-90">
                        Eksplorasi potensi terbaik siswa melalui berbagai kegiatan akademik dan non-akademik yang dirancang untuk menumbuhkan kreativitas, kemandirian, dan semangat berprestasi.
                    </p>
                </div>
            </div>
        </section>

        <main class="max-w-7xl mx-auto px-6 lg:px-8 py-12 space-y-16">

            <section class="space-y-6">
                <div class="border-b border-slate-200 pb-4">
                    <h2 class="text-xl md:text-2xl font-bold font-headline text-slate-900 tracking-tight">Ekstrakurikuler Unggulan</h2>
                    <p class="text-xs text-slate-500 mt-1">Wadah bagi siswa untuk mengasah bakat dan minat di luar jam pelajaran kelas.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-[1.5rem] p-6 border border-slate-100 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-teal-50 text-[#1A8DA2] flex items-center justify-center p-2.5 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-full h-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-bold font-headline text-slate-800">Pramuka</h3>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">Membentuk kemandirian, kedisiplinan, dan rasa cinta tanah air melalui kegiatan kepanduan yang edukatif.</p>
                        <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-slate-400 flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Setiap Sabtu, 08:00
                        </div>
                    </div>

                    <div class="bg-white rounded-[1.5rem] p-6 border border-slate-100 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-teal-50 text-[#1A8DA2] flex items-center justify-center p-2.5 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-full h-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 9l10.5-3m0 0v11.25m0-11.25L9 18M9 9L3.75 12m0 0v6.75m0-6.75L9 18M9 18v6" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-bold font-headline text-slate-800">Seni Tari</h3>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">Melestarikan budaya bangsa melalui gerak indah tarian tradisional yang diajarkan secara profesional.</p>
                        <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-slate-400 flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Setiap Rabu, 14:00
                        </div>
                    </div>

                    <div class="bg-white rounded-[1.5rem] p-6 border border-slate-100 shadow-xs hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                        <div class="w-10 h-10 rounded-xl bg-teal-50 text-[#1A8DA2] flex items-center justify-center p-2.5 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-full h-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v1.244c0 .414.336.75.75.75h3c.414 0 .75-.336.75-.75V3.104m-5.25 5.625c0 .776-.63 1.406-1.406 1.406H6.75a1.406 1.406 0 0 1-1.406-1.406V7.5M18.75 18a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                            </svg>
                        </div>
                        <h3 class="text-sm font-bold font-headline text-slate-800">Klub Sains</h3>
                        <p class="text-xs text-slate-500 mt-2 leading-relaxed">Mengajak siswa bereksperimen dan menemukan keajaiban ilmu pengetahuan melalui praktik laboratorium.</p>
                        <div class="mt-4 pt-3 border-t border-slate-100 text-[11px] text-slate-400 flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Setiap Jumat, 13:30
                        </div>
                    </div>
                </div>
            </section>

            <section class="space-y-6">
                <div class="text-center">
                    <h2 class="text-xl md:text-2xl font-bold font-headline text-[#1A8DA2] tracking-tight">Prestasi Kebanggaan</h2>
                    <div class="h-0.5 w-12 bg-[#1A8DA2] mx-auto mt-2"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-xs flex flex-col justify-between group">
                        <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                            <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=800&q=80" alt="Olimpiade Sains" class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                            <div class="absolute top-4 left-4 bg-[#FFF59D] text-slate-800 text-[10px] font-bold px-3 py-1 rounded shadow-xs uppercase tracking-wider">
                                Juara 1
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-base font-bold font-headline text-slate-900 group-hover:text-[#1A8DA2] transition-colors duration-300">Olimpiade Sains Nasional Tingkat Kota</h3>
                            <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                Keberhasilan siswa dalam mengharumkan nama sekolah di ajang kompetisi sains bergengsi, merebut medali emas untuk kategori matematika tingkat dasar.
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6">
                        <div class="bg-white rounded-[1.5rem] overflow-hidden border border-slate-100 shadow-xs flex flex-col group">
                            <div class="relative h-40 bg-slate-100 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=500&q=80" alt="Festival Seni" class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                            </div>
                            <div class="p-4">
                                <h4 class="text-xs font-bold font-headline text-slate-900 line-clamp-1">Festival Seni Budaya Nasional</h4>
                                <p class="text-[11px] text-slate-400 mt-1">Apresiasi kejuaraan tari kreasi berkelompok.</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-[1.5rem] overflow-hidden border border-slate-100 shadow-xs flex flex-col group">
                            <div class="relative h-40 bg-slate-100 overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=500&q=80" alt="Medali Juara" class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                            </div>
                            <div class="p-4">
                                <h4 class="text-xs font-bold font-headline text-slate-900 line-clamp-1">Juara 2 Turnamen Sepakbola Pelajar</h4>
                                <p class="text-[11px] text-slate-400 mt-1">Kerja keras tim olahraga dalam kompetisi daerah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="space-y-6">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-200 pb-4">
                    <div>
                        <h2 class="text-xl md:text-2xl font-bold font-headline text-slate-900 tracking-tight">Kabar Terbaru & Dokumentasi</h2>
                        <p class="text-xs text-slate-500 mt-0.5">Ikuti perkembangan aktivitas harian dan informasi penting sekolah kami.</p>
                    </div>

                    <div class="flex items-center gap-1.5 bg-slate-200/60 p-1 rounded-xl self-start md:self-center">
                        <button @click="kategoriFilter = 'semua'" :class="kategoriFilter === 'semua' ? 'bg-white text-slate-900 shadow-xs' : 'text-slate-500 hover:text-slate-900'" class="px-3 py-1.5 text-xs font-bold rounded-lg transition-all duration-200">
                            Semua
                        </button>
                        <button @click="kategoriFilter = 'akademik'" :class="kategoriFilter === 'akademik' ? 'bg-[#1A8DA2] text-white' : 'text-slate-500 hover:text-slate-900'" class="px-3 py-1.5 text-xs font-bold rounded-lg transition-all duration-200">
                            Akademik
                        </button>
                        <button @click="kategoriFilter = 'kegiatan'" :class="kategoriFilter === 'kegiatan' ? 'bg-[#1A8DA2] text-white' : 'text-slate-500 hover:text-slate-900'" class="px-3 py-1.5 text-xs font-bold rounded-lg transition-all duration-200">
                            Kegiatan
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <article x-show="kategoriFilter === 'semua' || kategoriFilter === 'akademik'" x-transition class="bg-white rounded-[1.5rem] overflow-hidden border border-slate-100 shadow-xs flex flex-col justify-between group">
                        <div>
                            <div class="h-44 bg-slate-200 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&w=500&q=80" alt="Kurikulum Merdeka" class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                            </div>
                            <div class="p-5 space-y-2">
                                <div class="flex items-center gap-2 text-[10px] text-slate-400 font-bold uppercase tracking-wider">
                                    <span class="text-[#1A8DA2]">Akademik</span>
                                    <span>•</span>
                                    <span>12 Okt 2026</span>
                                </div>
                                <h3 class="text-sm font-bold font-headline text-slate-900 line-clamp-2 group-hover:text-[#1A8DA2] transition-colors">Implementasi Kurikulum Merdeka di SDN Ciledug Barat</h3>
                                <p class="text-xs text-slate-500 leading-relaxed line-clamp-3">Pendekatan pembelajaran baru yang fleksibel untuk mendorong potensi kreatif anak didik secara personal.</p>
                            </div>
                        </div>
                        <div class="p-5 pt-0">
                            <a href="#" class="text-xs font-bold text-[#1A8DA2] hover:text-[#126675] inline-flex items-center gap-1 transition-colors">
                                Baca Selengkapnya
                                <svg class="w-3 h-3 stroke-[2.5]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </article>

                    <article x-show="kategoriFilter === 'semua' || kategoriFilter === 'kegiatan'" x-transition class="bg-white rounded-[1.5rem] overflow-hidden border border-slate-100 shadow-xs flex flex-col justify-between group">
                        <div>
                            <div class="h-44 bg-slate-200 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=500&q=80" alt="Literasi Cilik" class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                            </div>
                            <div class="p-5 space-y-2">
                                <div class="flex items-center gap-2 text-[10px] text-slate-400 font-bold uppercase tracking-wider">
                                    <span class="text-amber-600">Kegiatan</span>
                                    <span>•</span>
                                    <span>05 Okt 2026</span>
                                </div>
                                <h3 class="text-sm font-bold font-headline text-slate-900 line-clamp-2 group-hover:text-[#1A8DA2] transition-colors">Literasi Cilik: Menumbuhkan Minat Baca Sejak Dini</h3>
                                <p class="text-xs text-slate-500 leading-relaxed line-clamp-3">Program pojok baca interaktif yang dirancang untuk meningkatkan kegemaran membaca buku pada jam istirahat.</p>
                            </div>
                        </div>
                        <div class="p-5 pt-0">
                            <a href="#" class="text-xs font-bold text-[#1A8DA2] hover:text-[#126675] inline-flex items-center gap-1 transition-colors">
                                Baca Selengkapnya
                                <svg class="w-3 h-3 stroke-[2.5]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </article>

                    <article x-show="kategoriFilter === 'semua' || kategoriFilter === 'akademik'" x-transition class="bg-white rounded-[1.5rem] overflow-hidden border border-slate-100 shadow-xs flex flex-col justify-between group">
                        <div>
                            <div class="h-44 bg-slate-200 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=500&q=80" alt="Rapat Wali Murid" class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                            </div>
                            <div class="p-5 space-y-2">
                                <div class="flex items-center gap-2 text-[10px] text-slate-400 font-bold uppercase tracking-wider">
                                    <span class="text-[#1A8DA2]">Akademik</span>
                                    <span>•</span>
                                    <span>28 Sep 2026</span>
                                </div>
                                <h3 class="text-sm font-bold font-headline text-slate-900 line-clamp-2 group-hover:text-[#1A8DA2] transition-colors">Rapat Wali Murid: Sinergi Sekolah & Orang Tua</h3>
                                <p class="text-xs text-slate-500 leading-relaxed line-clamp-3">Kolaborasi intensif demi memantau efektivitas belajar anak di luar lingkungan kelas formal.</p>
                            </div>
                        </div>
                        <div class="p-5 pt-0">
                            <a href="#" class="text-xs font-bold text-[#1A8DA2] hover:text-[#126675] inline-flex items-center gap-1 transition-colors">
                                Baca Selengkapnya
                                <svg class="w-3 h-3 stroke-[2.5]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </article>
                </div>
            </section>

        </main>

        <section class="max-w-7xl mx-auto px-6 lg:px-8 pb-16">
            <div class="bg-[#FFF59D]/40 border border-amber-200 rounded-[2rem] p-8 md:p-10 flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="space-y-1 text-center sm:text-left">
                    <h3 class="text-lg font-bold font-headline text-slate-950">Ingin bergabung bersama kami?</h3>
                    <p class="text-xs text-slate-600">Pendaftaran Peserta Didik Baru (PPDB) Tahun Ajaran 2026/2027 telah dibuka.</p>
                </div>
                <div class="flex flex-wrap gap-3 shrink-0 w-full sm:w-auto justify-center">
                    <a href="/ppdb" class="px-5 py-3 bg-[#1A8DA2] hover:bg-[#126675] text-white text-xs font-bold rounded-xl shadow-xs transition-all duration-200 text-center w-full sm:w-auto">
                        Daftar Sekarang
                    </a>
                    <a href="/kontak" class="px-5 py-3 bg-white hover:bg-slate-50 text-slate-800 text-xs font-bold rounded-xl border border-slate-200 transition-all duration-200 text-center w-full sm:w-auto">
                        Alur Pendaftaran
                    </a>
                </div>
            </div>
        </section>

    </div>
</x-layout>
