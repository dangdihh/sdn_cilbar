<x-admin-layout>
    <x-slot:title>Kelola Ekskul - Admin Panel</x-slot:title>

    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Manajemen Ekstrakurikuler</h1>
                <p class="text-xs text-slate-500 mt-1">Tambah, ubah, atau hapus daftar kegiatan ekskul SDN Ciledug Barat.</p>
            </div>
            <div>
                <a href="{{ route('ekskul.create') }}" 
                   class="inline-flex items-center gap-2 px-5 py-3 bg-[#1A8DA3] hover:bg-[#126675] text-white text-xs font-bold rounded-xl shadow-md transition-all">
                    Tambah Ekskul Baru
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-100 text-emerald-700 text-xs font-semibold rounded-xl">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 text-slate-400 text-[10px] uppercase font-bold tracking-wider border-b border-slate-100">
                            <th class="py-3 px-6">Nama Ekstrakurikuler</th>
                            <th class="py-3 px-6">Guru Pembina</th>
                            <th class="py-3 px-6">Deskripsi</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-sm">
                        @forelse($ekskuls as $ekskul)
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-6 font-semibold text-slate-900">{{ $ekskul->nama_ekskul }}</td>
                                <td class="py-4 px-6 text-slate-600">{{ $ekskul->pembina }}</td>
                                <td class="py-4 px-6 text-xs text-slate-400 max-w-xs truncate">{{ $ekskul->deskripsi ?? '-' }}</td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-3">
                                        <a href="{{ route('ekskul.edit', $ekskul->id) }}" 
                                           class="px-2.5 py-1 bg-slate-50 hover:bg-slate-100 text-slate-600 border border-slate-200 text-[10px] font-bold rounded-md transition-all">
                                            Edit
                                        </a>
                                        <form action="{{ route('ekskul.destroy', $ekskul->id) }}" method="POST" 
                                              onsubmit="return confirm('Yakin mau menghapus ekskul {{ $ekskul->nama_ekskul }}?')" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-rose-600 hover:text-rose-900 font-bold text-xs cursor-pointer">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="py-12 text-center text-slate-400 text-xs">Belum ada data ekskul.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>