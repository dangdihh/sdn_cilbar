@php
    $currentRoute = Route::currentRouteName() ?? '';
    // Mengambil nilai parameter 'kategori' dari URL yang sedang aktif (jika ada)
    $currentKategori = Request::route('kategori') ?? '';

    $navItems = [
        ['label' => 'Beranda',  'route' => 'home',     'name' => 'home'],
        ['label' => 'Tentang',  'route' => 'tentang',  'name' => 'tentang'],
        [
            'label'    => 'Akademik',
            'route'    => null,
            'name'     => 'akademik',
            'dropdown' => [
                ['label' => 'Kurikulum',         'route' => 'akademik.kurikulum', 'params' => []],
                ['label' => 'Kalender Akademik', 'route' => 'akademik.kalender',  'params' => []],
                ['label' => 'Tenaga Pendidik',   'route' => 'akademik.pendidik',  'params' => []],
            ],
        ],
        [
            'label'    => 'Kegiatan',
            'route'    => null,
            'name'     => 'kegiatan',
            'dropdown' => [
                ['label' => 'Ekstrakurikuler', 'route' => 'kegiatan.kategori', 'params' => ['kategori' => 'ekstrakurikuler']],
                ['label' => 'Prestasi',        'route' => 'kegiatan.kategori', 'params' => ['kategori' => 'prestasi']],
                ['label' => 'Dokumentasi',     'route' => 'kegiatan.kategori', 'params' => ['kategori' => 'dokumentasi']],
                ['label' => 'Berita Sekolah',  'route' => 'kegiatan.kategori', 'params' => ['kategori' => 'berita']],
            ],
        ],
        ['label' => 'PPDB', 'route' => 'ppdb.index', 'name' => 'ppdb'],
    ];

    $isActive = fn(string $name) => str_starts_with($currentRoute, $name);
@endphp

<style>
    @keyframes shimmer {
        0%   { transform: translateX(-100%); }
        100% { transform: translateX(200%); }
    }
    .logo-shimmer:hover .shimmer-bar {
        animation: shimmer 0.55s ease forwards;
    }
    .nav-link-animated .underline-bar {
        transform-origin: left center;
        transform: scaleX(0);
        transition: transform 0.22s cubic-bezier(0.4,0,0.2,1);
    }
    .nav-link-animated:hover .underline-bar,
    .nav-link-animated.is-active .underline-bar {
        transform: scaleX(1);
    }
</style>

