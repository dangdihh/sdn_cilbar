<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN Ciledug Barat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            teal: '#1A8294',
                            'teal-dark': '#136371',
                            'teal-light': '#E6F3F5',
                            yellow: '#E6D96C',
                            dark: '#1E293B'
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-brand-dark antialiased">

    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <span class="font-bold text-xl tracking-wider text-brand-teal">SDN CILEDUG BARAT</span>
            </div>
            <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-gray-600">
                <a href="#" class="text-brand-teal border-b-2 border-brand-teal pb-1">Beranda</a>
                <a href="#" class="hover:text-brand-teal transition">Tentang</a>
                <a href="#" class="hover:text-brand-teal transition">Akademik</a>
                <a href="#" class="hover:text-brand-teal transition">Kegiatan</a>
                <a href="#" class="hover:text-brand-teal transition">PPDB</a>
            </nav>
            <a href="#" class="bg-brand-teal hover:bg-brand-teal-dark text-white text-sm font-semibold px-5 py-2.5 rounded-full transition shadow-sm">
                Hubungi Kami
            </a>
        </div>
    </header>

    <section class="relative max-w-7xl mx-auto px-6 pt-12 pb-24 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="absolute top-10 left-1/3 w-72 h-72 bg-brand-yellow/20 rounded-full blur-3xl -z-10"></div>

        <div class="lg:col-span-7 space-y-6">
            <span class="inline-block bg-brand-teal-light text-brand-teal text-xs font-bold px-3 py-1.5 rounded-full tracking-wide">
                MENCERDASKAN & MENYENANGKAN
            </span>
            <h1 class="text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight">
                Wujudkan Masa Depan Gemilang Buah Hati Anda
            </h1>
            <p class="text-gray-600 leading-relaxed max-w-xl">
                Di SDN Ciledug Barat, kami memadukan kurikulum unggulan dengan lingkungan belajar yang suportif untuk membentuk karakter siswa yang berprestasi.
            </p>
            <div class="flex flex-wrap gap-4 pt-2">
                <a href="#" class="bg-brand-teal hover:bg-brand-teal-dark text-white font-semibold px-6 py-3 rounded-full flex items-center space-x-2 transition shadow-md">
                    <span>Daftar Sekarang</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="#" class="bg-brand-yellow/80 hover:bg-brand-yellow text-brand-dark font-semibold px-6 py-3 rounded-full transition">
                    Jelajahi Program
                </a>
            </div>
        </div>

        <div class="lg:col-span-5 relative">
            <div class="border-[12px] border-white rounded-[2rem] shadow-xl overflow-hidden aspect-[4/3] lg:aspect-square bg-gray-200">
                <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?q=80&w=1000" alt="Gedung Sekolah" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-16">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="text-2xl font-bold relative inline-block">
                    Pengumuman Terbaru
                    <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-brand-teal rounded-full -mb-2"></span>
                </h2>
            </div>
            <a href="#" class="text-brand-teal font-semibold text-sm flex items-center space-x-1 hover:underline">
                <span>Lihat Semua</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition flex flex-col justify-between min-h-[220px]">
                <div class="space-y-3">
                    <div class="flex items-center text-xs text-gray-400 space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span>20 Des 2023</span>
                    </div>
                    <h3 class="font-bold text-lg leading-snug">Libur Semester Ganjil</h3>
                    <p class="text-gray-500 text-sm line-clamp-2">Informasi mengenai jadwal libur akhir semester ganjil dan pembagian rapor siswa.</p>
                </div>
                <div class="pt-4">
                    <span class="bg-brand-yellow/30 text-xs font-semibold px-3 py-1 rounded-full text-amber-800">Akademik</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition flex flex-col justify-between min-h-[220px]">
                <div class="space-y-3">
                    <div class="flex items-center text-xs text-gray-400 space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span>15 Jan 2024</span>
                    </div>
                    <h3 class="font-bold text-lg leading-snug">Pentas Seni Tahunan</h3>
                    <p class="text-gray-500 text-sm line-clamp-2">Persiapkan penampilan terbaikmu untuk ajang kreativitas siswa bulan depan!</p>
                </div>
                <div class="pt-4">
                    <span class="bg-brand-teal-light text-xs font-semibold px-3 py-1 rounded-full text-brand-teal">Kegiatan</span>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition flex flex-col justify-between min-h-[220px]">
                <div class="space-y-3">
                    <div class="flex items-center text-xs text-gray-400 space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span>05 Feb 2024</span>
                    </div>
                    <h3 class="font-bold text-lg leading-snug">Penerimaan Siswa Baru</h3>
                    <p class="text-gray-500 text-sm line-clamp-2">PPDB Tahun Ajaran 2024/2025 akan segera dibuka. Siapkan berkas pendaftaran Anda.</p>
                </div>
                <div class="pt-4">
                    <span class="bg-orange-50 text-xs font-semibold px-3 py-1 rounded-full text-orange-700">PPDB</span>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100/60 py-20">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <div class="lg:col-span-5 grid grid-cols-2 gap-4">
                <div class="space-y-4">
                    <div class="rounded-2xl overflow-hidden aspect-[3/4] bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=600" alt="Siswa belajar" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-brand-teal p-6 rounded-2xl text-white">
                        <span class="text-3xl font-bold block">20+</span>
                        <span class="text-xs text-teal-100">Ekstrakurikuler Unggulan</span>
                    </div>
                </div>
                <div class="pt-8">
                    <div class="bg-brand-yellow/40 p-6 rounded-2xl mb-4 text-center">
                        <span class="text-4xl font-black block text-amber-800">A</span>
                        <span class="text-xs text-amber-900 font-medium">Akreditasi Sekolah</span>
                    </div>
                    <div class="rounded-2xl overflow-hidden aspect-[3/4] bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?q=80&w=600" alt="Buku" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 space-y-6">
                <h2 class="text-3xl font-bold tracking-tight">Membentuk Generasi Cerdas Berkarakter</h2>
                <p class="text-gray-600">
                    SDN Ciledug Barat berkomitmen untuk menjadi institusi pendidikan yang tidak hanya unggul secara akademis, tetapi juga menanamkan nilai-nilai luhur dan kreativitas pada setiap siswa.
                </p>

                <div class="space-y-4">
                    <div class="bg-white p-5 rounded-2xl shadow-sm flex items-start space-x-4 border border-gray-100">
                        <div class="bg-brand-teal-light p-3 rounded-xl text-brand-teal shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-base">Visi Kami</h4>
                            <p class="text-gray-500 text-sm mt-1">Menjadi sekolah dasar unggulan yang menghasilkan lulusan berakhlak mulia, cerdas, kreatif, dan mandiri.</p>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl shadow-sm flex items-start space-x-4 border border-gray-100">
                        <div class="bg-amber-50 p-3 rounded-xl text-amber-600 shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-base">Misi Kami</h4>
                            <p class="text-gray-500 text-sm mt-1">Menyelenggarakan pendidikan berkualitas, mengembangkan bakat minat, dan membangun ekosistem sekolah yang menyenangkan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-24 text-center">
        <h2 class="text-2xl font-bold mb-12">Ekstrakurikuler Pilihan</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center justify-center space-y-4 hover:shadow-md transition">
                <div class="w-14 h-14 bg-brand-teal-light text-brand-teal rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M14 12a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <span class="font-semibold text-sm">Sepak Bola</span>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center justify-center space-y-4 hover:shadow-md transition">
                <div class="w-14 h-14 bg-teal-50 text-teal-500 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                </div>
                <span class="font-semibold text-sm">Seni Lukis</span>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center justify-center space-y-4 hover:shadow-md transition">
                <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                </div>
                <span class="font-semibold text-sm">Musik Angklung</span>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex flex-col items-center justify-center space-y-4 hover:shadow-md transition">
                <div class="w-14 h-14 bg-cyan-50 text-cyan-600 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <span class="font-semibold text-sm">Pramuka</span>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t border-gray-100 pt-16 pb-8 text-sm text-gray-500">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-12 gap-10 pb-12">
            <div class="md:col-span-5 space-y-4">
                <h3 class="font-bold text-brand-teal text-base tracking-wider">SDN CILEDUG BARAT</h3>
                <p class="max-w-sm text-xs leading-relaxed">© 2026 SDN CILEDUG BARAT. Mendidik dengan hati untuk masa depan yang lebih cerah.</p>
                <div class="flex space-x-3 pt-2">
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 hover:bg-brand-teal-light hover:text-brand-teal transition">🌐</a>
                    <a href="#" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 hover:bg-brand-teal-light hover:text-brand-teal transition">🔗</a>
                </div>
            </div>
            <div class="md:col-span-3 space-y-3">
                <h4 class="font-semibold text-brand-dark text-xs uppercase tracking-wider">Navigasi</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#" class="hover:text-brand-teal">Visi & Misi</a></li>
                    <li><a href="#" class="hover:text-brand-teal">Struktur Organisasi</a></li>
                    <li><a href="#" class="hover:text-brand-teal">Kontak</a></li>
                    <li><a href="#" class="hover:text-brand-teal">Lokasi</a></li>
                </ul>
            </div>
            <div class="md:col-span-4 space-y-3">
                <h4 class="font-semibold text-brand-dark text-xs uppercase tracking-wider">Kontak Kami</h4>
                <p class="text-xs leading-relaxed">Jl. H. Misan, Benda Baru, Pamulang, Kota Tangerang Selatan, Banten<br>(021) 555 - 0123<br>info@sdnciledugbarat.sch.id</p>
            </div>
        </div>
    </footer>

</body>
</html>
