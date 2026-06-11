<x-frontend-layout title="Halaman Tidak Ditemukan">
    {{-- Kita sembunyikan navbar dan footer di halaman 404 agar lebih clean, 
         tapi karena layout kita default memasukkan navbar & footer, 
         kita timpa layar penuh dengan konten 404 ini (absolute fill atau full screen flex). 
         Lebih baik kita buat full min-h-screen dan taruh konten di tengah. 
    --}}
    
    <div class="relative min-h-screen flex items-center justify-center bg-[#faf9f7] bg-noise overflow-hidden px-6 pt-24 pb-12">
        {{-- Latar belakang tulisan 404 raksasa --}}
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-[0.03]">
            <span class="font-display font-black text-[20rem] md:text-[35rem] leading-none text-gray-900 select-none">
                404
            </span>
        </div>

        <div class="relative z-10 text-center max-w-2xl mx-auto flex flex-col items-center">
            
            {{-- Ikon Kamera Out of Focus / Rusak --}}
            <div class="w-24 h-24 md:w-28 md:h-28 rounded-full bg-white shadow-xl shadow-red-600/10 flex items-center justify-center mb-8 reveal relative border border-gray-100">
                <div class="absolute inset-0 rounded-full border border-red-100 animate-ping opacity-20"></div>
                <svg class="w-12 h-12 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    {{-- Ikon Kamera --}}
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                    {{-- Garis patah/fokus hilang --}}
                    <line x1="12" y1="10" x2="12" y2="16" stroke-width="1.5" stroke-linecap="round" />
                    <line x1="9" y1="13" x2="15" y2="13" stroke-width="1.5" stroke-linecap="round" />
                    <circle cx="12" cy="13" r="3" stroke-width="1.5" stroke-dasharray="2 2" />
                </svg>
            </div>

            <span class="text-red-600 font-semibold tracking-widest uppercase text-xs mb-3 reveal delay-100">Error 404</span>
            <h1 class="font-display text-4xl md:text-5xl font-bold text-gray-900 mb-5 reveal delay-200">
                Oops! Kehilangan Fokus.
            </h1>
            
            <p class="text-gray-600 leading-relaxed mb-10 max-w-md mx-auto text-sm md:text-base reveal delay-300">
                Momen yang Anda cari sepertinya tidak terekam dalam memori kami, atau mungkin halamannya sudah dipindahkan.
            </p>

            <div class="reveal delay-400">
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-red-600 hover:bg-red-700 text-white rounded-full font-semibold transition-all hover:shadow-lg hover:shadow-red-600/30 hover:-translate-y-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Kembali ke Beranda
                </a>
            </div>

        </div>
    </div>
</x-frontend-layout>
