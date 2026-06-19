<x-admin-layout>
    <x-slot:title>Edit Agenda Akademik - Admin Panel</x-slot:title>

    <div class="max-w-2xl mx-auto">
        
        {{-- Header --}}
        <div class="mb-8">
            <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Ubah Agenda Akademik</h1>
            <p class="text-xs text-slate-500 mt-1">Sesuaikan informasi jadwal, tanggal pelaksanaan, atau keterangan event akademik sekolah.</p>
        </div>

        {{-- Form Card --}}
        <div class="bg-white rounded-3xl border border-slate-100 p-6 md:p-8 shadow-sm">
            <form action="{{ route('admin.kalender.update', $agenda->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                {{-- Nama Kegiatan --}}
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-800 block">Nama Kegiatan / Agenda</label>
                    <input type="text" name="nama_kegiatan" required value="{{ old('nama_kegiatan', $agenda->nama_kegiatan) }}" placeholder="Contoh: Penilaian Tengah Semester (PTS) Ganjil" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                </div>

                {{-- Rentang Tanggal --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Tanggal Mulai --}}
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-800 block">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" required value="{{ old('tanggal_mulai', $agenda->tanggal_mulai) }}" 
                               class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                    </div>

                    {{-- Tanggal Selesai --}}
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-800 block">Tanggal Selesai (Opsional)</label>
                        <input type="date" name="tanggal_selesai" value="{{ old('tanggal_selesai', $agenda->tanggal_selesai) }}" 
                               class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                        <p class="text-[10px] text-slate-400">Kosongkan jika kegiatan hanya berlangsung satu hari.</p>
                    </div>
                </div>

                {{-- Keterangan --}}
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-800 block">Keterangan Tambahan (Opsional)</label>
                    <textarea name="keterangan" rows="4" placeholder="Contoh: Diikuti oleh seluruh siswa kelas 1-6" 
                              class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">{{ old('keterangan', $agenda->keterangan) }}</textarea>
                </div>

                {{-- Tombol Aksi --}}
                <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                    <a href="{{ route('admin.kalender.index') }}" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition-all">
                        Batal
                    </a>
                    <button type="submit" class="px-5 py-2.5 bg-[#1A8DA3] hover:bg-[#126675] text-white text-xs font-bold rounded-xl shadow-md shadow-[#1A8DA3]/20 transition-all">
                        💾 Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-admin-layout>