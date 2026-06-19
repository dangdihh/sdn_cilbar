<x-admin-layout>
    <x-slot:title>Kelola Pengumuman - Admin Panel</x-slot:title>

    <div class="max-w-5xl mx-auto">
        {{-- Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Pusat Informasi & Pengumuman</h1>
                <p class="text-xs text-slate-500 mt-1">Kelola maklumat resmi sekolah yang disiarkan langsung ke website utama dan aplikasi mobile.</p>
            </div>
            <div>
                <a href="{{ route('admin.pengumuman.create') }}" 
                   class="inline-flex items-center gap-2 px-5 py-3 bg-[#1A8DA3] hover:bg-[#126675] text-white text-xs font-bold rounded-xl shadow-md transition-all">
                    📢 Tambah Pengumuman Baru
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 text-xs font-semibold rounded-xl">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel Data --}}
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-slate-400 text-[10px] uppercase font-bold tracking-wider border-b border-slate-100">
                            <th class="py-3 px-6">Judul Maklumat</th>
                            <th class="py-3 px-6">Kategori</th>
                            <th class="py-3 px-6">Status Urgensi</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm">
                        @forelse($pengumumans as $item)
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-6 font-bold text-slate-900 max-w-xs truncate">
                                    {{ $item->title }}
                                    <span class="block text-[10px] font-normal text-slate-400 mt-0.5">Diterbitkan: {{ \Carbon\Carbon::parse($item->published_at)->locale('id')->isoFormat('D MMMM YYYY') }}</span>
                                </td>
                                <td class="py-4 px-6 text-xs font-semibold text-slate-600 uppercase tracking-wider">
                                    {{ $item->category }}
                                </td>
                                <td class="py-4 px-6 text-xs">
                                    @if($item->is_important)
                                        <span class="px-2.5 py-1 bg-rose-50 text-rose-600 font-bold border border-rose-100 rounded-full text-[10px]">PENTING / DARURAT</span>
                                    @else
                                        <span class="px-2.5 py-1 bg-slate-50 text-slate-500 rounded-full text-[10px]">Biasa</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        <a href="{{ route('admin.pengumuman.edit', $item->id) }}" class="px-2.5 py-1 bg-slate-50 hover:bg-slate-100 text-slate-600 border border-slate-200 text-[10px] font-bold rounded-md transition-all">Edit</a>
                                        
                                        <form action="{{ route('admin.pengumuman.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus permanen pengumuman ini?');" class="inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 font-bold text-xs bg-transparent border-none p-0 cursor-pointer">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-12 text-center text-slate-400 text-xs">Belum ada pengumuman yang diterbitkan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if($pengumumans->hasPages())
                <div class="p-4 border-t border-slate-100 bg-slate-50/50">
                    {{ $pengumumans->links() }}
                </div>
            @endif
        </div>
    </div>
</x-admin-layout>