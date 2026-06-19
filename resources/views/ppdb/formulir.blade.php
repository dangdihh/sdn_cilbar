<x-layout>
    <x-slot:title>Pendaftaran PPDB Online - SDN Ciledug Barat</x-slot:title>

    {{-- Google Fonts & AOS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        h1, h2, h3, .font-headline { font-family: 'Lexend', sans-serif; }
    </style>

    {{-- Jumbotron Header --}}
    <section class="relative bg-gradient-to-br from-[#f0fbfc] to-white py-14 px-6 text-center overflow-hidden">
        <div class="absolute -top-24 -right-24 w-80 h-80 rounded-full bg-[#1A8DA3]/5 blur-3xl pointer-events-none"></div>
        <div class="max-w-3xl mx-auto relative z-10" data-aos="fade-up">
            <span class="px-4 py-1.5 rounded-full bg-green-50 border border-green-200 text-green-600 text-xs font-bold uppercase tracking-wider">
                Penerimaan Siswa Baru (PPDB)
            </span>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mt-4">Formulir Pendaftaran Online</h1>
            <p class="text-gray-500 text-sm md:text-base mt-2 max-w-xl mx-auto leading-relaxed">
                Silakan isi data calon peserta didik baru dengan lengkap dan benar sesuai dokumen asli (Kartu Keluarga / Akta Kelahiran).
            </p>
        </div>
    </section>

    {{-- Form Content --}}
    <section class="py-10 px-6 bg-white">
        <div class="max-w-3xl mx-auto">

            {{-- Card Form --}}
            <div class="bg-white rounded-3xl border border-gray-100 p-6 md:p-10 shadow-xl shadow-slate-100/50" data-aos="fade-up" data-aos-delay="100">
                @if(session('success'))
                    <div class="mb-8 p-6 bg-emerald-50 border border-emerald-100 text-emerald-800 rounded-2xl shadow-sm">
                        <h3 class="font-bold text-lg mb-2">🎉 Pendaftaran Berhasil!</h3>
                        <p class="text-sm mb-4">{{ session('success') }}</p>
                        
                        {{-- Link Cek Status --}}
                        <a href="{{ route('ppdb.cek-status') }}" class="inline-block px-5 py-2 bg-emerald-600 text-white text-xs font-bold rounded-lg hover:bg-emerald-700">
                            Cek Status Pendaftaran Saya Sekarang
                        </a>
                    </div>
                @endif

                <form action="{{ route('ppdb.store') }}" method="POST" class="space-y-8">
                    @csrf

                    {{-- SUB-SECTION 1: DATA ANAK --}}
                    <div>
                        <div class="flex items-center gap-2 pb-3 border-b border-gray-100 mb-5">
                            <span class="text-lg">👦</span>
                            <h2 class="font-headline font-bold text-gray-800 text-base">Identitas Calon Siswa</h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            {{-- Nama Lengkap --}}
                            <div class="space-y-1.5 md:col-span-2">
                                <label for="nama_lengkap" class="text-xs font-bold text-gray-700 uppercase tracking-wide">Nama Lengkap Anak</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" required value="{{ old('nama_lengkap') }}" placeholder="Masukkan nama sesuai akta kelahiran"
                                       class="w-full px-4 py-3 rounded-xl border @error('nama_lengkap') border-red-400 focus:ring-red-400 focus:border-red-400 @else border-gray-200 focus:border-[#1A8DA3] focus:ring-[#1A8DA3] @enderror text-sm focus:outline-none focus:ring-1 transition-all">
                                @error('nama_lengkap')
                                    <p class="text-xs text-red-500 font-medium mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- NIK Anak --}}
                            <div class="space-y-1.5">
                                <label for="nik_anak" class="text-xs font-bold text-gray-700 uppercase tracking-wide">NIK Anak (16 Digit)</label>
                                <input type="text" name="nik_anak" id="nik_anak" required maxlength="16" value="{{ old('nik_anak') }}" placeholder="Contoh: 3215xxxxxxxxxxxx"
                                       class="w-full px-4 py-3 rounded-xl border @error('nik_anak') border-red-400 focus:ring-red-400 focus:border-red-400 @else border-gray-200 focus:border-[#1A8DA3] focus:ring-[#1A8DA3] @enderror font-mono text-sm focus:outline-none focus:ring-1 transition-all">
                                @error('nik_anak')
                                    <p class="text-xs text-red-500 font-medium mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Jenis Kelamin --}}
                            <div class="space-y-1.5">
                                <label for="jenis_kelamin" class="text-xs font-bold text-gray-700 uppercase tracking-wide">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" required
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] bg-white transition-all">
                                    <option value="" disabled selected>Pilih jenis kelamin</option>
                                    <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>

                            {{-- Tempat Lahir --}}
                            <div class="space-y-1.5">
                                <label for="tempat_lahir" class="text-xs font-bold text-gray-700 uppercase tracking-wide">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" required value="{{ old('tempat_lahir') }}" placeholder="Contoh: Tangerang"
                                       class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                            </div>

                            {{-- Tanggal Lahir --}}
                            <div class="space-y-1.5">
                                <label for="tanggal_lahir" class="text-xs font-bold text-gray-700 uppercase tracking-wide">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" required value="{{ old('tanggal_lahir') }}"
                                       class="w-full px-4 py-3 rounded-xl border @error('tanggal_lahir') border-red-400 focus:ring-red-400 focus:border-red-400 @else border-gray-200 focus:border-[#1A8DA3] focus:ring-[#1A8DA3] @enderror text-sm focus:outline-none focus:ring-1 bg-white transition-all">
                                @error('tanggal_lahir')
                                    <p class="text-xs text-red-500 font-medium mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- SUB-SECTION 2: DATA ORANG TUA --}}
                    <div class="pt-4">
                        <div class="flex items-center gap-2 pb-3 border-b border-gray-100 mb-5">
                            <span class="text-lg">👨‍👩‍👦</span>
                            <h2 class="font-headline font-bold text-gray-800 text-base">Data Orang Tua / Wali</h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            {{-- Nama Ayah --}}
                            <div class="space-y-1.5">
                                <label for="nama_ayah" class="text-xs font-bold text-gray-700 uppercase tracking-wide">Nama Lengkap Ayah</label>
                                <input type="text" name="nama_ayah" id="nama_ayah" required value="{{ old('nama_ayah') }}" placeholder="Masukkan nama lengkap ayah"
                                       class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                            </div>

                            {{-- Nama Ibu --}}
                            <div class="space-y-1.5">
                                <label for="nama_ibu" class="text-xs font-bold text-gray-700 uppercase tracking-wide">Nama Lengkap Ibu</label>
                                <input type="text" name="nama_ibu" id="nama_ibu" required value="{{ old('nama_ibu') }}" placeholder="Masukkan nama lengkap ibu"
                                       class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-[#1A8DA3] focus:ring-1 focus:ring-[#1A8DA3] transition-all">
                            </div>

                            {{-- Nomor WA Ortu --}}
                            <div class="space-y-1.5 md:col-span-2">
                                <label for="nomor_telepon_ortu" class="text-xs font-bold text-gray-700 uppercase tracking-wide">Nomor WhatsApp Aktif Ortu</label>
                                <input type="tel" name="nomor_telepon_ortu" id="nomor_telepon_ortu" required value="{{ old('nomor_telepon_ortu') }}" placeholder="Contoh: 0812xxxxxxxx"
                                       class="w-full px-4 py-3 rounded-xl border @error('nomor_telepon_ortu') border-red-400 focus:ring-red-400 focus:border-red-400 @else border-gray-200 focus:border-[#1A8DA3] focus:ring-[#1A8DA3] @enderror text-sm focus:outline-none focus:ring-1 transition-all">
                                <p class="text-[10px] text-gray-400">Pastikan nomor aktif untuk mempermudah panitia mengirimkan notifikasi pengumuman kelulusan berkas.</p>
                                @error('nomor_telepon_ortu')
                                    <p class="text-xs text-red-500 font-medium mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- BUTTON SUBMIT --}}
                    <div class="pt-6 border-t border-gray-100 flex justify-end">
                        <button type="submit" class="w-full md:w-auto px-8 py-3.5 bg-[#1A8DA3] hover:bg-[#126675] text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lg shadow-[#1A8DA3]/20 hover:scale-[1.02] transition-all cursor-pointer">
                            🚀 Kirim Formulir Pendaftaran
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- AOS Script --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 700,
            easing: 'ease-out-cubic',
        });
    </script>
</x-layout>