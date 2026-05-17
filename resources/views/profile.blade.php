<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700;800&amp;family=Plus+Jakarta+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "background": "#f8f9fa",
                    "on-primary-fixed": "#002020",
                    "surface-container-lowest": "#ffffff",
                    "surface-container": "#edeeef",
                    "on-tertiary-fixed": "#0e1e1e",
                    "primary-container": "#008080",
                    "surface-bright": "#f8f9fa",
                    "on-primary": "#ffffff",
                    "primary": "#006565",
                    "surface-container-highest": "#e1e3e4",
                    "outline": "#6e7979",
                    "tertiary-container": "#657675",
                    "on-secondary-container": "#6b641c",
                    "on-tertiary-fixed-variant": "#3a4a49",
                    "error": "#ba1a1a",
                    "secondary-fixed": "#efe58f",
                    "on-background": "#191c1d",
                    "secondary-container": "#ece28c",
                    "on-primary-fixed-variant": "#004f4f",
                    "tertiary-fixed": "#d4e6e5",
                    "secondary": "#666018",
                    "surface-container-high": "#e7e8e9",
                    "on-secondary": "#ffffff",
                    "surface": "#f8f9fa",
                    "primary-fixed-dim": "#76d6d5",
                    "on-tertiary-container": "#ebfdfc",
                    "secondary-fixed-dim": "#d2c976",
                    "surface-container-low": "#f3f4f5",
                    "on-secondary-fixed": "#1f1c00",
                    "on-primary-container": "#e3fffe",
                    "outline-variant": "#bdc9c8",
                    "inverse-surface": "#2e3132",
                    "surface-tint": "#006a6a",
                    "on-surface-variant": "#3e4949",
                    "error-container": "#ffdad6",
                    "on-error-container": "#93000a",
                    "tertiary-fixed-dim": "#b8cac9",
                    "on-surface": "#191c1d",
                    "inverse-on-surface": "#f0f1f2",
                    "surface-variant": "#e1e3e4",
                    "on-tertiary": "#ffffff",
                    "inverse-primary": "#76d6d5",
                    "surface-dim": "#d9dadb",
                    "tertiary": "#4d5d5d",
                    "on-error": "#ffffff",
                    "primary-fixed": "#93f2f2",
                    "on-secondary-fixed-variant": "#4e4800"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "gutter": "24px",
                    "unit": "8px",
                    "margin-mobile": "16px",
                    "container-max": "1200px",
                    "stack-lg": "48px",
                    "stack-sm": "8px",
                    "stack-md": "24px"
            },
            "fontFamily": {
                    "body-lg": ["Plus Jakarta Sans"],
                    "label-sm": ["Plus Jakarta Sans"],
                    "h3": ["Lexend"],
                    "body-md": ["Plus Jakarta Sans"],
                    "h1": ["Lexend"],
                    "h2": ["Lexend"]
            },
            "fontSize": {
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "label-sm": ["14px", {"lineHeight": "1", "fontWeight": "600"}],
                    "h3": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "h1": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "h2": ["32px", {"lineHeight": "1.3", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased">
<!-- TopNavBar -->
<nav class="bg-white/95 dark:bg-slate-900/95 backdrop-blur-sm border-b border-gray-100 dark:border-gray-800 shadow-[0_4px_20px_rgba(0,128,128,0.08)] docked full-width top-0 sticky z-50">
<div class="max-w-[1200px] mx-auto flex justify-between items-center h-20 px-6">
<div class="text-xl font-extrabold tracking-tight text-[#008080] dark:text-teal-400 font-lexend">
                SDN CILEDUG BARAT
            </div>
<div class="hidden md:flex items-center gap-8 font-lexend text-base antialiased">
<a class="text-slate-600 dark:text-slate-400 font-medium hover:text-[#008080] dark:hover:text-teal-300 transition-all duration-300 active:scale-95 transition-transform" href="/">Home</a>
<a class="text-[#008080] dark:text-teal-400 font-bold border-b-2 border-[#008080] pb-1 hover:text-[#008080] dark:hover:text-teal-300 transition-all duration-300 active:scale-95 transition-transform" href="#">Profile</a>
<a class="text-slate-600 dark:text-slate-400 font-medium hover:text-[#008080] dark:hover:text-teal-300 transition-all duration-300 active:scale-95 transition-transform" href="#">Extracurricular</a>
<a class="text-slate-600 dark:text-slate-400 font-medium hover:text-[#008080] dark:hover:text-teal-300 transition-all duration-300 active:scale-95 transition-transform" href="#">Academic Calendar</a>
<a class="text-slate-600 dark:text-slate-400 font-medium hover:text-[#008080] dark:hover:text-teal-300 transition-all duration-300 active:scale-95 transition-transform" href="#">PPDB</a>
</div>
<button class="bg-[#008080] text-white px-6 py-2.5 rounded-full font-lexend font-bold hover:bg-[#006666] transition-all duration-300 shadow-md">
                Hubungi Kami
            </button>
</div>
</nav>
<main class="max-w-[1200px] mx-auto px-6 py-12">
<!-- Hero Section Profile -->
<section class="mb-stack-lg">
<div class="relative rounded-xl overflow-hidden h-[400px] mb-stack-md shadow-lg">
<img alt="SDN Ciledug Barat Campus" class="w-full h-full object-cover" data-alt="Modern primary school building with clean white walls, green gardens, and bright blue sky in the background during morning light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7byJ0ybnnibpLutMh5SA7EKz_WtCefXKeK6aFlrsNNLC9v-lNwRF_obeeIRRzLX4J-i3uC5qNG8B63aECU4UDk_NUPmkmUeIII_J-tByebf3iyg9QjmfGR3G001G-Kh4MYMe6wCbOXp5bzUa3YAYEhxBQTv_OPtQdpF6O_r5n-1gpjyRwuTnxEGHZVUkMoFGUHVnm21KMPN2qIC9PzbLVHkBVcQ8M2TpW8E24Kb5edALTplyno20akXzMBT59IeAdkuHcak4LCQ4"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end p-12">
<div class="text-on-primary">
<h1 class="font-h1 text-h1 mb-4">Profil Sekolah</h1>
<p class="font-body-lg text-body-lg max-w-2xl">Membangun generasi cerdas, berkarakter, dan bertaqwa melalui pendidikan yang menyenangkan.</p>
</div>
</div>
</div>
</section>
<!-- School History: Bento Layout -->
<section class="mb-stack-lg">
<div class="flex items-center gap-4 mb-stack-md">
<span class="material-symbols-outlined text-primary text-4xl">history_edu</span>
<h2 class="font-h2 text-h2 text-primary">Sejarah Sekolah</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<div class="md:col-span-7 bg-white p-10 rounded-xl shadow-sm border border-gray-100 flex flex-col justify-center">
<p class="font-body-md text-body-md text-on-surface-variant mb-6 leading-relaxed">
                        Didirikan pada tahun 1982, SDN CILEDUG BARAT bermula dari semangat masyarakat lokal untuk menyediakan akses pendidikan berkualitas bagi anak-anak di wilayah Ciledug. Selama lebih dari empat dekade, sekolah ini telah bertransformasi menjadi institusi pendidikan unggulan di Tangerang.
                    </p>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Melalui berbagai renovasi dan pengembangan kurikulum, kami terus berupaya mengintegrasikan nilai-nilai luhur budaya bangsa dengan kemajuan teknologi modern untuk menciptakan lingkungan belajar yang kondusif bagi tumbuh kembang siswa.
                    </p>
</div>
<div class="md:col-span-5 grid grid-cols-1 gap-gutter">
<div class="bg-secondary-container p-8 rounded-xl flex items-center gap-6">
<div class="bg-white p-4 rounded-full text-secondary">
<span class="material-symbols-outlined text-3xl">workspace_premium</span>
</div>
<div>
<div class="font-h3 text-h3 text-on-secondary-container">Akreditasi A</div>
<p class="font-label-sm text-label-sm text-on-secondary-fixed-variant">Unggul &amp; Berprestasi</p>
</div>
</div>
<div class="bg-primary-container p-8 rounded-xl flex items-center gap-6 text-on-primary">
<div class="bg-white/20 p-4 rounded-full">
<span class="material-symbols-outlined text-3xl">groups</span>
</div>
<div>
<div class="font-h3 text-h3">1000+</div>
<p class="font-label-sm text-label-sm text-primary-fixed">Alumni Sukses</p>
</div>
</div>
</div>
</div>
</section>
<!-- Organizational Structure -->
<section class="mb-stack-lg bg-surface-container-low p-12 rounded-2xl">
<div class="text-center mb-12">
<h2 class="font-h2 text-h2 text-primary mb-2">Susunan Organisasi</h2>
<div class="w-24 h-1.5 bg-secondary-container mx-auto rounded-full"></div>
</div>
<div class="flex flex-col items-center gap-12">
<!-- Principal -->
<div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-primary text-center w-64 hover:scale-105 transition-transform">
<div class="w-20 h-20 bg-primary-container rounded-full mx-auto mb-4 flex items-center justify-center">
<span class="material-symbols-outlined text-white text-4xl">person</span>
</div>
<div class="font-h3 text-lg font-bold text-primary">Drs. H. Ahmad Fauzi</div>
<p class="text-label-sm text-on-surface-variant">Kepala Sekolah</p>
</div>
<div class="w-0.5 h-12 bg-primary/20"></div>
<!-- Admin & Komite -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-24 relative">
<div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-0.5 bg-primary/20 hidden md:block"></div>
<div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-secondary text-center w-64">
<div class="font-h3 text-lg font-bold text-secondary">Ibu Sarah Wijaya</div>
<p class="text-label-sm text-on-surface-variant">Ketua Komite</p>
</div>
<div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-secondary text-center w-64">
<div class="font-h3 text-lg font-bold text-secondary">Bpk. Rahmat Hidayat</div>
<p class="text-label-sm text-on-surface-variant">Kepala Tata Usaha</p>
</div>
</div>
</div>
</section>
<!-- Meet Our Teachers -->
<section class="mb-stack-lg">
<div class="flex justify-between items-end mb-stack-md">
<div>
<h2 class="font-h2 text-h2 text-primary">Daftar Guru</h2>
<p class="text-on-surface-variant font-body-md">Tenaga pendidik profesional dan berdedikasi tinggi.</p>
</div>
<div class="bg-tertiary-fixed px-4 py-2 rounded-full flex items-center gap-2">
<span class="material-symbols-outlined text-tertiary">school</span>
<span class="font-label-sm text-tertiary">Total 32 Guru</span>
</div>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
<!-- Teacher 1 -->
<div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300">
<div class="h-64 overflow-hidden relative">
<img alt="Teacher Portrait" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Portrait of a smiling female teacher in a professional blazer with a library background and warm soft lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB--NNoozMUcMwCM2uHpBZ1xXtFeUN5svWu2BkWg8EJplD_kHADrRVGCrNK-WBEiuMN8fFJ1iKl5RQvkv7s8dokiGRWk4BQ4zqQGghTzCnKn2aTh7-THdP9DlVC0TkYx4ntbDCH8enR2n41v9p7BA2ErSJEWxsND_FmrPVu8ngrY9teB0lRaBsqEW7JvNI1l2bxW6IIPg8Aqc5954zObmHn0MCayDP1c7axEJchW98eLUrvtZn-nQvfsc_po6SOLnpkZyIOubajd1E"/>
<div class="absolute bottom-0 left-0 right-0 bg-primary/90 p-4 translate-y-full group-hover:translate-y-0 transition-transform">
<p class="text-white text-xs font-bold uppercase tracking-wider">Guru Kelas 6</p>
</div>
</div>
<div class="p-6">
<h4 class="font-h3 text-base text-primary">Ibu Nuraini, S.Pd</h4>
<p class="text-label-sm text-on-surface-variant mt-1">NIP. 19780512 200501 2 003</p>
</div>
</div>
<!-- Teacher 2 -->
<div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300">
<div class="h-64 overflow-hidden relative">
<img alt="Teacher Portrait" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Professional portrait of a middle-aged male teacher smiling kindly with modern classroom blurred background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-Ny_oy7CSrEAAuCWF5qPqRxBap35preezWAy4k_mfP9ZOHNFGK_E-gvmOlPeoQapWS9JzHvJ5Ov4JRHbzpmqlzuZEXOEo9yCNwiLKcw-PxE_YiVPE0eHbROFFRWW0JMDO5rknRgb9zZhZWMbKyBHPR5MGxXHbqJksneu8GALTKQXcs6A_kE7eF1FB41kcmvK1ba-XlTtt640W0SpCXZSwrwswECuz_AfqJNP2PIQAKjIqCx6qkRJpPJq2ruYEQt25hrzMLbe74ag"/>
</div>
<div class="p-6">
<h4 class="font-h3 text-base text-primary">Bpk. Surya Dinata, M.Pd</h4>
<p class="text-label-sm text-on-surface-variant mt-1">Guru Olahraga</p>
</div>
</div>
<!-- Teacher 3 -->
<div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300">
<div class="h-64 overflow-hidden relative">
<img alt="Teacher Portrait" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Young female teacher with friendly expression, wearing ethnic Indonesian batik, holding a book in a sunlit hallway" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMtqUv847jM-FcohEAzLRmvC4ZmJ-MKxWZHlrV49KQHGJwJPOv42pUvWh868MicWIZdR4HMKph8NWNzlWc9Sui98x43HW2sVW-IB33o-H8Ou5aGI-mTirHHR9OySoup3eQJvbAcGXw9rs3wnzANAixbfLmfbZLi1BnFoRaUi6LU6UjbudAbmVRmkQlmlGO1HXk0sSCI8P133qcPcFBVE09JmV-Mnww2e2wClpHBoukBInWArNx-110PMa3EfGYVMspdrxXqB9F8OQ"/>
</div>
<div class="p-6">
<h4 class="font-h3 text-base text-primary">Ibu Lusi Rahmawati, S.Si</h4>
<p class="text-label-sm text-on-surface-variant mt-1">Guru Sains</p>
</div>
</div>
<!-- Teacher 4 -->
<div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300">
<div class="h-64 overflow-hidden relative">
<img alt="Teacher Portrait" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Portrait of a senior male teacher with glasses, looking scholarly and approachable, soft studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBWnQlRymBlgjOzyjaEOishPCazaW87pmEPs5bkLhVPWF3_-30Qw_S2iICBFM0uv-7BZbRfHC2--ip9KYqBuuswLV2G8mNIUZwn_3iUHloXfJ_90rZSZfZWYQG3C6vKqqYGQp-v9Damsyy1y6FX8pQ0Vx9_2PyT45pEOPaQClGlqIO6n2y6rdqp4VUZ8BMQDB7GZLikz83DQxf4lC5uER5AlHQRVkHderZy7A-zSFxv2BShuAF0cIisdEcnHqdQPMR70TpEPgEin0"/>
</div>
<div class="p-6">
<h4 class="font-h3 text-base text-primary">Bpk. Heru Prasetio, S.Pd</h4>
<p class="text-label-sm text-on-surface-variant mt-1">Guru Matematika</p>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-slate-50 dark:bg-slate-950 border-t border-gray-200 dark:border-gray-800">
<div class="max-w-[1200px] mx-auto py-12 px-6 flex flex-col md:flex-row justify-between items-start gap-8">
<div class="max-w-md">
<span class="text-lg font-bold text-[#008080] dark:text-teal-400 mb-4 block font-lexend">SDN CILEDUG BARAT</span>
<p class="font-lexend text-sm leading-relaxed text-slate-500 mb-6">Sekolah Dasar Negeri dengan visi mencetak generasi unggul yang memiliki kompetensi global dan karakter luhur berdasarkan nilai-nilai Pancasila.</p>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#008080] shadow-sm hover:scale-110 transition-transform" href="#">
<span class="material-symbols-outlined text-xl">share</span>
</a>
<a class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-[#008080] shadow-sm hover:scale-110 transition-transform" href="#">
<span class="material-symbols-outlined text-xl">mail</span>
</a>
</div>
</div>
<div class="grid grid-cols-2 gap-12 font-lexend text-sm leading-relaxed">
<div>
<h5 class="font-bold text-slate-900 mb-4">Navigasi</h5>
<div class="flex flex-col gap-2">
<a class="text-slate-500 hover:text-[#008080] hover:underline decoration-2 underline-offset-4 transition-all" href="#">Visi &amp; Misi</a>
<a class="text-[#008080] font-semibold" href="#">Struktur Organisasi</a>
<a class="text-slate-500 hover:text-[#008080] hover:underline decoration-2 underline-offset-4 transition-all" href="#">Kontak</a>
<a class="text-slate-500 hover:text-[#008080] hover:underline decoration-2 underline-offset-4 transition-all" href="#">Lokasi</a>
</div>
</div>
<div>
<h5 class="font-bold text-slate-900 mb-4">Kontak Kami</h5>
<p class="text-slate-500 mb-2">Jl. H. Mansyur No. 12, Ciledug</p>
<p class="text-slate-500 mb-2">Kota Tangerang, Banten</p>
<p class="text-slate-500">(021) 555-1234</p>
</div>
</div>
</div>
<div class="max-w-[1200px] mx-auto px-6 py-8 border-t border-gray-100 dark:border-gray-800 text-center">
<p class="font-lexend text-sm text-slate-500">© 2024 SDN CILEDUG BARAT. Nurturing, Trustworthy, and Joyful Education.</p>
</div>
</footer>
</body></html>
