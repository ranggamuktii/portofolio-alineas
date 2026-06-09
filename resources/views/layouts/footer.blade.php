<footer id="contact" class="bg-gray-900 pt-20 pb-8">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">

        {{-- Top grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

            {{-- Brand --}}
            <div class="lg:col-span-2">
                <div class="mb-4">
                    @if (file_exists(public_path('images/alineas-logo.png')))
                        <img src="{{ asset('images/alineas-logo.png') }}" alt="Alineas Studio" class="h-10 w-auto brightness-0 invert opacity-80">
                    @else
                        <span class="text-2xl font-black tracking-tighter text-white">ALINEAS<span class="text-red-500">.</span></span>
                    @endif
                </div>
                <p class="text-red-400 text-sm italic mb-5">"Pose With Alineas"</p>
                <p class="text-gray-300 text-sm leading-relaxed max-w-sm">
                    Mitra visual terpercaya untuk individu, keluarga, dan perusahaan. Studio fotografi profesional di Karawang, Jawa Barat.
                </p>

                {{-- CTA kerjasama --}}
                <div class="mt-8">
                    <a href="https://wa.me/6285213385280" target="_blank"
                        class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white text-sm font-semibold px-6 py-3 rounded-full transition-all duration-300">
                        Mulai Kerjasama
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                {{-- Social links --}}
                <div class="flex items-center gap-3 mt-6">
                    <a href="https://www.instagram.com/alineas.studio" target="_blank"
                        class="w-9 h-9 rounded-full border border-white/10 flex items-center justify-center text-gray-500 hover:text-white hover:border-white/30 transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="https://www.tiktok.com/@alineas.studio" target="_blank"
                        class="w-9 h-9 rounded-full border border-white/10 flex items-center justify-center text-gray-500 hover:text-white hover:border-white/30 transition-all duration-300">
                        <svg class="w-3.5 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31 0 2.591.233 3.812.63v4.613c-1.126-.331-2.28-.466-3.417-.402v12.352c0 2.456-1.991 4.447-4.448 4.447-2.456 0-4.447-1.991-4.447-4.447 0-2.456 1.991-4.447 4.447-4.447.38 0 .748.048 1.1.137v-4.66c-.364-.041-.73-.062-1.1-.062-5.013 0-9.077 4.064-9.077 9.077s4.064 9.077 9.077 9.077c4.898 0 8.892-3.878 9.066-8.72V7.124c1.603 1.106 3.53 1.754 5.613 1.832V4.343c-.44-.016-.874-.066-1.302-.153-1.832-.371-3.385-1.465-4.326-2.936-.452-.705-.773-1.492-.937-2.333h-4.4z"/></svg>
                    </a>
                    <a href="https://www.facebook.com/share/1876aXAtWw/" target="_blank"
                        class="w-9 h-9 rounded-full border border-white/10 flex items-center justify-center text-gray-500 hover:text-white hover:border-white/30 transition-all duration-300">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-white text-xs font-bold tracking-widest uppercase mb-6">Hubungi Kami</h3>
                <ul class="space-y-5">
                    <li>
                        <a href="https://wa.me/6285213385280" target="_blank" class="group flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-red-600/20 transition-colors">
                                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs mb-1">WhatsApp</p>
                                <p class="text-gray-300 text-sm group-hover:text-white transition-colors">+62 852-1338-5280</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:alineasstudio@gmail.com" class="group flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:bg-red-600/20 transition-colors">
                                <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-xs mb-1">Email</p>
                                <p class="text-gray-300 text-sm group-hover:text-white transition-colors">alineasstudio@gmail.com</p>
                            </div>
                        </a>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-xs mb-1">Lokasi Studio</p>
                            <p class="text-gray-300 text-sm">Karawang, Jawa Barat</p>
                        </div>
                    </li>
                </ul>
            </div>

            {{-- Map --}}
            <div>
                <h3 class="text-white text-xs font-bold tracking-widest uppercase mb-6">Temukan Studio Kami</h3>
                <div class="rounded-xl overflow-hidden border border-white/10 h-44">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2724997412774!2d107.37705087316945!3d-6.358764662202921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977005e65a0fd%3A0x951ebb93fda8d89d!2sALINEAS%20PHOTO%20STUDIO!5e0!3m2!1sid!2sid!4v1769525797769!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0; filter: grayscale(100%) contrast(80%) brightness(0.7);" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p class="text-gray-500 text-xs mt-3 leading-relaxed">
                    Jl. Raya Telagasari - Kosambi, Pancawati, Kec. Klari, Karawang.
                </p>
            </div>

        </div>

        {{-- Bottom bar --}}
        <div class="border-t border-white/[0.06] pt-8 flex flex-col sm:flex-row justify-between items-center gap-3">
            <p class="text-gray-500 text-xs">
                &copy; {{ date('Y') }} Alineas Studio. All rights reserved.
            </p>
            <p class="text-gray-600 text-xs">
                Dibuat dengan <span class="text-red-500">♥</span> di Karawang, Jawa Barat
            </p>
        </div>
    </div>
</footer>
