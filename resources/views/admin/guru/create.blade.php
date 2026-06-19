<x-admin-layout>
    <x-slot:title>Tambah Staf Baru - Admin Panel</x-slot:title>

    <div class="max-w-2xl mx-auto">
        
        {{-- Header --}}
        <div class="mb-8">
            <h1 class="text-2xl font-bold font-headline text-slate-900 tracking-tight">Tambah Personel Sekolah Baru</h1>
            <p class="text-xs text-slate-500 mt-1">Isi formulir di bawah ini untuk menambahkan data Guru atau Tenaga Kependidikan ke database.</p>
        </div>

        {{-- Form Card --}}
        <div class="bg-white rounded-3xl border border-slate-100 p-6 md:p-8 shadow-sm">
            <form action="{{ route('admin.guru.store') }}" method="POST" class="space-y-6">
                @csrf

                {{-- Nama Lengkap --}}
                <div class="space-y-2">
                    <label for="nama" class="text-sm font-bold text-slate-800 block">Nama Lengkap beserta Gelar</label>
                    <input type="text" name="nama" id="nama" required placeholder="Contoh: Dra. Hj. Siti Aminah, M.Pd." 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                </div>

                {{-- NIP --}}
                <div class="space-y-2">
                    <label for="nip" class="text-sm font-bold text-slate-800 block">NIP (Nomor Induk Pegawai)</label>
                    <input type="text" name="nip" id="nip" placeholder="Contoh: 198203112009032005 (Kosongkan jika Honorer)" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Jabatan --}}
                    <div class="space-y-2">
                        <label for="jabatan" class="text-sm font-bold text-slate-800 block">Jabatan / Tugas Mengajar</label>
                        <input type="text" name="jabatan" id="jabatan" required placeholder="Contoh: Guru Kelas 3B / Staf TU" 
                               class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                    </div>

                    {{-- Jenis Pegawai --}}
                    <div class="space-y-2">
                        <label for="jenis_pegawai" class="text-sm font-bold text-slate-800 block">Jenis Kepegawaian</label>
                        <select name="jenis_pegawai" id="jenis_pegawai" required 
                                class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] bg-white transition-all">
                            <option value="" disabled selected>-- Pilih Tipe --</option>
                            <option value="guru">Guru (Tenaga Pendidik)</option>
                            <option value="tendik">Tendik (Tenaga Kependidikan / Staf)</option>
                        </select>
                    </div>
                </div>

                {{-- Foto URL --}}
                <div class="space-y-2">
                    <label for="foto_url" class="text-sm font-bold text-slate-800 block">URL Link Foto Profil (Opsional)</label>
                    <input type="url" name="foto_url" id="foto_url" placeholder="https://images.unsplash.com/... atau link hosting gambar" 
                           class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                    <p class="text-[10px] text-slate-400">Jika dikosongkan, sistem otomatis memberikan avatar default anonim.</p>
                </div>

                {{-- Tombol Aksi --}}
                <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                    <a href="{{ route('admin.guru.index') }}" class="px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition-all">
                        Batal
                    </a>
                    <button type="submit" class="px-5 py-2.5 bg-[#1A8DA3] hover:bg-[#126675] text-white text-xs font-bold rounded-xl shadow-md shadow-[#1A8DA3]/20 transition-all">
                        Simpan Data Staf
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-admin-layout>