<x-admin-layout>
    <x-slot:title>Edit Ekskul - Admin Panel</x-slot:title>

    <div class="max-w-3xl mx-auto bg-white p-6 md:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
        <div>
            <h2 class="text-lg font-bold text-slate-900 font-headline">Ubah Data Ekskul</h2>
            <p class="text-slate-500 text-xs mt-0.5">Sesuaikan informasi detail dari ekstrakurikuler.</p>
        </div>

        <form action="{{ route('ekskul.update', $ekskul->id) }}" method="POST" class="space-y-5 text-xs">
            @csrf
            @method('PUT')
            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Nama Ekskul</label>
                <input type="text" name="nama_ekskul" required value="{{ old('nama_ekskul', $ekskul->nama_ekskul) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
            </div>
            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Nama Pembina</label>
                <input type="text" name="pembina" required value="{{ old('pembina', $ekskul->pembina) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
            </div>

            {{-- LINK FOTO EDIT --}}
            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">URL Link Foto / Gambar Ekskul</label>
                <input type="url" name="foto_url" value="{{ old('foto_url', $ekskul->foto_url) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
            </div>

            {{-- JADWAL EDIT --}}
            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Jadwal Latihan</label>
                <input type="text" name="jadwal_latihan" value="{{ old('jadwal_latihan', $ekskul->jadwal_latihan) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
            </div>

            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Deskripsi Kegiatan</label>
                <textarea name="deskripsi" rows="4" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">{{ old('deskripsi', $ekskul->deskripsi) }}</textarea>
            </div>
            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('ekskul.index') }}" class="px-5 py-2.5 border border-slate-200 text-slate-600 rounded-xl font-bold hover:bg-slate-50 transition-all">Batal</a>
                <button type="submit" class="px-5 py-2.5 bg-[#1A8DA3] hover:bg-[#157a8e] text-white rounded-xl font-bold shadow-md transition-all cursor-pointer">💾 Simpan Perubahan</button>
            </div>
        </form>
    </div>
</x-admin-layout>