<x-layout>
    <x-slot:title>{{ $artikel->title }} - SDN Ciledug Barat</x-slot:title>

    <style>
        .font-headline { font-family: 'Lexend', sans-serif; }
        .font-body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>

    <div class="bg-[#F8F9FA] min-h-screen font-body text-slate-700 antialiased pt-24 pb-16">
        <div class="max-w-3xl mx-auto px-6 lg:px-8">
            
            {{-- Tombol Kembali --}}
            <div class="mb-6">
                <a href="{{ route('kegiatan.kategori', $artikel->kategori) }}" class="inline-flex items-center text-xs font-bold text-[#1A8DA2] hover:text-[#126675] transition-colors gap-1">
                    <svg class="w-4 h-4 transform rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                    Kembali ke {{ ucfirst($artikel->kategori == 'ekskul' ? 'Ekstrakurikuler' : $artikel->kategori) }}
                </a>
            </div>

            {{-- Info Meta Artikel --}}
            <div class="space-y-3 mb-6">
                <span class="inline-block px-3 py-1 bg-[#e0f6fa] text-[#1A8DA2] text-[10px] font-bold uppercase tracking-wider rounded-full capitalize">
                    {{ $artikel->kategori }}
                </span>
                <h1 class="text-2xl md:text-4xl font-extrabold font-headline text-slate-900 tracking-tight leading-tight">
                    {{ $artikel->title }}
                </h1>
                <p class="text-xs text-slate-400">
                    Dipublikasikan pada: {{ \Carbon\Carbon::parse($artikel->published_at)->locale('id')->isoFormat('D MMMM YYYY • H:i') }} WIB
                </p>
            </div>

            {{-- Foto Banner Utama Artikel --}}
            @if($artikel->thumbnail)
                <div class="w-full aspect-[16/9] rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm mb-8 bg-slate-200">
                    <img src="{{ $artikel->thumbnail }}" alt="{{ $artikel->title }}" class="w-full h-full object-cover">
                </div>
            @endif

            {{-- Isi Konten Artikel Dinamis dari Supabase --}}
            <article class="prose prose-slate max-w-none text-sm md:text-base leading-relaxed text-slate-600 space-y-4">
                {{-- 
                   Gua pake bumbu nl2br biar enter/paragraf baru di database lu 
                   bisa kebaca rapi pas dicetak di HTML, gak numpuk jadi satu baris.
                --}}
                {!! nl2br(e($artikel->content ?? $artikel->body ?? $artikel->description ?? 'Isi konten artikel belum di-update oleh admin.')) !!}
            </article>

            {{-- Spacer Bawah --}}
            <div class="border-t border-slate-200 mt-12 pt-6 text-center">
                <p class="text-xs text-slate-400">SDN Ciledug Barat — Membentuk Generasi Cerdas & Berkarakter</p>
            </div>

        </div>
    </div>
</x-layout>