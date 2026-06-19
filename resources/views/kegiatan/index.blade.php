<x-layout>
    <x-slot:title>Kegiatan {{ ucfirst($kategori) }} - SDN Ciledug Barat</x-slot:title>

    <style>
        .font-headline { font-family: 'Lexend', sans-serif; }
        .font-body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>

    <div class="bg-[#F8F9FA] min-h-screen font-body text-slate-700 antialiased overflow-x-hidden">

        {{-- ── HERO BANNER DINAMIS ── --}}
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
                    {{-- Judul Otomatis Berganti Sesuai Kategori di URL --}}
                    <h1 class="text-3xl md:text-5xl font-extrabold font-headline tracking-tight leading-tight capitalize">
                        Kegiatan <br><span class="text-[#FFF59D]">{{ $kategori == 'ekstrakurikuler' ? 'Ekstrakurikuler' : $kategori }}</span>
                    </h1>
                    <p class="text-xs md:text-sm text-slate-100 max-w-2xl leading-relaxed opacity-90">
                        Eksplorasi potensi terbaik siswa melalui arsip dokumentasi dan kabar terbaru mengenai aktivitas {{ $kategori }} di SDN CILEDUG BARAT.
                    </p>
                </div>
            </div>
        </section>

        <main class="max-w-7xl mx-auto px-6 lg:px-8 py-12 space-y-16">

            {{-- ── SECTION ARSIP KARTU DINAMIS (DARI SUPABASE) ── --}}
            <section class="space-y-6">
                <div class="border-b border-slate-200 pb-4">
                    <h2 class="text-xl md:text-2xl font-bold font-headline text-slate-900 tracking-tight capitalize">
                        Arsip {{ $kategori == 'ekstrakurikuler' ? 'Ekstrakurikuler' : $kategori }} Terbaru
                    </h2>
                    <p class="text-xs text-slate-500 mt-1">Ikuti perkembangan aktivitas harian dan informasi penting sekolah kami.</p>
                </div>

                {{-- Grid Looping Data Riil --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse($artikels as $artikel)
                        <article class="bg-white rounded-[1.5rem] overflow-hidden border border-slate-100 shadow-xs flex flex-col justify-between group">
                            <div>
                                <div class="h-44 bg-slate-200 overflow-hidden relative">
                                    @if($artikel->thumbnail)
                                        <img src="{{ $artikel->thumbnail }}" alt="{{ $artikel->title }}" class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-500">
                                    @else
                                        <div class="w-full h-full bg-slate-100 flex items-center justify-center text-slate-400 text-xs">No Image Available</div>
                                    @endif
                                </div>
                                <div class="p-5 space-y-2">
                                    <div class="flex items-center gap-2 text-[10px] text-slate-400 font-bold uppercase tracking-wider">
                                        <span class="text-[#1A8DA2] capitalize">{{ $artikel->kategori }}</span>
                                        <span>•</span>
                                        <span>{{ \Carbon\Carbon::parse($artikel->published_at)->locale('id')->isoFormat('D MMM YYYY') }}</span>
                                    </div>
                                    <h3 class="text-sm font-bold font-headline text-slate-900 line-clamp-2 group-hover:text-[#1A8DA2] transition-colors">
                                        {{ $artikel->title }}
                                    </h3>
                                    <p class="text-xs text-slate-500 leading-relaxed line-clamp-3">
                                        {{ $artikel->description ?? 'Klik selengkapnya untuk membaca detail kabar kegiatan ini.' }}
                                    </p>
                                </div>
                            </div>
                            <div class="p-5 pt-0">
                                <a href="{{ route('kegiatan.show', [$artikel->kategori, $artikel->slug]) }}" class="text-xs font-bold text-[#1A8DA2] hover:text-[#126675] inline-flex items-center gap-1 transition-colors">
                                    Baca Selengkapnya
                                    <svg class="w-3 h-3 stroke-[2.5]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </article>
                    @empty
                        {{-- Tampilan Cantik Kalau Kosong --}}
                        <div class="col-span-1 md:col-span-3 text-center py-16 bg-white border border-dashed border-slate-200 rounded-[1.5rem]">
                            <div class="w-12 h-12 bg-slate-50 text-slate-400 rounded-full flex items-center justify-center mb-3 mx-auto">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                                </svg>
                            </div>
                            <h4 class="text-sm font-bold text-slate-800">Data Tidak Ditemukan</h4>
                            <p class="text-xs text-slate-400 mt-0.5">Belum ada konten resmi yang dipublikasikan untuk kategori ini.</p>
                        </div>
                    @endforelse
                </div>

                {{-- Pagination Links (Supaya Bisa Ganti Halaman Otomatis) --}}
                <div class="pt-4">
                    {{ $artikels->links() }}
                </div>
            </section>

        </main>

        {{-- ── FOOTER BANNER PPDB ── --}}
        <section class="max-w-7xl mx-auto px-6 lg:px-8 pb-16">
            <div class="bg-[#FFF59D]/40 border border-amber-200 rounded-[2rem] p-8 md:p-10 flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="space-y-1 text-center sm:text-left">
                    <h3 class="text-lg font-bold font-headline text-slate-950">Ingin bergabung bersama kami?</h3>
                    <p class="text-xs text-slate-600">Pendaftaran Peserta Didik Baru (PPDB) Telah dibuka.</p>
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