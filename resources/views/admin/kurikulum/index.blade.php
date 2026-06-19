<x-admin-layout>
    <x-slot:title>Kelola Kurikulum - Admin Panel</x-slot:title>

    <div class="max-w-5xl mx-auto">
        
        {{-- Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Struktur Kurikulum & Mata Pelajaran</h1>
                <p class="text-xs text-slate-500 mt-1">Kelola daftar mata pelajaran tiap kelas atau unggah dokumen kurikulum sekolah agar bisa diakses wali murid.</p>
            </div>
            <div>
                <a href="{{ route('admin.kurikulum.create') }}" 
                   class="inline-flex items-center gap-2 px-5 py-3 bg-[#1A8DA3] hover:bg-[#126675] text-white text-xs font-bold rounded-xl shadow-md shadow-[#1A8DA3]/20 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Kurikulum / Mapel
                </a>
            </div>
        </div>

        {{-- Alert Status --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 text-xs font-semibold rounded-xl">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel Data Kurikulum --}}
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100">
                <h2 class="text-sm font-bold text-slate-800">Daftar Kurikulum & Pembagian Kelas</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-slate-400 text-[10px] uppercase font-bold tracking-wider border-b border-slate-100">
                            <th class="py-3 px-6">Nama Dokumen / Mapel</th>
                            <th class="py-3 px-6">Deskripsi & Rincian</th>
                            <th class="py-3 px-6">Tautan File</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm">
                        @forelse($kurikulums as $kurikulum)
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-6 font-bold text-slate-900 max-w-xs truncate">
                                    {{ $kurikulum->nama_dokumen }}
                                </td>
                                <td class="py-4 px-6 text-slate-600 text-xs max-w-md whitespace-pre-line">
                                    {{ $kurikulum->deskripsi }}
                                </td>
                                <td class="py-4 px-6 text-xs">
                                    @if($kurikulum->file_url)
                                        <a href="{{ $kurikulum->file_url }}" target="_blank" class="inline-flex items-center gap-1 text-[#1A8DA3] font-bold hover:underline">
                                            📥 Download File
                                        </a>
                                    @else
                                        <span class="text-slate-400 italic">Tidak ada file</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        {{-- TOMBOL EDIT KURIKULUM --}}
                                        <a href="{{ route('admin.kurikulum.edit', $kurikulum->id) }}" 
                                           class="px-2.5 py-1 bg-slate-50 hover:bg-slate-100 text-slate-600 border border-slate-200 text-[10px] font-bold rounded-md transition-all">
                                            Edit
                                        </a>

                                        {{-- TOMBOL HAPUS KURIKULUM --}}
                                        <form action="{{ route('admin.kurikulum.destroy', $kurikulum->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data kurikulum ini?');" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 font-bold text-xs hover:underline cursor-pointer bg-transparent border-none p-0">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-12 text-center text-slate-400 text-xs">
                                    Belum ada data kurikulum atau mata pelajaran yang diinputkan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin-layout>