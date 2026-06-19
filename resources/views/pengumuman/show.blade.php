<x-layout>
    <x-slot:title>{{ $pengumuman->title }} - SDN Ciledug Barat</x-slot:title>

    <div class="max-w-4xl mx-auto px-6 py-20">
        <a href="{{ route('pengumuman.index') }}" class="text-[#1A8DA3] font-semibold text-sm inline-flex items-center gap-2 mb-6 hover:underline">
            ← Kembali ke Pengumuman
        </a>

        <div class="border-b border-gray-100 pb-6 mb-8">
            <span class="inline-block text-xs font-semibold px-3 py-1 rounded-full bg-[#e0f6fa] text-[#1A8DA3] mb-3">
                {{ $pengumuman->kategori ?? $pengumuman->category }}
            </span>
            <h1 class="font-headline text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                {{ $pengumuman->title }}
            </h1>
            <p class="text-sm text-gray-400">
                Dipublikasikan pada: {{ \Carbon\Carbon::parse($pengumuman->published_at)->locale('id')->isoFormat('D MMMM YYYY') }}
            </p>
        </div>

        <div class="prose max-w-none text-gray-600 leading-relaxed text-base">
            {!! nl2br(e($pengumuman->description)) !!}
        </div>
    </div>
</x-layout>