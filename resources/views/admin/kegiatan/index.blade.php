<x-admin-layout>
    <x-slot:title>Dashboard Admin - SDN Ciledug Barat</x-slot:title>

    <div class="max-w-5xl mx-auto">
        
        {{-- Dashboard Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Panel Kendali Guru (Admin)</h1>
                <p class="text-xs text-slate-500 mt-1">Selamat datang! Di sini Anda bisa mengelola dan menambah berita atau kegiatan sekolah.</p>
            </div>
            {{-- Tombol Utama Tambah Kegiatan --}}
            <div>
                <a href="{{ route('admin.kegiatan.create') }}" 
                   class="inline-flex items-center gap-2 px-5 py-3 bg-[#1A8DA3] hover:bg-[#126675] text-white text-xs font-bold rounded-xl shadow-md shadow-[#1A8DA3]/20 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Kegiatan Baru
                </a>
            </div>
        </div>

        {{-- Menampilkan Status Alert Sukses dari Form Store / Update / Destroy --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 text-xs font-semibold rounded-xl animate-fade-in">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel / List Daftar Kegiatan --}}
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100">
                <h2 class="text-sm font-bold text-slate-800">Daftar Kegiatan yang Sudah Terbit</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-slate-400 text-[10px] uppercase font-bold tracking-wider border-b border-slate-100">
                            <th class="py-3 px-6">Judul Kegiatan</th>
                            <th class="py-3 px-6">Kategori</th>
                            <th class="py-3 px-6">Tanggal Terbit</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm">
                        @forelse($artikels as $artikel)
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                {{-- 1. Kolom Judul --}}
                                <td class="py-4 px-6 font-semibold text-slate-900 max-w-xs truncate">
                                    {{ $artikel->title }}
                                </td>

                                {{-- 2. Kolom Kategori (Akurat Mengikuti Prefix Slug) --}}
                                <td class="py-4 px-6">
                                    <span class="px-2.5 py-1 text-[10px] font-bold rounded-full uppercase tracking-wide
                                        {{ $artikel->kategori == 'prestasi' ? 'bg-amber-50 text-amber-600 border border-amber-100' : '' }}
                                        {{ $artikel->kategori == 'ekstrakurikuler' || $artikel->kategori == 'ekskul' ? 'bg-blue-50 text-blue-600 border border-blue-100' : '' }}
                                        {{ $artikel->kategori == 'dokumentasi' ? 'bg-purple-50 text-purple-600 border border-purple-100' : '' }}
                                        {{ !in_array($artikel->kategori, ['prestasi', 'ekstrakurikuler', 'ekskul', 'dokumentasi']) ? 'bg-slate-50 text-slate-500 border border-slate-100' : '' }}
                                    ">
                                        {{-- SINKRONISASI MUTLAK: Cek apakah slug-nya mengandung awalan 'berita-' --}}
                                        @if($artikel->kategori == 'dokumentasi' && \Illuminate\Support\Str::startsWith($artikel->slug, 'berita-'))
                                            Berita Sekolah
                                        @elseif($artikel->kategori == 'ekstrakurikuler' || $artikel->kategori == 'ekskul')
                                            Ekskul
                                        @else
                                            {{-- Kalau kategori 'dokumentasi' tapi slug-nya ga ada kata 'berita-', otomatis masuk Dokumentasi murni --}}
                                            {{ $artikel->kategori == 'dokumentasi' ? 'Documentation' : $artikel->kategori }}
                                        @endif
                                    </span>
                                </td>

                                {{-- 3. Kolom Tanggal Terbit --}}
                                <td class="py-4 px-6 text-xs text-slate-400">
                                    {{ \Carbon\Carbon::parse($artikel->published_at)->locale('id')->isoFormat('D MMMM YYYY') }}
                                </td>

                                {{-- 4. Kolom Aksi --}}
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        {{-- Tombol Edit Kegiatan --}}
                                        <a href="{{ route('admin.kegiatan.edit', $artikel->id) }}" 
                                           class="px-2.5 py-1 bg-slate-50 hover:bg-slate-100 text-slate-600 border border-slate-200 text-[10px] font-bold rounded-md transition-all">
                                            Edit
                                        </a>

                                        {{-- TOMBOL HAPUS KEGIATAN --}}
                                        <form action="{{ route('admin.kegiatan.destroy', $artikel->id) }}" method="POST" 
                                              onsubmit="return confirm('Waduh abangkuh, yakin mau menghapus artikel \'{{ $artikel->title }}\' ini secara permanen?');"
                                              class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-rose-600 hover:text-rose-900 font-bold text-xs cursor-pointer bg-transparent border-none p-0">
                                                Hapus
                                            </button>
                                        </form>

                                        {{-- Tombol Lihat Hasil Publik --}}
                                        <a href="/kegiatan/{{ $artikel->kategori }}/{{ $artikel->slug }}" target="_blank" 
                                           class="text-[#1A8DA3] hover:underline text-xs font-bold">
                                            Lihat Hasil ↗
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-12 text-center text-slate-400 text-xs">
                                    Belum ada kegiatan yang diinputkan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin-layout>