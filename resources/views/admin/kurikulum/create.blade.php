<x-admin-layout>
    <x-slot:title>Tambah Kurikulum Baru - Admin Panel</x-slot:title>

    <div class="max-w-2xl mx-auto">
        
        {{-- Header --}}
        <div class="mb-8">
            <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Tambah Struktur Kurikulum / Mapel</h1>
            <p class="text-xs text-slate-500 mt-1">Masukkan data pembagian mata pelajaran kelas atau dokumen panduan kurikulum baru.</p>
        </div>

        {{-- Form Card --}}
        <div class="bg-white rounded-3xl border border-slate-100 p-6 md:p-8 shadow-sm">
            <form action="{{ route('admin.kurikulum.store') }}" method="POST" class="space-y-6">
                @csrf

                {{-- Nama Dokumen / Judul --}}
                <div class="space-y-2">
                    <label for="nama_dokumen" class="text-sm font-bold text-slate-800 block">Nama Dokumen / Judul Struktur</label>
                    <input type="text" name="nama_dokumen" id="nama_dokumen" required placeholder="Contoh: Daftar Mata Pelajaran Kelas 1 SD / Kurikulum Merdeka 2026" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                </div>

                {{-- URL Tautan File Dokumen --}}
                <div class="space-y-2">
                    <label for="file_url" class="text-sm font-bold text-slate-800 block">Link/URL Dokumen PDF (Opsional)</label>
                    <input type="url" name="file_url" id="file_url" placeholder="https://drive.google.com/... atau cloud file hosting" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                    <p class="text-[10px] text-slate-400">Anda bisa mengunggah file kurikulum ke Google Drive sekolah lalu menyalin tautannya di sini agar bisa di-download publik.</p>
                </div>

                {{-- Deskripsi / Daftar Mapel --}}
                <div class="space-y-2">
                    <label for="deskripsi" class="text-sm font-bold text-slate-800 block">Deskripsi Pembagian atau Daftar Mata Pelajaran</label>
                    <textarea name="deskripsi" id="deskripsi" rows="8" required placeholder="Tulis rincian mata pelajaran di sini. Contoh:&#10;1. Pendidikan Agama Islam&#10;2. Pendidikan Pancasila&#10;3. Bahasa Indonesia&#10;4. Matematika" 
                              class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all"></textarea>
                </div>

                {{-- Tombol Aksi --}}
                <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                    <a href="{{ route('admin.kurikulum.index') }}" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition-all">
                        Batal
                    </a>
                    <button type="submit" class="px-5 py-2.5 bg-[#1A8DA3] hover:bg-[#126675] text-white text-xs font-bold rounded-xl shadow-md shadow-[#1A8DA3]/20 transition-all">
                        Simpan Kurikulum
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-admin-layout>