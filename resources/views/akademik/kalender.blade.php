<x-layout>
    <x-slot:title>Kalender Akademik & Agenda - SDN Ciledug Barat</x-slot:title>

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
        <div class="absolute -bottom-24 -right-24 w-80 h-80 rounded-full bg-[#1A8DA3]/5 blur-3xl pointer-events-none"></div>
        <div class="max-w-3xl mx-auto relative z-10" data-aos="fade-up">
            <span class="px-4 py-1.5 rounded-full bg-[#e0f6fa] border border-[#1A8DA3]/25 text-[#1A8DA3] text-xs font-semibold uppercase tracking-wider">
                Informasi Akademik
            </span>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mt-4">Kalender & Agenda Sekolah</h1>
            <p class="text-gray-500 text-sm md:text-base mt-2 max-w-xl mx-auto leading-relaxed">
                Pantau jadwal kegiatan, ujian, libur nasional, dan seluruh rangkaian agenda akademik tahun ajaran aktif di SDN Ciledug Barat.
            </p>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="py-12 px-6 md:px-12 lg:px-20 bg-white">
        <div class="max-w-4xl mx-auto">

            {{-- SEKSI 1: AGENDA MENDATANG --}}
            <div class="mb-16">
                <div class="flex items-center gap-3 mb-8" data-aos="fade-right">
                    <div class="w-10 h-10 rounded-2xl bg-[#e0f6fa] flex items-center justify-center text-[#1A8DA3]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">Agenda Mendatang</h2>
                        <p class="text-xs text-gray-400">Jadwal kegiatan yang akan berlangsung</p>
                    </div>
                </div>

                <div class="space-y-4">
                    @forelse($agendaMendatang as $agenda)
                        <div class="group flex flex-col sm:flex-row items-start gap-4 p-5 rounded-3xl border border-gray-100 bg-white hover:border-[#1A8DA3]/30 hover:shadow-lg transition-all duration-300" data-aos="fade-up">
                            {{-- Badge Tanggal --}}
                            <div class="flex sm:flex-col items-center justify-center w-full sm:w-20 h-14 sm:h-20 rounded-2xl bg-gradient-to-br from-[#1A8DA3] to-[#147284] text-white text-center flex-shrink-0 p-2">
                                <span class="text-lg md:text-2xl font-extrabold font-headline leading-none">
                                    {{ \Carbon\Carbon::parse($agenda->tanggal_mulai)->format('d') }}
                                </span>
                                <span class="text-[10px] md:text-xs font-medium uppercase tracking-wider sm:mt-1 ml-2 sm:ml-0">
                                    {{ \Carbon\Carbon::parse($agenda->tanggal_mulai)->locale('id')->isoFormat('MMM YYYY') }}
                                </span>
                            </div>

                            {{-- Detail Informasi --}}
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center gap-2 flex-wrap">
                                    <span class="px-2.5 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider bg-emerald-50 text-emerald-600 border border-emerald-100">
                                        Upcoming
                                    </span>
                                    @if($agenda->tanggal_selesai && $agenda->tanggal_selesai != $agenda->tanggal_mulai)
                                        <span class="text-xs text-gray-400 font-medium">
                                            s.d. {{ \Carbon\Carbon::parse($agenda->tanggal_selesai)->locale('id')->isoFormat('D MMMM YYYY') }}
                                        </span>
                                    @endif
                                </div>

                                {{-- FIX SINKRONISASI SUPABASE: nama_kegiatan --}}
                                <h3 class="font-bold text-gray-800 text-base mt-2 group-hover:text-[#1A8DA3] transition-colors duration-200">
                                    {{ $agenda->nama_kegiatan }}
                                </h3>

                                {{-- FIX SINKRONISASI SUPABASE: keterangan --}}
                                @if($agenda->keterangan)
                                    <p class="text-gray-500 text-sm mt-1 leading-relaxed">{{ $agenda->keterangan }}</p>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="p-8 text-center rounded-3xl border border-dashed border-gray-200" data-aos="fade-up">
                            <p class="text-sm text-gray-400 italic">Belum ada agenda akademik mendatang yang dijadwalkan.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            {{-- SEKSI 2: ARSIP AGENDA LAMPAU (SELESAI) --}}
            <div>
                <div class="flex items-center gap-3 mb-6" data-aos="fade-right">
                    <div class="w-10 h-10 rounded-2xl bg-gray-100 flex items-center justify-center text-gray-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold text-gray-700">Riwayat Agenda (Selesai)</h2>
                        <p class="text-xs text-gray-400">Kegiatan sekolah yang telah terlaksana</p>
                    </div>
                </div>

                <div class="border-l-2 border-dashed border-gray-100 pl-4 sm:pl-6 space-y-6">
                    @forelse($agendaLampau as $agenda)
                        <div class="relative flex flex-col sm:flex-row items-start gap-3 p-4 rounded-2xl border border-gray-50 bg-gray-50/50 opacity-75 hover:opacity-100 transition-opacity duration-200" data-aos="fade-up">
                            {{-- Penanda Garis --}}
                            <div class="absolute -left-[23px] top-6 w-3 h-3 rounded-full bg-gray-300 border-2 border-white"></div>

                            <div class="min-w-[120px] flex-shrink-0">
                                <span class="text-xs font-mono font-bold text-gray-500 bg-gray-100 px-2 py-0.5 rounded">
                                    {{ \Carbon\Carbon::parse($agenda->tanggal_mulai)->locale('id')->isoFormat('D MMM YYYY') }}
                                </span>
                            </div>

                            <div class="flex-1">
                                {{-- FIX SINKRONISASI ARSIP: nama_kegiatan --}}
                                <h4 class="text-sm font-semibold text-gray-700 line-through decoration-gray-300">
                                    {{ $agenda->nama_kegiatan }}
                                </h4>

                                {{-- FIX SINKRONISASI ARSIP: keterangan --}}
                                @if($agenda->keterangan)
                                    <p class="text-xs text-gray-400 mt-0.5 max-w-xl">{{ $agenda->keterangan }}</p>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p class="text-xs text-gray-400 italic pl-2">Belum ada riwayat agenda lampau.</p>
                    @endforelse
                </div>
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
