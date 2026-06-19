<x-layout>
    <x-slot:title>Direktori Guru & Staf - SDN Ciledug Barat</x-slot:title>

    {{-- Google Fonts & AOS (Sama seperti Home) --}}
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
        <div class="absolute -top-24 -left-24 w-80 h-80 rounded-full bg-[#1A8DA3]/5 blur-3xl pointer-events-none"></div>
        <div class="max-w-3xl mx-auto relative z-10" data-aos="fade-up">
            <span class="px-4 py-1.5 rounded-full bg-[#e0f6fa] border border-[#1A8DA3]/25 text-[#1A8DA3] text-xs font-semibold uppercase tracking-wider">
                Profil Sekolah
            </span>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mt-4">Tenaga Pendidik & Kependidikan</h1>
            <p class="text-gray-500 text-sm md:text-base mt-2 max-w-xl mx-auto leading-relaxed">
                Mengenal lebih dekat jajaran guru luhur dan staf profesional yang berdedikasi penuh dalam membimbing dan melayani seluruh siswa SDN Ciledug Barat.
            </p>
        </div>
    </section>

    {{-- Daftar Guru (Tenaga Pendidik) --}}
    <section class="py-12 px-6 md:px-12 lg:px-20 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-900 section-title-bar">Dewan Guru (Pendidik)</h2>
                <p class="text-xs text-gray-400 mt-2">Guru Kelas dan Guru Mata Pelajaran Aktif</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8">
                @forelse($gurus as $i => $guru)
                    <div class="group flex flex-col bg-white rounded-3xl border border-gray-100 p-4 text-center shadow-sm hover:shadow-xl hover:-translate-y-2 hover:border-gray-200 transition-all duration-300" 
                         data-aos="fade-up" data-aos-delay="{{ $i * 50 }}">
                        
                        {{-- Frame Foto Profil --}}
                        <div class="relative w-28 h-28 md:w-32 md:h-32 mx-auto rounded-full overflow-hidden bg-slate-50 border-4 border-white shadow-md group-hover:scale-105 transition-transform duration-300">
                            <img src="{{ $guru->foto_url }}" alt="{{ $guru->nama }}" class="w-full h-full object-cover">
                        </div>

                        {{-- Info --}}
                        <div class="mt-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-gray-900 text-sm md:text-base leading-snug group-hover:text-[#1A8DA3] transition-colors duration-200">
                                    {{ $guru->nama }}
                                </h3>
                                <p class="text-xs text-gray-400 font-medium mt-1 uppercase tracking-wider bg-slate-50 inline-block px-2.5 py-0.5 rounded-md">
                                    {{ $guru->jabatan }}
                                </p>
                            </div>
                            
                            <div class="mt-4 pt-3 border-t border-dashed border-gray-100">
                                <span class="text-[10px] font-mono text-gray-400 block">
                                    NIP: {{ $guru->nip ?? '-' }}
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 py-12 text-center text-gray-400 text-sm italic">
                        Data dewan guru belum diunggah oleh admin.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Daftar Tendik (Tenaga Kependidikan / Staf TU / Karyawan) --}}
    <section class="py-16 px-6 md:px-12 lg:px-20 bg-[#f8fffe] border-t border-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-900 section-title-bar">Tenaga Kependidikan (Staf)</h2>
                <p class="text-xs text-gray-400 mt-2">Tim Administrasi, Tata Usaha, dan Operasional Sekolah</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-8">
                @forelse($tendiks as $i => $staf)
                    <div class="group flex flex-col bg-white rounded-3xl border border-gray-100 p-4 text-center shadow-sm hover:shadow-xl hover:-translate-y-2 hover:border-gray-200 transition-all duration-300" 
                         data-aos="fade-up" data-aos-delay="{{ $i * 50 }}">
                        
                        <div class="relative w-28 h-28 md:w-32 md:h-32 mx-auto rounded-full overflow-hidden bg-slate-50 border-4 border-white shadow-md group-hover:scale-105 transition-transform duration-300">
                            <img src="{{ $staf->foto_url }}" alt="{{ $staf->nama }}" class="w-full h-full object-cover">
                        </div>

                        <div class="mt-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-gray-900 text-sm md:text-base leading-snug group-hover:text-[#1A8DA3] transition-colors duration-200">
                                    {{ $staf->nama }}
                                </h3>
                                <p class="text-xs text-slate-500 font-medium mt-1 uppercase tracking-wider bg-slate-100 inline-block px-2.5 py-0.5 rounded-md">
                                    {{ $staf->jabatan }}
                                </p>
                            </div>
                            
                            <div class="mt-4 pt-3 border-t border-dashed border-gray-100">
                                <span class="text-[10px] font-mono text-gray-400 block">
                                    NIP: {{ $staf->nip ?? '-' }}
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 py-12 text-center text-gray-400 text-sm italic">
                        Data staf kependidikan belum diunggah oleh admin.
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