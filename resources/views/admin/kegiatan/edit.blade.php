<x-admin-layout>
    <x-slot:title>Edit Kegiatan - Admin Panel</x-slot:title>

    <div class="max-w-3xl mx-auto bg-white p-6 md:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
        <div>
            <h2 class="text-lg font-bold text-slate-900 font-headline">Ubah Artikel / Kegiatan Sekolah</h2>
            <p class="text-slate-500 text-xs mt-0.5">Silakan sesuaikan judul, kategori, link thumbnail, atau isi konten artikel.</p>
        </div>

        <form action="{{ route('admin.kegiatan.update', $artikel->id) }}" method="POST" class="space-y-5 text-xs">
            @csrf
            @method('PUT')

            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Judul Kegiatan</label>
                <input type="text" name="title" required value="{{ old('title', $artikel->title) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
            </div>

            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Kategori</label>
                <select name="kategori" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-none focus:border-[#1A8DA3]">
                    <option value="berita" {{ (old('kategori', $artikel->kategori) == 'dokumentasi' && \Illuminate\Support\Str::contains($artikel->slug, 'berita')) || old('kategori', $artikel->kategori) == 'berita' ? 'selected' : '' }}>Berita Sekolah</option>
                    <option value="prestasi" {{ old('kategori', $artikel->kategori) == 'prestasi' ? 'selected' : '' }}>Prestasi</option>
                    <option value="dokumentasi" {{ old('kategori', $artikel->kategori) == 'dokumentasi' && !\Illuminate\Support\Str::contains($artikel->slug, 'berita') ? 'selected' : '' }}>Documentation / Kegiatan</option>
                </select>
            </div>

            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Link URL Thumbnail Gambar</label>
                <input type="url" name="thumbnail" value="{{ old('thumbnail', $artikel->thumbnail) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
            </div>

            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Isi Konten Artikel</label>
                <textarea name="body" required rows="10" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">{{ old('body', $artikel->body) }}</textarea>
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.dashboard') }}" class="px-5 py-2.5 border border-slate-200 text-slate-600 rounded-xl font-bold">Batal</a>
                <button type="submit" class="px-5 py-2.5 bg-[#1A8DA3] text-white rounded-xl font-bold shadow-md">💾 Simpan Perubahan</button>
            </div>
        </form>
    </div>
</x-admin-layout>