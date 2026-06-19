<x-admin-layout>
    <x-slot:title>Tambah Kegiatan Baru - Admin Panel</x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="mb-8">
            <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Form Tambah Kegiatan Baru</h1>
            <p class="text-xs text-slate-500 mt-1">Halaman khusus admin untuk menambahkan artikel, dokumentasi, atau berita sekolah baru.</p>
        </div>

        <div class="bg-white rounded-3xl border border-slate-100 p-6 md:p-8 shadow-sm">
            <form action="{{ route('admin.kegiatan.store') }}" method="POST" class="space-y-6">
                @csrf
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-800 block">Judul Kegiatan / Berita</label>
                    <input type="text" name="title" required placeholder="Contoh: SDN Ciledug Barat Mengadakan Persami 2026" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3]">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-800 block">Kategori Postingan</label>
                    <select name="kategori" required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] bg-white">
                        <option value="" disabled selected>-- Pilih Kategori --</option>
                        <option value="berita">Berita Sekolah</option> 
                        <option value="prestasi">Prestasi</option>
                        <option value="dokumentasi">Documentation / Kegiatan</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-800 block">URL Gambar/Thumbnail (Opsional)</label>
                    <input type="url" name="thumbnail" placeholder="https://images.unsplash.com/photo-..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3]">
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-800 block">Isi Lengkap Cerita / Berita</label>
                    <textarea name="body" rows="8" required placeholder="Tuliskan berita atau laporan kegiatan sekolah secara lengkap di sini..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3]"></textarea>
                </div>

                <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                    <a href="{{ route('admin.dashboard') }}" class="px-5 py-2.5 bg-slate-100 text-slate-700 text-xs font-bold rounded-xl">Batal</a>
                    <button type="submit" class="px-5 py-2.5 bg-[#1A8DA3] text-white text-xs font-bold rounded-xl shadow-md">Publikasikan Berita</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>