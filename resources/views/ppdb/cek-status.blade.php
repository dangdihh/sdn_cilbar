<x-layout>
    <section class="py-16 px-6 max-w-xl mx-auto">
        <h2 class="text-2xl font-bold mb-6">Cek Status Pendaftaran</h2>
        
        <form action="{{ route('ppdb.cek-status.proses') }}" method="POST" class="mb-8">
            @csrf
            <input type="text" name="nik_anak" placeholder="Masukkan 16 digit NIK Anak" maxlength="16" class="w-full p-3 border rounded-xl" required>
            <button type="submit" class="mt-4 w-full bg-[#1A8DA3] text-white p-3 rounded-xl font-bold">Cek Status</button>
        </form>

        @if(isset($pendaftar))
            <div class="p-6 border rounded-2xl bg-slate-50">
                <h3 class="font-bold">{{ $pendaftar->nama_lengkap }}</h3>
                <p class="text-sm mt-2">Status: 
                    <span class="px-3 py-1 rounded-full text-xs font-bold 
                        {{ $pendaftar->status_pendaftaran == 'Diterima' ? 'bg-green-100 text-green-700' : 
                           ($pendaftar->status_pendaftaran == 'Ditolak' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-700') }}">
                        {{ $pendaftar->status_pendaftaran }}
                    </span>
                </p>
            </div>
        @endif
    </section>
</x-layout>