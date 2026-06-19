<x-admin-layout>
    <x-slot:title>Edit Fasilitas - {{ $fasilitas->nama_fasilitas }}</x-slot:title>

    <div class="max-w-2xl mx-auto bg-white p-6 md:p-8 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        <div>
            <h2 class="text-lg font-bold text-gray-900 font-headline">Ubah Data Fasilitas</h2>
            <p class="text-gray-500 text-xs mt-0.5">Kosongkan lampiran foto jika tidak ingin mengubah foto yang sudah ada.</p>
        </div>

        {{-- Note: Jangan lupa pakai @method('PUT') karena ini proses update --}}
        <form action="{{ route('admin.fasilitas.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5 text-xs">
            @csrf
            @method('PUT')

            <div class="space-y-1.5">
                <label class="font-bold text-gray-700 uppercase tracking-wide">Nama Fasilitas</label>
                <input type="text" name="nama_fasilitas" required value="{{ old('nama_fasilitas', $fasilitas->nama_fasilitas) }}" class="w-full p-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#1A8DA3]">
            </div>

            <div class="space-y-1.5">
                <label class="font-bold text-gray-700 uppercase tracking-wide">Deskripsi Fasilitas</label>
                <textarea name="deskripsi" required rows="4" class="w-full p-3 rounded-xl border border-gray-200 focus:outline-none focus:border-[#1A8DA3]">{{ old('deskripsi', $fasilitas->deskripsi) }}</textarea>
            </div>

            <div class="space-y-3">
                <label class="font-bold text-gray-700 uppercase tracking-wide block">Foto Saat Ini</label>
                <div class="w-32 h-20 rounded-xl overflow-hidden border bg-gray-50">
                    <img src="{{ $fasilitas->foto ? asset('img/' . $fasilitas->foto) : 'https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=150' }}" class="w-full h-full object-cover">
                </div>
                
                <div class="space-y-1.5">
                    <label class="font-bold text-gray-400 block text-[10px]">GANTI FOTO BARU (OPSIONAL)</label>
                    <input type="file" name="foto" class="w-full p-2 rounded-xl border border-gray-200 bg-gray-50">
                </div>
            </div>

            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.fasilitas.index') }}" class="px-5 py-2.5 border border-gray-200 text-gray-600 rounded-xl font-bold">Batal</a>
                <button type="submit" class="px-5 py-2.5 bg-[#1A8DA3] hover:bg-[#157a8e] text-white rounded-xl font-bold shadow-md">💾 Simpan Perubahan</button>
            </div>
        </form>
    </div>
</x-admin-layout>