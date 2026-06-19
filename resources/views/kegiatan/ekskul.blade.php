<x-layout>
    <x-slot:title>Ekstrakurikuler - SDN Ciledug Barat</x-slot:title>

    <section class="py-16 px-6 md:px-12 lg:px-20 bg-gradient-to-b from-[#f0fbfc] to-white min-h-[80vh]">
        <div class="max-w-7xl mx-auto">
            
            {{-- Header Halaman --}}
            <div class="text-center mb-14">
                <span class="px-3 py-1 rounded-full bg-[#e0f6fa] text-[#1A8DA3] text-xs font-bold uppercase tracking-wider">
                    Program Kegiatan
                </span>
                <h1 class="font-headline text-3xl md:text-4xl font-bold text-gray-900 mt-3">
                    Daftar Ekstrakurikuler
                </h1>
                <p class="text-gray-500 max-w-md mx-auto text-sm mt-2">
                    Wadah pengembangan minat, bakat, dan kreativitas unggulan siswa-siswi SDN Ciledug Barat.
                </p>
            </div>

            {{-- Grid List Ekskul Visual Rich --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($ekskuls as $ekskul)
                    <div class="group flex flex-col bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-[#1A8DA3]/20 transition-all duration-300">
                        
                        {{-- Bagian Visual Gambar Ekskul --}}
                        <div class="relative h-48 w-full overflow-hidden bg-slate-100">
                            <img src="{{ $ekskul->foto_url }}" alt="{{ $ekskul->nama_ekskul }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            
                            {{-- Badge Jadwal Latihan Ngambang di Atas Foto --}}
                            @if($ekskul->jadwal_latihan)
                            <span class="absolute bottom-3 left-3 px-3 py-1 text-[10px] font-bold text-gray-800 bg-[#FFF59D] rounded-full shadow-sm">
                                📅 {{ $ekskul->jadwal_latihan }}
                            </span>
                            @endif
                        </div>

                        {{-- Konten Teks Detail Ekskul --}}
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-headline text-xl font-bold text-gray-800 mb-1.5 group-hover:text-[#1A8DA3] transition-colors">
                                    {{ $ekskul->nama_ekskul }}
                                </h3>
                                
                                <p class="text-xs font-semibold text-slate-500 mb-4 flex items-center gap-1">
                                    <span>👨‍🏫</span> Pembina: <span class="text-slate-700 font-bold">{{ $ekskul->pembina }}</span>
                                </p>

                                <p class="text-gray-500 text-sm leading-relaxed line-clamp-3">
                                    {{ $ekskul->deskripsi ?? 'Kegiatan ekstrakurikuler resmi di SDN Ciledug Barat untuk melatih keterampilan siswa.' }}
                                </p>
                            </div>

                            <div class="pt-5 mt-4 border-t border-slate-50 flex items-center justify-between text-xs text-[#1A8DA3] font-bold">
                                <span>Status: Aktif</span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-16 text-gray-400 text-sm">
                        Belum ada data ekstrakurikuler yang dipublikasikan.
                    </div>
                @endforelse
            </div>

            {{-- Pagination Links --}}
            <div class="mt-12">
                {{ $ekskuls->links() }}
            </div>

        </div>
    </section>
</x-layout>