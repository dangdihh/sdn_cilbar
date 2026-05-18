<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SDN Ciledug Barat - Mendidik dengan hati untuk masa depan yang lebih cerah">
    <title>{{ $title ?? 'SDN Ciledug Barat' }}</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;500;600;700&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">

    {{-- Tailwind CSS CDN (ganti dengan npm build di production) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50:  '#e8f6f9',
                            100: '#b3dfe8',
                            200: '#6fc2d4',
                            400: '#1A8DA2',
                            600: '#126b7c',
                            800: '#0b4a57',
                            900: '#062e37',
                        },
                        secondary: {
                            100: '#FFF9C4',
                            300: '#FFF59D',
                            500: '#F9E825',
                            700: '#c8c07c',
                        }
                    },
                    fontFamily: {
                        lexend:  ['Lexend', 'sans-serif'],
                        jakarta: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    keyframes: {
                        'fade-down': {
                            '0%':   { opacity: '0', transform: 'translateY(-8px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        'fade-up': {
                            '0%':   { opacity: '0', transform: 'translateY(8px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        'slide-in': {
                            '0%':   { opacity: '0', transform: 'translateX(-100%)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                    },
                    animation: {
                        'fade-down': 'fade-down 0.4s ease both',
                        'fade-up':   'fade-up 0.5s ease both',
                        'slide-in':  'slide-in 0.35s cubic-bezier(0.16,1,0.3,1) both',
                    },
                }
            }
        }
    </script>

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('styles')
</head>
<body class="font-jakarta bg-white text-gray-800 antialiased">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Main Content --}}
    <main id="main-content">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('components.footer')

    @stack('scripts')
</body>
</html>
