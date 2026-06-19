<x-admin-layout>
    <x-slot:title>Kelola Guru & Tendik - Admin Panel</x-slot:title>

    <div class="max-w-5xl mx-auto">
        
        {{-- Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Manajemen Guru & Tenaga Pendidik</h1>
                <p class="text-xs text-slate-500 mt-1">Daftar semua guru, staf TU, dan karyawan sekolah yang tampil di halaman profil website.</p>
            </div>
            <div>
                <a href="{{ route('admin.guru.create') }}" 
                   class="inline-flex items-center gap-2 px-5 py-3 bg-[#1A8DA3] hover:bg-[#126675] text-white text-xs font-bold rounded-xl shadow-md shadow-[#1A8DA3]/20 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Staf Baru
                </a>
            </div>
        </div>

        {{-- Alert Status --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 text-xs font-semibold rounded-xl">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel Data Guru --}}
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100">
                <h2 class="text-sm font-bold text-slate-800">Daftar Personel Sekolah Aktif</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-slate-400 text-[10px] uppercase font-bold tracking-wider border-b border-slate-100">
                            <th class="py-3 px-6">Foto & Nama</th>
                            <th class="py-3 px-6">NIP</th>
                            <th class="py-3 px-6">Jabatan / Tugas</th>
                            <th class="py-3 px-6">Tipe</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm">
                        @forelse($gurus as $guru)
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900 flex items-center gap-3">
                                    <img src="{{ $guru->foto_url }}" alt="{{ $guru->nama }}" class="w-10 h-10 rounded-full object-cover border border-slate-100 bg-slate-100">
                                    <div>
                                        <p class="font-bold text-slate-900">{{ $guru->nama }}</p>
                                        <p class="text-[10px] text-slate-400">ID Terdaftar: #{{ $guru->id }}</p>
                                    </div>
                                </td>
                                <td class="py-4 px-6 text-slate-600 font-mono text-xs">
                                    {{ $guru->nip ?? '-' }}
                                </td>
                                <td class="py-4 px-6 text-slate-600 font-medium">
                                    {{ $guru->jabatan }}
                                </td>
                                <td class="py-4 px-6">
                                    <span class="px-2.5 py-1 text-[10px] font-bold rounded-full uppercase tracking-wide
                                        {{ $guru->jenis_pegawai == 'guru' ? 'bg-teal-50 text-teal-600 border border-teal-100' : 'bg-slate-100 text-slate-600' }}
                                    ">
                                        {{ $guru->jenis_pegawai }}
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        {{-- TOMBOL EDIT STAF --}}
                                        <a href="{{ route('admin.guru.edit', $guru->id) }}" 
                                           class="px-2.5 py-1 bg-slate-50 hover:bg-slate-100 text-slate-600 border border-slate-200 text-[10px] font-bold rounded-md transition-all">
                                            Edit
                                        </a>

                                        {{-- TOMBOL HAPUS DATA --}}
                                        <form action="{{ route('admin.guru.destroy', $guru->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data staf ini?');" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 font-bold text-xs hover:underline cursor-pointer bg-transparent border-none p-0">
                                                Hapus Data
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-12 text-center text-slate-400 text-xs">
                                    Belum ada data guru atau tendik yang diinputkan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin-layout>