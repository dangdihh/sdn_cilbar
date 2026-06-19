<x-admin-layout>
    <x-slot:title>Edit Berkas PPDB - {{ $pendaftar->nama_lengkap }}</x-slot:title>

    <div class="max-w-3xl mx-auto bg-white p-6 md:p-8 rounded-3xl border border-slate-100 shadow-sm space-y-6">
        <div>
            <h2 class="text-lg font-bold text-slate-900 font-headline">Ubah Formulir Pendaftaran PPDB</h2>
            <p class="text-slate-500 text-xs mt-0.5">Silakan koreksi data calon siswa baru jika terdapat kesalahan ketik berkas.</p>
        </div>

        <form action="{{ route('admin.ppdb.update', $pendaftar->id) }}" method="POST" class="space-y-6 text-xs">
            @csrf
            @method('PUT')

            {{-- BLOK IDENTITAS ANAK --}}
            <div class="border-b border-slate-100 pb-5 space-y-4">
                <h3 class="text-sm font-bold text-[#1A8DA3] font-headline uppercase tracking-wide">1. Identitas Calon Siswa</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-1.5">
                        <label class="font-bold text-slate-700">NAMA LENGKAP ANAK</label>
                        <input type="text" name="nama_lengkap" required value="{{ old('nama_lengkap', $pendaftar->nama_lengkap) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
                    </div>

                    <div class="space-y-1.5">
                        <label class="font-bold text-slate-700">NIK ANAK (NOMOR INDUK KEPENDUDUKAN)</label>
                        <input type="text" name="nik_anak" required value="{{ old('nik_anak', $pendaftar->nik_anak) }}" class="w-full p-3 rounded-xl border border-slate-200 font-mono focus:outline-none focus:border-[#1A8DA3]">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="space-y-1.5">
                        <label class="font-bold text-slate-700">JENIS KELAMIN</label>
                        <select name="jenis_kelamin" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-none focus:border-[#1A8DA3]">
                            <option value="Laki-laki" {{ $pendaftar->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $pendaftar->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div class="space-y-1.5">
                        <label class="font-bold text-slate-700">TEMPAT LAHIR</label>
                        <input type="text" name="tempat_lahir" required value="{{ old('tempat_lahir', $pendaftar->tempat_lahir) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
                    </div>

                    <div class="space-y-1.5">
                        <label class="font-bold text-slate-700">TANGGAL LAHIR</label>
                        <input type="date" name="tanggal_lahir" required value="{{ old('tanggal_lahir', $pendaftar->tanggal_lahir) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
                    </div>
                </div>
            </div>

            {{-- BLOK ORANG TUA & KONTAK --}}
            <div class="border-b border-slate-100 pb-5 space-y-4">
                <h3 class="text-sm font-bold text-[#1A8DA3] font-headline uppercase tracking-wide">2. Data Orang Tua & Kontak</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-1.5">
                        <label class="font-bold text-slate-700">NAMA AYAH KANDUNG</label>
                        <input type="text" name="nama_ayah" required value="{{ old('nama_ayah', $pendaftar->nama_ayah) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
                    </div>

                    <div class="space-y-1.5">
                        <label class="font-bold text-slate-700">NAMA IBU KANDUNG</label>
                        <input type="text" name="nama_ibu" required value="{{ old('nama_ibu', $pendaftar->nama_ibu) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="font-bold text-slate-700">NOMOR TELEPON / WHATSAPP ORANG TUA</label>
                    <input type="text" name="nomor_telepon_ortu" required value="{{ old('nomor_telepon_ortu', $pendaftar->nomor_telepon_ortu) }}" class="w-full p-3 rounded-xl border border-slate-200 focus:outline-none focus:border-[#1A8DA3]">
                </div>
            </div>

            {{-- STATUS SELEKSI --}}
            <div class="space-y-1.5">
                <label class="font-bold text-slate-700 uppercase">Status Seleksi Administrasi</label>
                <select name="status_pendaftaran" class="w-full p-3 rounded-xl border border-slate-200 bg-white focus:outline-none focus:border-[#1A8DA3]">
                    <option value="Menunggu Seleksi" {{ $pendaftar->status_pendaftaran == 'Menunggu Seleksi' || $pendaftar->status_pendaftaran == 'Pending' ? 'selected' : '' }}>Menunggu Seleksi / Pending</option>
                    <option value="Diterima" {{ $pendaftar->status_pendaftaran == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                    <option value="Ditolak" {{ $pendaftar->status_pendaftaran == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                </select>
            </div>

            {{-- ACTION BUTTONS --}}
            <div class="pt-4 flex justify-end gap-3">
                <a href="{{ route('admin.ppdb.index') }}" class="px-5 py-2.5 border border-slate-200 text-slate-600 rounded-xl font-bold hover:bg-slate-50 transition-all">Batal</a>
                <button type="submit" class="px-5 py-2.5 bg-[#1A8DA3] hover:bg-[#157a8e] text-white rounded-xl font-bold shadow-md transition-all cursor-pointer">💾 Update Berkas Siswa</button>
            </div>
        </form>
    </div>
</x-admin-layout>