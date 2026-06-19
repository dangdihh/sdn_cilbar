<x-admin-layout>
    <x-slot:title>Edit Pengumuman - Admin Panel</x-slot:title>

    <div class="max-w-2xl mx-auto bg-white p-6 md:p-8 rounded-3xl border border-slate-100 shadow-sm">
        <div class="mb-6">
            <h2 class="text-lg font-bold text-slate-900 font-headline">Ubah Pengumuman / Maklumat</h2>
            <p class="text-slate-500 text-xs mt-0.5">Perbarui rincian atau status urgensi pengumuman terpilih.</p>
        </div>

        <form action="{{ route('admin.pengumuman.update', $pengumuman->id) }}" method="POST" class="space-y-5 text-xs">
            @csrf @method('PUT')
            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Judul Pengumuman</label>
                <input type="text" name="title" required value="{{ old('title', $pengumuman->title) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
            </div>

            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Kategori</label>
                <select name="category" required class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-none focus:border-[#1A8DA3]">
                    <option value="akademik" {{ old('category', $pengumuman->category) == 'akademik' ? 'selected' : '' }}>Akademik</option>
                    <option value="kegiatan" {{ old('category', $pengumuman->category) == 'kegiatan' ? 'selected' : '' }}>Kegiatan Sekolah</option>
                    <option value="pendaftaran" {{ old('category', $pengumuman->category) == 'pendaftaran' ? 'selected' : '' }}>PPDB / Pendaftaran</option>
                    <option value="umum" {{ old('category', $pengumuman->category) == 'umum' ? 'selected' : '' }}>Umum</option>
                </select>
            </div>

            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Isi Detail Pengumuman</label>
                <textarea name="description" required rows="6" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">{{ old('description', $pengumuman->description) }}</textarea>
            </div>

            <div class="flex items-center gap-2 py-2">
                <input type="checkbox" name="is_important" id="is_important" value="1" {{ old('is_important', $pengumuman->is_important) ? 'checked' : '' }} class="w-4 h-4 text-[#1A8DA3] border-slate-300 rounded focus:ring-[#1A8DA3]">
                <label for="is_important" class="font-bold text-rose-600 uppercase cursor-pointer select-none">Tandai sebagai Pengumuman PENTING (Urgensi Tinggi)</label>
            </div>

            <div class="pt-4 flex justify-end gap-3 border-t border-slate-100">
                <a href="{{ route('admin.pengumuman.index') }}" class="px-5 py-2.5 border border-slate-200 text-slate-600 rounded-xl font-bold hover:bg-slate-50 transition-all">Batal</a>
                <button type="submit" class="px-5 py-2.5 bg-[#1A8DA3] hover:bg-[#126675] text-white rounded-xl font-bold shadow-md transition-all cursor-pointer">💾 Simpan Perubahan</button>
            </div>
        </form>
    </div>
</x-admin-layout>