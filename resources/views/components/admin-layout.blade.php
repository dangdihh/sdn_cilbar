<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel - SDN Ciledug Barat' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-headline { font-family: 'Lexend', sans-serif; }
    </style>
</head>
<body class="bg-[#F8F9FA] text-slate-700 antialiased flex">

    <!-- SIDEBAR KIRI -->
    <aside class="w-64 min-h-screen bg-[#1A8DA2] text-white p-5 flex flex-col justify-between fixed left-0 top-0 bottom-0 z-50">
        <div class="space-y-6">
            <!-- Logo / Nama Sekolah -->
            <div class="border-b border-white/20 pb-4">
                <h2 class="font-headline font-bold text-lg leading-tight tracking-tight">SDN Ciledug Barat</h2>
                <span class="text-[10px] text-[#FFF59D] font-semibold tracking-wider uppercase">Panel Kendali Admin</span>
            </div>

            <!-- Menu Navigasi Admin -->
            <nav class="space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-semibold hover:bg-white/10 transition-all {{ request()->routeIs('admin.dashboard') || request()->routeIs('admin.kegiatan.create') ? 'bg-white/15 text-[#FFF59D]' : '' }}">
                    <span>📰</span> Kelola Kegiatan
                </a>
                <a href="{{ route('admin.pengumuman.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-semibold hover:bg-white/10 transition-all {{ request()->routeIs('admin.pengumuman.*') ? 'bg-white/15 text-[#FFF59D]' : '' }}">
                    <span>📢</span> Pengumuman Sekolah
                </a>
                <a href="{{ route('admin.fasilitas.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-semibold hover:bg-white/10 transition-all {{ request()->routeIs('admin.fasilitas.*') ? 'bg-white/15 text-[#FFF59D]' : '' }}">
                    <span>🏫</span> Fasilitas Sekolah
                </a>
                <a href="{{ route('admin.guru.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-semibold hover:bg-white/10 transition-all {{ request()->routeIs('admin.guru.*') ? 'bg-white/15 text-[#FFF59D]' : '' }}">
                    <span>👨‍🏫</span> Guru & Tendik
                </a>
                <a href="{{ route('ekskul.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-semibold hover:bg-white/10 transition-all {{ request()->routeIs('admin.ekskul.*') ? 'bg-white/15 text-[#FFF59D]' : '' }}">
                    <span>⚽</span> Ekstrakurikuler
                </a>
                <a href="{{ route('admin.kalender.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-semibold hover:bg-white/10 transition-all {{ request()->routeIs('admin.kalender.*') ? 'bg-white/15 text-[#FFF59D]' : '' }}">
                    <span>📅</span> Kalender Akademik
                </a>
                <a href="{{ route('admin.kurikulum.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-semibold hover:bg-white/10 transition-all {{ request()->routeIs('admin.kurikulum.*') ? 'bg-white/15 text-[#FFF59D]' : '' }}">
                    <span>📚</span> Kurikulum
                </a>
                <a href="{{ route('admin.ppdb.index') }}" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-semibold hover:bg-white/10 transition-all flex justify-between {{ request()->routeIs('admin.ppdb.*') ? 'bg-white/15 text-[#FFF59D]' : '' }}">
                    <span class="flex items-center gap-3"><span>📩</span> Data PPDB</span>
                </a>
            </nav>
        </div>

        <!-- Bagian Bawah Sidebar -->
        <div class="border-t border-white/20 pt-4">
            <a href="/" class="flex items-center gap-3 px-4 py-2 text-xs font-semibold text-slate-200 hover:text-white transition-all">
                <span>⬅</span> Kembali ke Web Utama
            </a>
        </div>
    </aside>

    <!-- KONTEN UTAMA (DISEBELAH KANAN SIDEBAR) -->
    <main class="flex-1 min-h-screen ml-64 p-8 md:p-10">
        {{ $slot }}
    </main>

</body>
</html>