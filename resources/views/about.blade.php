<x-layout>
    <x-slot:title>Tentang Kami - SDN Ciledug Barat</x-slot:title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .font-headline { font-family: 'Lexend', sans-serif; }
        .font-body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>

    <div class="bg-[#F8F9FA] min-h-screen font-body text-slate-700 antialiased overflow-x-hidden">

        {{-- ── SECTION 1: HERO PROFIL SINGKAT ── --}}
        <section class="max-w-7xl mx-auto px-6 lg:px-8 pt-12 pb-16 lg:pt-20 lg:pb-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-5 space-y-5">
                    <div class="inline-block px-3 py-1.5 bg-[#FFF59D] text-slate-800 text-[11px] font-bold rounded-md uppercase tracking-wide">
                        Tentang Kami
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 font-headline tracking-tight leading-[1.2]">
                        Membangun Generasi Unggul Sejak Dini
                    </h1>
                    <p class="text-slate-500 text-xs sm:text-sm leading-relaxed font-normal">
                        SDN Ciledug Barat berkomitmen menyediakan lingkungan pendidikan yang aman, inklusif, dan inovatif. Kami fokus pada pengembangan potensi akademik serta pembentukan karakter anak yang berintegritas dan siap menghadapi masa depan.
                    </p>
                    <div class="pt-2 flex items-center gap-3 text-[#1A8DA2] font-semibold text-xs">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <span>Terakreditasi A Resmi</span>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div class="w-full aspect-[16/10] rounded-[2rem] overflow-hidden border-4 border-white shadow-md transform hover:scale-[1.01] transition-transform duration-300">
                        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=800" alt="Gedung SDN Ciledug Barat" class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </section>

        {{-- ── SECTION 2: VISI & MISI ── --}}
        <section class="max-w-7xl mx-auto px-6 lg:px-8 py-12 space-y-8">
            <div class="text-center">
                <h2 class="text-xl font-bold font-headline tracking-tight text-slate-900 border-b-2 border-[#1A8DA2] inline-block pb-2">
                    Visi & Misi
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white border border-slate-200/60 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300 space-y-4">
                    <div class="w-10 h-10 rounded-xl bg-[#E0F2F1] text-[#1A8DA2] flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="text-sm font-bold text-slate-900 font-headline">Visi Kami</h3>
                    <p class="text-slate-500 text-xs leading-relaxed font-normal">
                        Menjadi lembaga pendidikan dasar yang unggul dalam melahirkan generasi bertakwa, cerdas intelektual, matang emosional, serta memiliki kepedulian tinggi terhadap kelestarian lingkungan sekitar pada tahun 2028.
                    </p>
                </div>

                <div class="bg-white border border-slate-200/60 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow duration-300 space-y-4">
                    <div class="w-10 h-10 rounded-xl bg-[#FFF59D] text-slate-800 flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                    </div>
                    <h3 class="text-sm font-bold text-slate-900 font-headline">Misi Kami</h3>
                    <ul class="space-y-2.5 text-slate-500 text-xs font-normal">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-[#1A8DA2] shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span>Menyelenggarakan proses pembelajaran aktif, kreatif, efektif, dan menyenangkan.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-[#1A8DA2] shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span>Menanamkan nilai budi pekerti keagamaan lewat pembiasaan aktivitas harian sekolah.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-[#1A8DA2] shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
                            <span>Mengembangkan minat bakat anak melalui program ekstrakurikuler terarah.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- ── SECTION 3: STRUKTUR ORGANISASI (FIXED: DINAMIS BERJENJANG PIRAMIDA) ── --}}
        <section class="max-w-7xl mx-auto px-6 lg:px-8 py-12 space-y-12">
            <div class="text-center max-w-xl mx-auto space-y-2">
                <h2 class="text-xl font-bold font-headline tracking-tight text-slate-900">Struktur Organisasi</h2>
                <p class="text-slate-400 text-xs font-normal">Manajemen inti pengambil kebijakan penjamin mutu operasional SDN Ciledug Barat.</p>
            </div>

            <div class="space-y-8 flex flex-col items-center">
                {{-- [LEVEL 1]: Pimpinan Utama (Kepala Sekolah) --}}
                @if($kepalaSekolah)
                <div class="bg-white border-2 border-[#1A8DA2] rounded-xl p-4 w-64 text-center shadow-sm relative group">
                    <div class="w-12 h-12 rounded-full overflow-hidden mx-auto mb-2.5 border-2 border-slate-100">
                        <img src="{{ $kepalaSekolah->foto_url }}" 
                             alt="{{ $kepalaSekolah->nama }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="text-xs font-bold text-slate-900 font-headline">{{ $kepalaSekolah->nama }}</h4>
                    <span class="text-[10px] text-[#1A8DA3] font-semibold tracking-wide uppercase mt-0.5 block">{{ $kepalaSekolah->jabatan }}</span>
                    @if($kepalaSekolah->nip)
                        <span class="text-[9px] text-slate-400 block mt-0.5">NIP: {{ $kepalaSekolah->nip }}</span>
                    @endif
                </div>
                @endif

                {{-- Garis Hubung 1 ke 2 --}}
                @if($wakilDanKaur->isNotEmpty())
                    <div class="w-0.5 h-6 bg-slate-200"></div>
                @endif

                {{-- [LEVEL 2]: Jajaran Wakil & Kepala Urusan Manajemen Inti --}}
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-6 w-full max-w-3xl justify-center">
                    @foreach($wakilDanKaur as $item)
                        <div class="bg-white border-2 border-teal-500/20 rounded-xl p-4 text-center shadow-sm hover:border-[#1A8DA2] transition-all group">
                            <div class="w-11 h-11 rounded-full overflow-hidden mx-auto mb-2 border border-slate-100">
                                <img src="{{ $item->foto_url }}" 
                                     alt="{{ $item->nama }}" class="w-full h-full object-cover">
                            </div>
                            <h5 class="text-[11px] font-bold text-slate-900 font-headline">{{ $item->nama }}</h5>
                            <span class="text-[9px] text-[#1A8DA3] font-semibold block mt-0.5 uppercase tracking-wider">{{ $item->jabatan }}</span>
                            @if($item->nip)
                                <span class="text-[8px] text-slate-400 block mt-0.5">NIP: {{ $item->nip }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>
                {{-- Tambahan Tombol Cantik ke Halaman Direktori Lengkap Guru --}}
                <div class="pt-6 text-center">
                    <a href="{{ route('akademik.pendidik') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-slate-100 hover:bg-[#E0F2F1] text-slate-700 hover:text-[#1A8DA2] text-xs font-bold rounded-xl transition-all duration-200">
                        <span>Lihat Seluruh Tenaga Pendidik & Staf</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </section>

        {{-- ── SECTION 4: FASILITAS SEKOLAH DINAMIS (BENTO LAYOUT SINKRON DATABASE) ── --}}
        <section class="bg-slate-200/40 py-16">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 space-y-10">
                <div class="flex items-center justify-between border-b border-slate-300/60 pb-4">
                    <h2 class="text-xl font-bold font-headline tracking-tight text-slate-900">
                        Fasilitas Sekolah
                    </h2>
                    <span class="text-xs font-semibold text-slate-400 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h18v3H3V3z"/></svg>
                        Modern & Lengkap
                    </span>
                </div>

                @if($daftarFasilitas->isNotEmpty())
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                        
                        {{-- CARD UTAMA/PERTAMA (Besar - md:col-span-7) --}}
                        @php $firstFasilitas = $daftarFasilitas->first(); @endphp
                        <div class="md:col-span-7 relative h-72 md:h-96 rounded-2xl overflow-hidden shadow-sm border border-white group">
                            <img src="{{ $firstFasilitas->foto ?? 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=800' }}" 
                                 alt="{{ $firstFasilitas->nama_fasilitas }}" 
                                 class="w-full h-full object-cover group-hover:scale-[1.02] transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-900/20 to-transparent flex flex-col justify-end p-5">
                                <h4 class="text-white text-sm font-bold font-headline">{{ $firstFasilitas->nama_fasilitas }}</h4>
                                <p class="text-slate-300/90 text-[10px] mt-0.5 font-normal">{{ $firstFasilitas->deskripsi }}</p>
                            </div>
                        </div>

                        {{-- CONTAINER UNTUK CARD KEDUA DAN SETERUSNYA (Kecil - md:col-span-5) --}}
                        <div class="md:col-span-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-4">
                            @foreach($daftarFasilitas->skip(1) as $f)
                                <div class="relative h-44 rounded-2xl overflow-hidden shadow-sm border border-white group">
                                    <img src="{{ $f->foto ?? 'https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=600' }}" 
                                         alt="{{ $f->nama_fasilitas }}" 
                                         class="w-full h-full object-cover group-hover:scale-[1.02] transition-transform duration-500">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 to-transparent flex flex-col justify-end p-4">
                                        <h4 class="text-white text-xs font-bold font-headline">{{ $f->nama_fasilitas }}</h4>
                                        <p class="text-slate-300/90 text-[9px] mt-0.5 font-normal line-clamp-1">{{ $f->deskripsi }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                @else
                    {{-- Tampilan Fallback jika Tabel di Supabase Masih Kosong --}}
                    <div class="text-center py-12 bg-white rounded-2xl border border-slate-200/40 text-slate-400 text-xs italic">
                        Belum ada sarana fasilitas sekolah yang dipublikasikan ke database.
                    </div>
                @endif

            </div>
        </section>

        {{-- ── SECTION 5: CALL TO ACTION PPDB ── --}}
        <section class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
            <div class="bg-gradient-to-r from-[#1A8DA2] to-[#126675] rounded-[2rem] p-8 sm:p-12 text-center text-white relative overflow-hidden shadow-md group">
                <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/5 rounded-full blur-xl"></div>
                <div class="absolute -left-10 -top-10 w-40 h-40 bg-[#FFF59D]/10 rounded-full blur-xl"></div>

                <div class="max-w-xl mx-auto space-y-5 relative z-10">
                    <span class="inline-block px-2.5 py-1 bg-[#FFF59D] text-slate-900 text-[10px] font-bold rounded-md font-body uppercase tracking-wider">
                        Penerimaan Baru
                    </span>
                    <h3 class="text-xl sm:text-2xl font-bold font-headline tracking-tight">
                        Mulai Perjalanan Belajarmu Bersama Kami
                    </h3>
                    <p class="text-teal-50/80 text-xs leading-relaxed font-normal">
                        Jangan lewatkan kesempatan emas bergabung dengan angkatan tahun ini. Kuota kelas terbatas untuk menjaga efektivitas belajar mengajar.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('ppdb.formulir') }}" class="inline-block px-6 py-3 bg-white text-[#1A8DA2] text-xs font-bold rounded-lg shadow-sm hover:bg-slate-50 transition-all duration-200 transform active:scale-95">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-layout>