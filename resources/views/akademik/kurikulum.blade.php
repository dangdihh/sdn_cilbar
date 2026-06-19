<x-layout>
    <x-slot:title>Struktur Kurikulum & Mapel - SDN Ciledug Barat</x-slot:title>

    {{-- Google Fonts & AOS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3, .font-headline { font-family: 'Lexend', sans-serif; }
        .section-title-bar::after {
            content: '';
            display: block;
            width: 52px;
            height: 4px;
            background: #1A8DA3;
            border-radius: 9999px;
            margin: 8px auto 0 auto;
        }
    </style>

    {{-- Jumbotron Header --}}
    <section class="relative bg-gradient-to-br from-[#f0fbfc] to-white py-16 px-6 md:px-12 text-center overflow-hidden">
        <div class="absolute -top-24 -right-24 w-80 h-80 rounded-full bg-[#1A8DA3]/5 blur-3xl pointer-events-none"></div>
        <div class="max-w-3xl mx-auto relative z-10" data-aos="fade-up">
            <span class="px-4 py-1.5 rounded-full bg-[#e0f6fa] border border-[#1A8DA3]/25 text-[#1A8DA3] text-xs font-semibold uppercase tracking-wider">
                Panduan Pembelajaran
            </span>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mt-4">Struktur Kurikulum & Mata Pelajaran</h1>
            <p class="text-gray-500 text-sm md:text-base mt-2 max-w-xl mx-auto leading-relaxed">
                Informasi resmi mengenai skema pembelajaran kurikulum merdeka nasional, pembagian mata pelajaran kelas, serta berkas unduhan dokumen pendidikan.
            </p>
        </div>
    </section>

    {{-- List Kurikulum Content --}}
    <section class="py-12 px-6 md:px-12 lg:px-20 bg-white">
        <div class="max-w-5xl mx-auto">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse($kurikulums as $i => $kurikulum)
                    <div class="group flex flex-col justify-between bg-white rounded-3xl border border-gray-100 p-6 md:p-8 shadow-sm hover:shadow-xl hover:border-gray-200 transition-all duration-300" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                        
                        <div>
                            {{-- Header Card --}}
                            <div class="flex items-start justify-between gap-4 border-b border-dashed border-gray-100 pb-4 mb-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-500 flex items-center justify-center font-bold text-lg">
                                        📚
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-900 text-base group-hover:text-[#1A8DA3] transition-colors duration-200">
                                            {{ $kurikulum->nama_dokumen }}
                                        </h3>
                                        <p class="text-[10px] text-gray-400 mt-0.5">Terdaftar: {{ \Carbon\Carbon::parse($kurikulum->created_at)->locale('id')->isoFormat('D MMMM YYYY') }}</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Deskripsi / Rincian Mapel --}}
                            <div class="text-gray-600 text-sm leading-relaxed whitespace-pre-line bg-slate-50/50 p-4 rounded-2xl border border-slate-100">
                                {{ $kurikulum->deskripsi }}
                            </div>
                        </div>

                        {{-- Action Download --}}
                        <div class="mt-6 pt-4 border-t border-gray-50 flex items-center justify-between">
                            @if($kurikulum->file_url)
                                <a href="{{ $kurikulum->file_url }}" target="_blank" class="w-full inline-flex items-center justify-center gap-2 px-5 py-3 bg-[#1A8DA3] hover:bg-[#126675] text-white text-xs font-bold rounded-xl shadow-md shadow-[#1A8DA3]/10 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                    Unduh Berkas Panduan PDF
                                </a>
                            @else
                                <span class="text-xs text-gray-400 italic flex items-center gap-1.5 py-2">
                                    ⚠️ Berkas PDF belum dilampirkan oleh admin
                                </span>
                            @endif
                        </div>

                    </div>
                @empty
                    <div class="col-span-2 py-16 text-center text-gray-400 text-sm italic rounded-3xl border border-dashed border-gray-200">
                        <div class="text-3xl mb-2">📁</div>
                        Belum ada struktur kurikulum atau mata pelajaran yang diupload saat ini.
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    {{-- AOS Script --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 700,
            easing: 'ease-out-cubic',
        });
    </script>
</x-layout>