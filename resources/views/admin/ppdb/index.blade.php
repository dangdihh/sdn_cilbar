<x-admin-layout>
    <x-slot:title>Data Pendaftar PPDB - Admin Panel</x-slot:title>

    <div class="max-w-5xl mx-auto">
        
        {{-- Header & Tombol Aksi --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Data Calon Siswa Baru (PPDB)</h1>
                <p class="text-xs text-slate-500 mt-1">Pantau, periksa berkas identitas, dan tentukan hasil seleksi penerimaan siswa baru secara real-time.</p>
            </div>
            
            <div class="flex items-center gap-3">
                {{-- Tombol Ekspor ke Excel --}}
                <a href="{{ route('admin.ppdb.export') }}" 
                   class="inline-flex items-center gap-2 px-5 py-3 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold rounded-xl shadow-md shadow-emerald-600/20 transition-all cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Ekspor Excel
                </a>
            </div>
        </div>

        {{-- Alert Status --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 text-xs font-semibold rounded-xl animate-fade-in">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel Monitoring PPDB --}}
        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                <h2 class="text-sm font-bold text-slate-800">Daftar Formulir Masuk</h2>
                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">{{ $pendaftars->count() }} Data Ditemukan</span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-slate-400 text-[10px] uppercase font-bold tracking-wider border-b border-slate-100">
                            <th class="py-3 px-6">Identitas Anak</th>
                            <th class="py-3 px-6">Orang Tua & Kontak</th>
                            <th class="py-3 px-6">Tanggal Daftar</th>
                            <th class="py-3 px-6">Status</th>
                            <th class="py-3 px-6 text-center">Aksi Keputusan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm">
                        @forelse($pendaftars as $pendaftar)
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-6">
                                    <p class="font-bold text-slate-900">{{ $pendaftar->nama_lengkap }}</p>
                                    <p class="text-[11px] text-slate-500 mt-0.5">NIK: <span class="font-mono">{{ $pendaftar->nik_anak }}</span> | {{ $pendaftar->jenis_kelamin }}</p>
                                    <p class="text-[10px] text-slate-400 mt-0.5">TTL: {{ $pendaftar->tempat_lahir }}, {{ \Carbon\Carbon::parse($pendaftar->tanggal_lahir)->locale('id')->isoFormat('D MMMM YYYY') }}</p>
                                </td>
                                
                                <td class="py-4 px-6 text-xs text-slate-600">
                                    <p><span class="text-slate-400">Ayah:</span> {{ $pendaftar->nama_ayah }}</p>
                                    <p class="mt-0.5"><span class="text-slate-400">Ibu:</span> {{ $pendaftar->nama_ibu }}</p>
                                    <p class="mt-1 text-[#1A8DA3] font-bold">📞 {{ $pendaftar->nomor_telepon_ortu }}</p>
                                </td>
                                
                                <td class="py-4 px-6 text-xs text-slate-400">
                                    {{ \Carbon\Carbon::parse($pendaftar->created_at)->locale('id')->isoFormat('D MMM YYYY, HH:mm') }}
                                </td>
                                
                                <td class="py-4 px-6">
                                    <span class="px-2.5 py-1 text-[10px] font-bold rounded-full uppercase tracking-wide
                                        {{ $pendaftar->status_pendaftaran == 'Diterima' ? 'bg-emerald-50 text-emerald-600 border border-emerald-100' : '' }}
                                        {{ $pendaftar->status_pendaftaran == 'Ditolak' ? 'bg-red-50 text-red-600 border border-red-100' : '' }}
                                        {{ in_array($pendaftar->status_pendaftaran, ['Pending', 'Menunggu Seleksi']) ? 'bg-amber-50 text-amber-600 border border-amber-100' : '' }}
                                    ">
                                        {{ $pendaftar->status_pendaftaran }}
                                    </span>
                                </td>
                                
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        @if(in_array($pendaftar->status_pendaftaran, ['Pending', 'Menunggu Seleksi']))
                                            <form action="{{ route('admin.ppdb.updateStatus', $pendaftar->id) }}" method="POST">
                                                @csrf @method('PATCH')
                                                <input type="hidden" name="status_pendaftaran" value="Diterima">
                                                <button type="submit" class="px-2 py-1 bg-emerald-600 hover:bg-emerald-700 text-white text-[10px] font-bold rounded-md transition-all">Terima</button>
                                            </form>
                                            <form action="{{ route('admin.ppdb.updateStatus', $pendaftar->id) }}" method="POST">
                                                @csrf @method('PATCH')
                                                <input type="hidden" name="status_pendaftaran" value="Ditolak">
                                                <button type="submit" class="px-2 py-1 bg-red-500 hover:bg-red-600 text-white text-[10px] font-bold rounded-md transition-all">Tolak</button>
                                            </form>
                                        @else
                                            <span class="text-[11px] text-slate-400 italic">Final</span>
                                        @endif

                                        <a href="{{ route('admin.ppdb.edit', $pendaftar->id) }}" class="px-2 py-1 bg-slate-50 hover:bg-slate-100 text-slate-600 border border-slate-200 text-[10px] font-bold rounded-md transition-all">Edit</a>
                                        
                                        {{-- TOMBOL HAPUS BARU --}}
                                        <form action="{{ route('admin.ppdb.destroy', $pendaftar->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini secara permanen?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="px-2 py-1 bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-100 text-[10px] font-bold rounded-md transition-all">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-12 text-center text-slate-400 text-xs">Belum ada data pendaftar.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>