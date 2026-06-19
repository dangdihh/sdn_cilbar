<x-admin-layout>
    <x-slot:title>Edit Kurikulum - Admin Panel</x-slot:title>

    <div class="max-w-2xl mx-auto">
        
        {{-- Header --}}
        <div class="mb-8">
            <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Ubah Data Kurikulum</h1>
            <p class="text-xs text-slate-500 mt-1">Silakan sesuaikan informasi dokumen kurikulum atau mata pelajaran sekolah di bawah ini.</p>
        </div>

        {{-- Form Card --}}
        <div class="bg-white rounded-3xl border border-slate-100 p-6 md:p-8 shadow-sm">
            <form action="{{ route('admin.kurikulum.update', $kurikulum->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                {{-- Nama Dokumen --}}
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-800 block">Nama Dokumen / Kurikulum</label>
                    <input type="text" name="nama_dokumen" required value="{{ old('nama_dokumen', $kurikulum->nama_dokumen) }}" placeholder="Contoh: Struktur Kurikulum Merdeka Fase A Kelas 1" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                </div>

                {{-- URL File --}}
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-800 block">URL Link File Dokumen (Opsional)</label>
                    <input type="url" name="file_url" value="{{ old('file_url', $kurikulum->file_url) }}" placeholder="https://drive.google.com/... atau link unduhan dokumen PDF" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                    <p class="text-[10px] text-slate-400">Tautkan link Google Drive atau berkas PDF luar agar wali murid bisa mengunduh berkas.</p>
                </div>

                {{-- Deskripsi --}}
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-800 block">Deskripsi / Penjelasan Kurikulum</label>
                    <textarea name="deskripsi" rows="6" required placeholder="Jelaskan secara ringkas isi dari dokumen kurikulum atau alokasi jam pelajaran ini..." 
                              class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">{{ old('deskripsi', $kurikulum->deskripsi) }}</textarea>
                </div>

                {{-- Tombol Aksi --}}
                <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                    <a href="{{ route('admin.kurikulum.index') }}" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition-all">
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