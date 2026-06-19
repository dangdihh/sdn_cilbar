<x-admin-layout>
    <x-slot:title>Tambah Ekskul - Admin Panel</x-slot:title>

    <div class="max-w-2xl mx-auto bg-white p-6 md:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
        <div>
            <h2 class="text-lg font-bold text-slate-900 font-headline">Input Ekskul Baru</h2>
            <p class="text-slate-500 text-xs mt-0.5">Silakan isi nama ekstrakurikuler beserta kelengkapannya.</p>
        </div>

        <form action="{{ route('ekskul.store') }}" method="POST" class="space-y-5 text-xs">
            @csrf
            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Nama Ekskul</label>
                <input type="text" name="nama_ekskul" required placeholder="Contoh: Pramuka, Futsal, Seni Tari" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
            </div>
            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Nama Pembina</label>
                <input type="text" name="pembina" required placeholder="Contoh: Bpk. Hermawan, S.Pd." class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
            </div>
            
            {{-- INPUT BARU: URL GAMBAR --}}
            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">URL Link Foto / Gambar Ekskul</label>
                <input type="url" name="foto_url" placeholder="https://images.unsplash.com/photo-..." class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
                <p class="text-[10px] text-slate-400">Masukkan tautan langsung gambar kegiatan ekskul (bisa dari Unsplash atau cloud hosting).</p>
            </div>

            {{-- INPUT BARU: JADWAL LATIHAN --}}
            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Jadwal Latihan</label>
                <input type="text" name="jadwal_latihan" placeholder="Contoh: Setiap Sabtu, Jam 08.00 - 10.00 WIB" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
            </div>

            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Deskripsi Kegiatan</label>
                <textarea name="deskripsi" rows="4" placeholder="Tuliskan deskripsi singkat mengenai ekskul..." class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]"></textarea>
            </div>
            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('ekskul.index') }}" class="px-5 py-2.5 border border-slate-200 text-slate-600 rounded-xl font-bold hover:bg-slate-50 transition-all">Batal</a>
                <button type="submit" class="px-5 py-2.5 bg-[#1A8DA3] hover:bg-[#157a8e] text-white rounded-xl font-bold shadow-md transition-all cursor-pointer">💾 Simpan Ekskul</button>
            </div>
        </form>
    </div>
</x-admin-layout>