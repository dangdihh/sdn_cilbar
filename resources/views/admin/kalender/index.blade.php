<x-admin-layout>
    <x-slot:title>Kelola Kalender Academic - Admin Panel</x-slot:title>

    <div class="max-w-5xl mx-auto">
        
        {{-- Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Kalender & Agenda Akademik</h1>
                <p class="text-xs text-slate-500 mt-1">Kelola jadwal kegiatan, hari libur, ujian, dan agenda penting sekolah lainnya.</p>
            </div>
            <div>
                <a href="{{ route('admin.kalender.create') }}" 
                   class="inline-flex items-center gap-2 px-5 py-3 bg-[#1A8DA3] hover:bg-[#126675] text-white text-xs font-bold rounded-xl shadow-md shadow-[#1A8DA3]/20 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Agenda Baru
                </a>
            </div>
        </div>

        {{-- Alert Status --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 text-xs font-semibold rounded-xl">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel Data Agenda --}}
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100">
                <h2 class="text-sm font-bold text-slate-800">Daftar Agenda Sekolah Terjadwal</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-slate-400 text-[10px] uppercase font-bold tracking-wider border-b border-slate-100">
                            <th class="py-3 px-6">Nama Kegiatan / Agenda</th>
                            <th class="py-3 px-6">Tanggal Pelaksanaan</th>
                            <th class="py-3 px-6">Keterangan</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm">
                        @forelse($agendas as $agenda)
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-6 font-bold text-slate-900">
                                    {{ $agenda->nama_kegiatan }}
                                </td>
                                <td class="py-4 px-6 text-slate-600 font-medium text-xs">
                                    @if($agenda->tanggal_selesai && $agenda->tanggal_mulai != $agenda->tanggal_selesai)
                                        {{ \Carbon\Carbon::parse($agenda->tanggal_mulai)->locale('id')->isoFormat('D MMMM YYYY') }} 
                                        <span class="text-slate-400 font-normal block mt-0.5">s/d {{ \Carbon\Carbon::parse($agenda->tanggal_selesai)->locale('id')->isoFormat('D MMMM YYYY') }}</span>
                                    @else
                                        {{ \Carbon\Carbon::parse($agenda->tanggal_mulai)->locale('id')->isoFormat('D MMMM YYYY') }}
                                    @endif
                                </td>
                                <td class="py-4 px-6 text-slate-500 max-w-xs truncate text-xs">
                                    {{ $agenda->keterangan ?? '-' }}
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        {{-- TOMBOL EDIT AGENDA --}}
                                        <a href="{{ route('admin.kalender.edit', $agenda->id) }}" 
                                           class="px-2.5 py-1 bg-slate-50 hover:bg-slate-100 text-slate-600 border border-slate-200 text-[10px] font-bold rounded-md transition-all">
                                            Edit
                                        </a>

                                        {{-- TOMBOL HAPUS AGENDA --}}
                                        <form action="{{ route('admin.kalender.destroy', $agenda->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus agenda ini?');" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 font-bold text-xs hover:underline cursor-pointer bg-transparent border-none p-0">
                                                Hapus Agenda
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-12 text-center text-slate-400 text-xs">
                                    Belum ada agenda akademik yang diinputkan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin-layout>