<header
    id="navbar"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white"
    x-data="navbar()"
    :class="scrolled ? 'shadow-[0_1px_12px_0_rgba(26,141,162,0.08)] bg-white/95 backdrop-blur-md' : 'bg-white'"
    @scroll.window="onScroll()"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-[68px]">

            {{-- ── Wordmark Logo ── --}}
            <a href="{{ route('home') }}"
               class="logo-shimmer group relative flex-shrink-0 overflow-hidden rounded-sm select-none"
               aria-label="SDN Ciledug Barat — Beranda">
                <span class="relative z-10 font-lexend font-bold text-[15.5px] tracking-[0.03em] text-primary-400
                             transition-all duration-300 group-hover:tracking-[0.07em] group-hover:text-primary-600
                             inline-block">
                    SDN CILEDUG BARAT
                </span>
                <span class="shimmer-bar absolute inset-y-0 w-8 bg-gradient-to-r from-transparent via-white/50 to-transparent
                             pointer-events-none -translate-x-full" aria-hidden="true"></span>
                <span class="absolute bottom-0 left-0 h-[2px] w-full rounded-full bg-primary-200 overflow-hidden" aria-hidden="true">
                    <span class="absolute inset-0 bg-primary-400 origin-left scale-x-0 transition-transform duration-300
                                 group-hover:scale-x-100"></span>
                </span>
            </a>

            {{-- ── Desktop Nav ── --}}
            <nav class="hidden lg:flex items-center gap-0.5" aria-label="Navigasi utama">
                @foreach ($navItems as $item)
                    @if (!empty($item['dropdown']))
                        <div class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                            <button
                                class="nav-link-animated relative flex items-center gap-1 px-3.5 py-2 text-[13.5px] font-medium font-jakarta transition-colors duration-150
                                       {{ $isActive($item['name']) ? 'text-primary-400 is-active' : 'text-gray-600 hover:text-gray-900' }}"
                                :aria-expanded="open"
                                aria-haspopup="true"
                            >
                                {{ $item['label'] }}
                                <svg class="w-3 h-3 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                                     viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                    <path d="M2 4.5l4 3 4-3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="underline-bar absolute bottom-0 left-3.5 right-3.5 h-[2px] rounded-full bg-primary-400"></span>
                            </button>

                            <div
                                x-show="open"
                                x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="opacity-0 scale-95 -translate-y-1"
                                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-100"
                                x-transition:leave-end="opacity-0 scale-95 -translate-y-1"
                                class="absolute top-full left-0 mt-2 w-52 bg-white rounded-xl
                                       shadow-xl shadow-primary-400/10 border border-gray-100 py-1.5 z-50"
                                style="display:none;"
                            >
                                @foreach ($item['dropdown'] as $sub)
                                    @php
                                        // FIX AKURASI MENU AKTIF: Cek kecocokan nama rute SEKALIGUS isi parameter kategorinya
                                        $isSubActive = ($currentRoute === $sub['route']) && (!isset($sub['params']['kategori']) || $currentKategori === $sub['params']['kategori']);
                                    @endphp
                                    <a href="{{ route($sub['route'], $sub['params'] ?? []) }}"
                                       class="group/sub flex items-center gap-2.5 px-4 py-2.5 text-[13px] font-jakarta text-gray-600
                                              hover:bg-primary-50 hover:text-primary-600 transition-colors duration-150
                                              {{ $isSubActive ? 'bg-primary-50 text-primary-600 font-medium' : '' }}">
                                        <span class="w-1 h-1 rounded-full bg-primary-300 group-hover/sub:bg-primary-400 transition-colors flex-shrink-0"></span>
                                        {{ $sub['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <a href="{{ route($item['route']) }}"
                           class="nav-link-animated {{ $isActive($item['name']) ? 'is-active' : '' }}
                                  relative px-3.5 py-2 text-[13.5px] font-medium font-jakarta transition-colors duration-150
                                  {{ $isActive($item['name']) ? 'text-primary-400' : 'text-gray-600 hover:text-gray-900' }}">
                            {{ $item['label'] }}
                            <span class="underline-bar absolute bottom-0 left-3.5 right-3.5 h-[2px] rounded-full bg-primary-400"></span>
                        </a>
                    @endif
                @endforeach
            </nav>

            {{-- ── CTA kanan (desktop) + Hamburger (mobile) ── --}}
            <div class="flex items-center gap-3">
                <a href="{{ route('kontak') }}"
                   class="hidden lg:inline-flex items-center gap-2 px-4 py-[9px] rounded-lg
                          bg-primary-400 text-white text-[13.5px] font-medium font-jakarta
                          ring-2 ring-primary-400/0 hover:ring-primary-400/25
                          hover:bg-primary-600 active:scale-[0.97]
                          transition-all duration-200 shadow-sm shadow-primary-400/20">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                    </svg>
                    Hubungi Kami
                </a>

                {{-- Hamburger --}}
                <button
                    class="lg:hidden relative w-9 h-9 flex flex-col items-center justify-center gap-[5px]
                           rounded-lg hover:bg-gray-100 transition-colors duration-150"
                    @click="mobileOpen = !mobileOpen"
                    :aria-expanded="mobileOpen"
                    aria-label="Toggle menu"
                >
                    <span class="block w-5 h-[1.5px] bg-gray-600 rounded-full transition-all duration-250 origin-center"
                          :class="mobileOpen ? 'rotate-45 translate-y-[6.5px]' : ''"></span>
                    <span class="block w-5 h-[1.5px] bg-gray-600 rounded-full transition-all duration-200"
                          :class="mobileOpen ? 'opacity-0 scale-x-0' : ''"></span>
                    <span class="block w-5 h-[1.5px] bg-gray-600 rounded-full transition-all duration-250 origin-center"
                          :class="mobileOpen ? '-rotate-45 -translate-y-[6.5px]' : ''"></span>
                </button>
            </div>
        </div>
    </div>

    {{-- ── Mobile Menu ── --}}
    <div
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="lg:hidden bg-white border-t border-gray-100/80"
        style="display:none;"
        @click.away="mobileOpen = false"
    >
        <nav class="max-w-7xl mx-auto px-4 py-3 flex flex-col gap-0.5" aria-label="Navigasi mobile">
            @foreach ($navItems as $item)
                @if (!empty($item['dropdown']))
                    <div x-data="{ subOpen: false }">
                        <button
                            class="w-full flex items-center justify-between px-3 py-3 rounded-lg text-[14px] font-medium font-jakarta text-gray-600 hover:bg-gray-50 transition-colors"
                            @click="subOpen = !subOpen"
                        >
                            {{ $item['label'] }}
                            <svg class="w-4 h-4 transition-transform duration-200" :class="subOpen ? 'rotate-180' : ''"
                                 viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path d="M2 4.5l4 3 4-3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <div x-show="subOpen" x-transition class="pl-4 flex flex-col gap-0.5 mb-1" style="display:none;">
                            @foreach ($item['dropdown'] as $sub)
                                @php
                                    $isMobileSubActive = ($currentRoute === $sub['route']) && (!isset($sub['params']['kategori']) || $currentKategori === $sub['params']['kategori']);
                                @endphp
                                <a href="{{ route($sub['route'], $sub['params'] ?? []) }}"
                                   class="px-3 py-2.5 rounded-lg text-[13px] font-jakarta text-gray-500
                                          hover:bg-primary-50 hover:text-primary-600 transition-colors
                                          {{ $isMobileSubActive ? 'bg-primary-50 text-primary-600 font-medium' : '' }}">
                                    {{ $sub['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a href="{{ route($item['route']) }}"
                       class="px-3 py-3 rounded-lg text-[14px] font-medium font-jakarta transition-colors
                              {{ $isActive($item['name']) ? 'bg-primary-50 text-primary-400' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                        {{ $item['label'] }}
                    </a>
                @endif
            @endforeach

            {{-- Hubungi Kami di mobile menu --}}
            <div class="pt-2 pb-1 border-t border-gray-100 mt-1">
                <a href="{{ route('kontak') }}"
                   class="flex items-center justify-center gap-2 w-full px-4 py-2.5 rounded-lg
                          bg-primary-400 hover:bg-primary-600 text-white text-[14px] font-medium font-jakarta
                          transition-all duration-150">
                    Hubungi Kami
                </a>
            </div>
        </nav>
    </div>
</header>

<div class="h-16 lg:h-[68px]" aria-hidden="true"></div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('navbar', () => ({
            scrolled:   false,
            mobileOpen: false,
            onScroll() {
                this.scrolled = window.scrollY > 10;
            }
        }));
    });
</script>