<x-frontend-layout>
    <style>
        .alineas-checkerboard {
            height: 30px;
            background-image: conic-gradient(
                #C13127 90deg,
                #F9F9F9 90deg 180deg,
                #C13127 180deg 270deg,
                #F9F9F9 270deg
            );
            background-size: 30px 30px;
            width: 100%;
        }
    </style>

    {{-- ============================================================
    HERO — Jumbotron (banner tetap pakai gambar asli)
    ============================================================ --}}
    <section id="hero" class="relative min-h-screen flex items-end overflow-hidden">

        {{-- Background image dengan overlay yang kuat --}}
        <div class="absolute inset-0 overflow-hidden">
            <img id="hero-bg" src="{{ asset('images/web-banner.png') }}" alt="Alineas Studio"
                class="absolute inset-0 w-full h-full object-cover object-center scale-110 origin-center">

            {{-- Overlay berlapis agar teks tidak nyaru --}}
            <div class="absolute inset-0 bg-black/55"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/10"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/20 to-transparent"></div>
        </div>

        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.02]"
            style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 44px 44px;">
        </div>

        {{-- Hero copy --}}
        <div class="relative z-10 w-full max-w-7xl mx-auto px-6 lg:px-12 pb-28 md:pb-36 pt-36">
            <div class="max-w-2xl">

                <div
                    class="hero-tag inline-flex items-center gap-2.5 mb-8 bg-white/10 backdrop-blur-md border border-white/20 rounded-full px-4 py-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-red-400 animate-pulse flex-shrink-0"></span>
                    <span class="text-white/90 text-xs tracking-widest uppercase font-medium">Studio Foto Profesional,
                        Karawang</span>
                </div>

                <h1 class="hero-h1 font-display leading-[0.92] tracking-tight mb-7">
                    <span
                        class="block text-5xl md:text-6xl lg:text-7xl font-bold text-white drop-shadow-lg">Mengabadikan</span>
                    <span
                        class="block text-5xl md:text-6xl lg:text-7xl font-bold italic text-red-400 drop-shadow-lg">Setiap
                        Cerita</span>
                    <span
                        class="block text-5xl md:text-6xl lg:text-7xl font-bold text-white drop-shadow-lg">Anda.</span>
                </h1>

                <p class="hero-sub text-base md:text-lg text-white/75 max-w-lg leading-relaxed mb-12">
                    Kami hadir sebagai mitra visual terpercaya dari sesi personal hingga dokumentasi korporat.
                </p>

                <div class="hero-ctas flex flex-wrap gap-3 items-center">
                    <a href="#portfolio"
                        class="group inline-flex items-center gap-2 bg-white text-gray-900 text-sm font-semibold px-7 py-3.5 rounded-full hover:bg-red-600 hover:text-white transition-all duration-300 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-red-600/25">
                        Lihat Portfolio
                        <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                    <a href="#contact"
                        class="text-sm font-medium text-white/70 hover:text-white underline underline-offset-4 transition-colors">
                        Hubungi kami
                    </a>
                </div>

            </div>

            {{-- Scroll cue --}}
            <div class="absolute bottom-10 right-12 hidden md:flex flex-col items-center gap-2">
                <span class="text-white/30 text-[9px] tracking-[0.4em] uppercase"
                    style="writing-mode: vertical-lr;">Scroll</span>
                <div class="w-px h-12 bg-gradient-to-b from-white/30 to-transparent"></div>
            </div>
        </div>
    </section>

    <div class="alineas-checkerboard"></div>


    {{-- ============================================================
    MARQUEE
    ============================================================ --}}
    <div class="py-4 border-y border-gray-100 bg-white overflow-hidden">
        <div class="marquee-track select-none">
            @php $tickers = ['The Family', 'The Group', 'The Birthday', 'The Graduation', 'The Maternity', 'Prewedding Premium', 'Studio Foto', 'Karawang', 'Profesional', 'Pose With Alineas']; @endphp
            @foreach(array_merge($tickers, $tickers) as $ticker)
                <div class="inline-flex items-center gap-5 px-7">
                    <span
                        class="text-gray-300 text-[11px] font-semibold tracking-[0.3em] uppercase whitespace-nowrap">{{ $ticker }}</span>
                    <span class="w-1 h-1 rounded-full bg-red-300 flex-shrink-0"></span>
                </div>
            @endforeach
        </div>
    </div>


    {{-- ============================================================
    ABOUT
    ============================================================ --}}
    <section id="about" class="pt-12 pb-20 md:pt-16 md:pb-24 bg-[#faf9f7] bg-noise">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                {{-- Placeholder image --}}
                <div class="reveal-left relative">
                    <div class="about-img-wrap aspect-[4/5] overflow-hidden rounded-[2rem]">
                        <img src="{{ asset('images/about.webp') }}"
                            alt="Alineas Studio - Prewedding Session" class="w-full h-full object-cover ken-burns">
                    </div>

                    <div
                        class="absolute -bottom-5 -right-3 md:-right-6 bg-red-600 rounded-xl p-5 shadow-xl shadow-red-600/20">
                        <div class="font-display text-3xl font-bold text-white">5+</div>
                        <div class="text-red-100 text-xs mt-1">Tahun Pengalaman</div>
                    </div>
                    <div
                        class="absolute -top-3 -left-3 md:-left-6 bg-white border border-gray-100 rounded-xl p-4 shadow-md">
                        <div class="flex items-center gap-2 mb-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                            <span class="text-gray-400 text-[10px] uppercase tracking-widest font-medium">Buka Setiap
                                Hari</span>
                        </div>
                        <p class="text-gray-800 text-sm font-semibold">09.00 – 21.00 WIB</p>
                    </div>
                </div>

                {{-- About copy --}}
                <div class="reveal-right">
                    <span class="text-red-600 text-xs font-semibold tracking-widest uppercase">Tentang Kami</span>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 leading-snug mt-3 mb-5">
                        Studio di Balik Ribuan Momen Indah
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-4 text-sm md:text-base">
                        Alineas Studio adalah studio fotografi profesional di Karawang, Jawa Barat. Kami hadir sebagai
                        mitra visual bagi individu, keluarga, dan perusahaan yang menginginkan hasil foto berkualitas
                        tinggi.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8 text-sm md:text-base">
                        Dengan tim fotografer berpengalaman dan peralatan modern, setiap sesi kami rancang untuk
                        menghasilkan karya terbaik bukan sekadar foto, tapi sebuah cerita visual.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-4 mt-8">
                        @foreach ([
                                ['title' => 'Foto Berkualitas Tinggi', 'icon' => 'M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z'],
                                ['title' => 'Editing Detail & Natural', 'icon' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'],
                                ['title' => 'Proses Cepat & Tepat Waktu', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                                ['title' => 'Pelayanan Ramah & Responsif', 'icon' => 'M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z']
                            ] as $index => $f)
                                                            <div class="flex items-center gap-4 group reveal delay-{{ ($index + 1) * 100 }}">
                                                                <span class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center flex-shrink-0 group-hover:bg-red-600 transition-colors duration-300">
                                                                    <svg class="w-6 h-6 text-red-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $f['icon'] }}" />
                                                                        @if($index === 0)
                                                                            <circle cx="12" cy="13" r="4" stroke-width="2" />
                                                                        @endif
                                                                    </svg>
                                                                </span>
                                                                <span class="text-gray-900 font-semibold text-sm md:text-base">{{ $f['title'] }}</span>
                                                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
    PORTFOLIO (Featured + Masonry)
    Semua gambar = placeholder abu
    ============================================================ --}}
    <section id="portfolio" class="py-24 md:py-32 bg-white" x-data="{
        active: 'All',
        limit: 12,
        categories: ['All', 'Prewedding', 'Wedding', 'Family', 'Group', 'School', 'Graduation Indoor', 'Graduation Outdoor', 'Birthday', 'Exclusive', 'Photobooth', 'Photobox', 'Maternity', 'Goes to KUA', 'Automotive', 'Product', 'Event Coverage', 'Self Photo', 'Cinematic Wedding', 'Event Video', 'Prewedding Cinema'],
        items: [],
        showLoadMore: false,
        init() {
            this.items = Array.from(document.querySelectorAll('.portfolio-item'));
            this.updateVisibility();
        },
        setActive(cat) {
            this.active = cat;
            this.limit = 12;
            this.updateVisibility();
        },
        loadMore() {    
            this.limit += 12;
            this.updateVisibility();
        },
        updateVisibility() {
            let visibleCount = 0;
            let totalMatch = 0;
            this.items.forEach(el => {
                let isCover = el.classList.contains('is-cover');
                let match = false;
                
                if (this.active === 'All') {
                    match = isCover;
                } else {
                    match = (!isCover && el.dataset.label === this.active);
                }

                if (match) {
                    totalMatch++;
                    if (visibleCount < this.limit) {
                        el.classList.remove('hidden-item');
                        visibleCount++;
                    } else {
                        el.classList.add('hidden-item');
                    }
                } else {
                    el.classList.add('hidden-item');
                }
            });
            this.showLoadMore = totalMatch > this.limit;
        }
    }">

        <div class="max-w-7xl mx-auto px-6 lg:px-12">

            <div class="reveal flex flex-col xl:flex-row xl:items-end justify-between gap-5 mb-12">
                <div class="shrink-0 xl:pr-8">
                    <span class="text-red-600 text-xs font-semibold tracking-widest uppercase">Portfolio</span>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-2 min-w-max">Karya Terbaik Kami</h2>
                </div>
                <div class="relative w-full min-w-0">
                    <!-- Indikator fade di kanan untuk mobile -->
                    <div class="absolute right-0 top-0 bottom-4 w-12 bg-gradient-to-l from-white to-transparent pointer-events-none z-10 xl:hidden"></div>
                    
                    <style>
                        .filter-scroll::-webkit-scrollbar { height: 4px; }
                        .filter-scroll::-webkit-scrollbar-track { background: transparent; }
                        .filter-scroll::-webkit-scrollbar-thumb { background: #e5e7eb; border-radius: 4px; }
                        .filter-scroll::-webkit-scrollbar-thumb:hover { background: #dc2626; }
                    </style>
                    <div class="flex overflow-x-auto gap-3 pb-5 w-full snap-x snap-mandatory scroll-smooth filter-scroll">
                        <template x-for="cat in categories" :key="cat">
                            <button @click="setActive(cat)"
                                :class="active === cat ? 'bg-gray-900 text-white border-gray-900 shadow-md' : 'bg-white text-gray-500 border-gray-200 hover:border-gray-400 hover:text-gray-900'"
                                class="whitespace-nowrap shrink-0 snap-start border text-[10px] md:text-[11px] font-semibold tracking-widest uppercase px-4 py-2 md:py-2.5 rounded-full transition-all duration-250"
                                x-text="cat">
                            </button>
                        </template>
                    </div>
                </div>
            </div>


            <div class="masonry-grid">
                @php
                    $portfolioItems = [
                        [
                            'cat' => 'Wedding',
                            'label' => 'Cinematic Wedding',
                            'title' => 'Cinematic Wedding',
                            'h' => 280,
                            'isVideo' => true,
                            'img' => 'https://img.youtube.com/vi/7z5cK_QntPE/maxresdefault.jpg',
                            'gallery' => [
                                'https://youtu.be/7z5cK_QntPE',
                                'https://youtu.be/J2hDRsYcGHI',
                                'https://youtu.be/sTuBecU8Kco',
                                'https://youtu.be/g3riXaYMrPs',
                                'https://youtu.be/ZLwgYsDQ1eE',
                                'https://www.youtube.com/watch?v=Uzolz6ViRJE'
                            ]
                        ],
                        [
                            'cat' => 'Event',
                            'label' => 'Event Video',
                            'title' => 'Event Video',
                            'h' => 280,
                            'isVideo' => true,
                            'img' => 'https://img.youtube.com/vi/XLhTiPPdknU/maxresdefault.jpg',
                            'gallery' => [
                                'https://youtu.be/XLhTiPPdknU',
                                'https://www.youtube.com/watch?v=RMG17_zDO2M'
                            ]
                        ],
                        [
                            'cat' => 'Wedding',
                            'label' => 'Prewedding Cinema',
                            'title' => 'Prewedding Cinema',
                            'h' => 280,
                            'isVideo' => true,
                            'img' => 'https://img.youtube.com/vi/PR-gKLxvKdQ/maxresdefault.jpg',
                            'gallery' => [
                                'https://youtu.be/PR-gKLxvKdQ'
                            ]
                        ],
                        [
                            'cat' => 'Portrait',
                            'label' => 'Self Photo',
                            'title' => 'Self Photo',
                            'h' => 280,
                            'img' => asset('images/portfolio/selfphoto/sinta (3 of 5).jpg'),
                            'gallery' => [
                                asset('images/portfolio/selfphoto/10.jpg'),
                                asset('images/portfolio/selfphoto/3.jpg'),
                                asset('images/portfolio/selfphoto/AURA EDIT (2 of 5).jpg'),
                                asset('images/portfolio/selfphoto/BUNGA EDIT-2.jpg'),
                                asset('images/portfolio/selfphoto/EDITT ALYA.jpg'),
                                asset('images/portfolio/selfphoto/ELIS (2 of 5).JPG'),
                                asset('images/portfolio/selfphoto/FRAME 9.jpg'),
                                asset('images/portfolio/selfphoto/RICHEL-1.JPG'),
                                asset('images/portfolio/selfphoto/SELFS 4R LAYOUT 1 PHOTO.jpg'),
                                asset('images/portfolio/selfphoto/SELFS 4R LAYOUT 4PHOTO.jpg'),
                                asset('images/portfolio/selfphoto/SYIFA (37).jpg'),
                                asset('images/portfolio/selfphoto/sinta (3 of 5).jpg')
                            ]
                        ],
                        [
                            'cat' => 'Event',
                            'label' => 'Event Coverage',
                            'title' => 'Event Coverage',
                            'h' => 280,
                            'img' => asset('images/portfolio/event/alineas-event-009.webp'),
                            'gallery' => [
                                asset('images/portfolio/event/alineas-event-001.webp'),
                                asset('images/portfolio/event/alineas-event-002.webp'),
                                asset('images/portfolio/event/alineas-event-003.webp'),
                                asset('images/portfolio/event/alineas-event-004.webp'),
                                asset('images/portfolio/event/alineas-event-005.webp'),
                                asset('images/portfolio/event/alineas-event-006.webp'),
                                asset('images/portfolio/event/alineas-event-007.webp'),
                                asset('images/portfolio/event/alineas-event-008.webp'),
                                asset('images/portfolio/event/alineas-event-009.webp'),
                                asset('images/portfolio/event/alineas-event-010.webp'),
                                asset('images/portfolio/event/alineas-event-011.webp'),
                                asset('images/portfolio/event/alineas-event-012.webp'),
                                asset('images/portfolio/event/alineas-event-013.webp'),
                                asset('images/portfolio/event/alineas-event-014.webp'),
                                asset('images/portfolio/event/alineas-event-015.webp')
                            ]
                        ],
                        [
                            'cat' => 'Portrait',
                            'label' => 'Family',
                            'title' => 'The Family',
                            'h' => 280,
                            'img' => asset('images/portfolio/family/alineas-family-008.webp'),
                            'gallery' => [
                                asset('images/portfolio/family/alineas-family-001.webp'),
                                asset('images/portfolio/family/alineas-family-002.webp'),
                                asset('images/portfolio/family/alineas-family-003.webp'),
                                asset('images/portfolio/family/alineas-family-004.webp'),
                                asset('images/portfolio/family/alineas-family-005.webp'),
                                asset('images/portfolio/family/alineas-family-006.webp'),
                                asset('images/portfolio/family/alineas-family-007.webp'),
                                asset('images/portfolio/family/alineas-family-008.webp'),
                                asset('images/portfolio/family/alineas-family-009.webp'),
                                asset('images/portfolio/family/alineas-family-010.webp'),
                                asset('images/portfolio/family/alineas-family-011.webp'),
                                asset('images/portfolio/family/alineas-family-012.webp')
                            ]
                        ],
                        [
                            'cat' => 'Portrait',
                            'label' => 'Group',
                            'title' => 'The Group',
                            'h' => 340,
                            'img' => asset('images/portfolio/group/alineas-group-013.webp'),
                            'gallery' => [
                                asset('images/portfolio/group/alineas-group-002.webp'),
                                asset('images/portfolio/group/alineas-group-001.webp'),
                                asset('images/portfolio/group/alineas-group-003.webp'),
                                asset('images/portfolio/group/alineas-group-004.webp'),
                                asset('images/portfolio/group/alineas-group-005.webp'),
                                asset('images/portfolio/group/alineas-group-006.webp'),
                                asset('images/portfolio/group/alineas-group-007.webp'),
                                asset('images/portfolio/group/alineas-group-008.webp'),
                                asset('images/portfolio/group/alineas-group-009.webp'),
                                asset('images/portfolio/group/alineas-group-010.webp'),
                                asset('images/portfolio/group/alineas-group-011.webp'),
                                asset('images/portfolio/group/alineas-group-012.webp'),
                                asset('images/portfolio/group/alineas-group-013.webp'),
                                asset('images/portfolio/group/alineas-group-014.webp'),
                                asset('images/portfolio/group/alineas-group-015.webp'),
                                asset('images/portfolio/group/alineas-group-016.webp'),
                                asset('images/portfolio/group/alineas-group-017.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-001.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-002.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-003.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-004.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-005.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-006.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-007.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-008.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-009.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-010.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-011.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-012.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-013.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-014.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-015.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-016.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-017.webp'),
                                asset('images/portfolio/group/alineas-group-17agst-018.webp')
                            ]
                        ],
                        [
                            'cat' => 'Portrait',
                            'label' => 'Exclusive',
                            'title' => 'The Exclusive',
                            'h' => 320,
                            'img' => asset('images/portfolio/exclusive/alineas-exclusive-001.webp'),
                            'gallery' => [
                                asset('images/portfolio/exclusive/alineas-exclusive-001.webp'),
                                asset('images/portfolio/exclusive/alineas-exclusive-002.webp'),
                                asset('images/portfolio/exclusive/alineas-exclusive-005.webp'),
                                asset('images/portfolio/exclusive/alineas-exclusive-006.webp'),
                                asset('images/portfolio/exclusive/alineas-exclusive-007.webp'),
                                asset('images/portfolio/exclusive/alineas-exclusive-008.webp'),
                                asset('images/portfolio/exclusive/alineas-exclusive-009.webp')
                            ]
                        ],
                        [
                            'cat' => 'Event',
                            'label' => 'Birthday',
                            'title' => 'The Birthday',
                            'h' => 260,
                            'img' => asset('images/portfolio/birthday/alineas-birthday-010.webp'),
                            'gallery' => [
                                asset('images/portfolio/birthday/alineas-birthday-001.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-002.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-003.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-004.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-005.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-006.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-007.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-008.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-009.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-010.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-011.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-012.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-013.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-014.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-015.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-016.webp'),
                                asset('images/portfolio/birthday/alineas-birthday-017.webp')
                            ]
                        ],
                        [
                            'cat' => 'School',
                            'label' => 'Graduation Indoor',
                            'title' => 'Graduation Indoor',
                            'h' => 300,
                            'img' => asset('images/portfolio/graduation/alineas-graduation-006.webp'),
                            'gallery' => [
                                asset('images/portfolio/graduation/alineas-graduation-001.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-002.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-003.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-004.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-005.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-006.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-007.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-008.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-009.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-010.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-011.webp')
                                // asset('images/portfolio/graduation/alineas-graduation-012.webp')
                            ]
                        ],
                        [
                            'cat' => 'School',
                            'label' => 'Graduation Outdoor',
                            'title' => 'Graduation Outdoor',
                            'h' => 280,
                            'img' => asset('images/portfolio/graduation/alineas-graduation-outdoor-001.webp'),
                            'gallery' => [
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-001.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-002.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-003.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-004.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-005.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-006.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-007.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-008.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-009.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-010.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-011.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-012.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-013.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-014.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-015.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-016.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-017.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-018.webp'),
                                asset('images/portfolio/graduation/alineas-graduation-outdoor-019.webp')
                            ]
                        ],
                        [
                            'cat' => 'Portrait',
                            'label' => 'Maternity',
                            'title' => 'The Maternity',
                            'h' => 320,
                            'img' => asset('images/portfolio/maternity/alineas-maternity-004.webp'),
                            'gallery' => [
                                asset('images/portfolio/maternity/alineas-maternity-001.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-002.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-003.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-004.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-005.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-006.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-007.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-008.webp'),
                                // asset('images/portfolio/maternity/alineas-maternity-009.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-010.webp'),
                                // asset('images/portfolio/maternity/alineas-maternity-011.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-012.webp'),
                                // asset('images/portfolio/maternity/alineas-maternity-013.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-014.webp'),
                                // asset('images/portfolio/maternity/alineas-maternity-015.webp'),
                                // asset('images/portfolio/maternity/alineas-maternity-016.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-017.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-018.webp'),
                                asset('images/portfolio/maternity/alineas-maternity-019.webp')
                            ]
                        ],
                        [
                            'cat' => 'Wedding',
                            'label' => 'Goes to KUA',
                            'title' => 'Goes to KUA',
                            'h' => 280,
                            'img' => asset('images/portfolio/goestokua/alineas-goestokua-003.webp'),
                            'gallery' => [
                                asset('images/portfolio/goestokua/alineas-goestokua-001.webp'),
                                asset('images/portfolio/goestokua/alineas-goestokua-002.webp'),
                                asset('images/portfolio/goestokua/alineas-goestokua-003.webp')
                            ]
                        ],
                        [
                            'cat' => 'Wedding',
                            'label' => 'Prewedding',
                            'title' => 'Prewedding Premium',
                            'h' => 280,
                            'img' => asset('images/portfolio/prewedding/alineas-prewedding-004.webp'),
                            'gallery' => [
                                asset('images/portfolio/prewedding/alineas-prewedding-001.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-002.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-003.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-004.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-005.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-006.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-007.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-008.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-009.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-010.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-011.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-012.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-013.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-014.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-015.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-016.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-017.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-018.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-019.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-020.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-001.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-002.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-003.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-004.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-005.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-006.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-007.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-008.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-009.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-010.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-011.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-012.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-013.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-014.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-015.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-016.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-017.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-018.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-019.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-020.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-021.webp'),
                                asset('images/portfolio/prewedding/alineas-prewedding-new-022.webp')
                            ]
                        ],
                        [
                            'cat' => 'Photobooth',
                            'label' => 'Photobooth',
                            'title' => 'The Photobooth',
                            'h' => 280,
                            'img' => asset('images/portfolio/photobooth/alineas-photobooth-008.webp'),
                            'gallery' => [
                                asset('images/portfolio/photobooth/alineas-photobooth-001.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-002.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-003.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-004.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-005.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-006.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-007.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-008.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-009.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-010.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-011.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-012.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-013.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-014.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-015.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-016.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-017.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-018.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-019.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-020.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-021.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-022.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-023.webp'),
                                asset('images/portfolio/photobooth/alineas-photobooth-024.webp')
                            ]
                        ],
                        [
                            'cat' => 'Photobox',
                            'label' => 'Photobox',
                            'title' => 'The Photobox',
                            'h' => 280,
                            'img' => asset('images/portfolio/photobox/alineas-photobox-020.webp'),
                            'gallery' => [
                                asset('images/portfolio/photobox/alineas-photobox-001.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-002.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-003.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-004.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-005.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-006.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-007.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-008.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-009.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-010.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-011.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-012.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-013.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-014.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-015.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-016.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-017.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-018.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-019.webp'),
                                asset('images/portfolio/photobox/alineas-photobox-020.webp')
                            ]
                        ],
                        [
                            'cat' => 'Automotive',
                            'label' => 'Automotive',
                            'title' => 'The Automotive',
                            'h' => 260,
                            'img' => asset('images/portfolio/automotive/alineas-automotive-021.webp'),
                            'gallery' => [
                                asset('images/portfolio/automotive/alineas-automotive-001.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-002.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-003.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-004.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-005.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-006.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-007.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-008.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-009.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-010.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-011.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-012.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-013.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-014.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-015.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-016.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-017.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-018.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-019.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-020.webp'),
                                asset('images/portfolio/automotive/alineas-automotive-021.webp')
                            ]
                        ],
                        [
                            'cat' => 'School',
                            'label' => 'School',
                            'title' => 'The School',
                            'h' => 280,
                            'img' => asset('images/portfolio/school/alineas-school-003.webp'),
                            'gallery' => [
                                asset('images/portfolio/school/alineas-school-001.webp'),
                                asset('images/portfolio/school/alineas-school-002.webp'),
                                asset('images/portfolio/school/alineas-school-003.webp'),
                                asset('images/portfolio/school/alineas-school-004.webp'),
                                asset('images/portfolio/school/alineas-school-005.webp'),
                                asset('images/portfolio/school/alineas-school-006.webp'),
                                asset('images/portfolio/school/alineas-school-007.webp'),
                                asset('images/portfolio/school/alineas-school-008.webp'),
                                asset('images/portfolio/school/alineas-school-009.webp'),
                                asset('images/portfolio/school/alineas-school-010.webp'),
                                asset('images/portfolio/school/alineas-school-011.webp'),
                                asset('images/portfolio/school/alineas-school-012.webp'),
                                asset('images/portfolio/school/alineas-school-013.webp'),
                                asset('images/portfolio/school/alineas-school-014.webp'),
                                asset('images/portfolio/school/alineas-school-015.webp'),
                                asset('images/portfolio/school/alineas-school-016.webp')
                            ]
                        ],
                        [
                            'cat' => 'Wedding',
                            'label' => 'Wedding',
                            'title' => 'The Wedding',
                            'h' => 300,
                            'img' => asset('images/portfolio/wedding/alineas-wedding-001.webp'),
                            'gallery' => [
                                asset('images/portfolio/wedding/alineas-wedding-001.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-002.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-003.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-004.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-005.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-006.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-007.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-008.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-009.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-010.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-011.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-012.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-013.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-014.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-015.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-016.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-017.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-018.webp'),
                                asset('images/portfolio/wedding/alineas-wedding-019.webp')
                            ]
                        ],
                        [
                            'cat' => 'Product',
                            'label' => 'Product',
                            'title' => 'Fashion & Product',
                            'h' => 260,
                            'img' => asset('images/portfolio/product/alineas-product-001.webp'),
                            'gallery' => [
                                asset('images/portfolio/product/alineas-product-001.webp'),
                                asset('images/portfolio/product/alineas-product-002.webp'),
                                asset('images/portfolio/product/alineas-product-003.webp'),
                                asset('images/portfolio/product/alineas-product-004.webp'),
                                asset('images/portfolio/product/alineas-product-005.webp'),
                                asset('images/portfolio/product/alineas-product-006.webp'),
                                asset('images/portfolio/product/alineas-product-007.webp'),
                                asset('images/portfolio/product/alineas-product-008.webp'),
                                asset('images/portfolio/product/alineas-product-009.webp'),
                                asset('images/portfolio/product/alineas-product-010.webp'),
                                asset('images/portfolio/product/alineas-product-011.webp'),
                                asset('images/portfolio/product/alineas-product-012.webp'),
                                asset('images/portfolio/product/alineas-product-013.webp'),
                                asset('images/portfolio/product/alineas-product-014.webp'),
                                asset('images/portfolio/product/alineas-product-015.webp'),
                                asset('images/portfolio/product/alineas-product-016.webp'),
                                asset('images/portfolio/product/alineas-product-017.webp'),
                                asset('images/portfolio/product/alineas-product-018.webp')
                            ]
                        ],
                        ['cat' => 'Event', 'label' => 'Photobooth', 'title' => 'Photobooth Experience', 'h' => 250, 'img' => asset('images/placeholders/photobooth.svg')],
                    ];
                @endphp

                {{-- 1. COVER ITEMS (Untuk mode 'All') --}}
                @foreach($portfolioItems as $i => $item)
                    @if(isset($item['gallery']))
                        <div class="masonry-item portfolio-item is-cover group cursor-pointer reveal delay-{{ min(($i % 5) * 100, 400) }}"
                            data-label="{{ $item['label'] }}" onclick='openLightbox(@json($item["gallery"]))'>
                            <div class="relative overflow-hidden rounded-xl bg-gray-200 animate-pulse" style="height:{{ $item['h'] }}px;">
                                <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" loading="lazy"
                                    onload="this.parentElement.classList.remove('animate-pulse', 'bg-gray-200'); this.classList.remove('opacity-0', 'scale-110');"
                                    class="opacity-0 scale-110 w-full h-full object-cover group-hover:scale-105 transition-all duration-700 ease-out">

                                @if(!empty($item['isVideo']))
                                    <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
                                        <div
                                            class="w-10 h-10 rounded-full bg-black/55 backdrop-blur-md flex items-center justify-center border border-white/20 group-hover:scale-110 group-hover:bg-red-600 group-hover:border-red-600 transition-all duration-300">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                @endif

                                <div
                                    class="pi-overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-4 z-20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <span class="text-red-400 text-[10px] font-bold tracking-widest uppercase mb-1 block">{{ $item['label'] }}</span>
                                    <h3 class="text-white text-lg font-semibold leading-snug">{{ $item['title'] }}</h3>
                                    <p class="text-white/70 text-xs mt-1">{{ count($item['gallery']) }} {{ !empty($item['isVideo']) ? 'Videos' : 'Photos' }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

                {{-- 2. INDIVIDUAL ITEMS (Untuk mode kategori spesifik) --}}
                @foreach($portfolioItems as $item)
                    @if(isset($item['gallery']))
                        @foreach($item['gallery'] as $imgIndex => $galleryImg)
                            @php 
                                                                                                                                                                                                $h = [240, 280, 320, 360, 400][array_rand([240, 280, 320, 360, 400])];
                                $displayImg = $galleryImg;
                                $isIndividualVideo = false;
                                if (str_contains($galleryImg, 'youtube.com') || str_contains($galleryImg, 'youtu.be')) {
                                    $isIndividualVideo = true;
                                    $videoId = '';
                                    if (str_contains($galleryImg, 'watch?v=')) {
                                        $videoId = explode('&', explode('watch?v=', $galleryImg)[1])[0];
                                    } elseif (str_contains($galleryImg, 'youtu.be/')) {
                                        $videoId = explode('?', explode('youtu.be/', $galleryImg)[1])[0];
                                    }
                                    if ($videoId) {
                                        $displayImg = 'https://img.youtube.com/vi/' . $videoId . '/maxresdefault.jpg';
                                    }
                                }
                            @endphp
                            <div class="masonry-item portfolio-item is-individual hidden-item group cursor-pointer"
                                data-label="{{ $item['label'] }}" onclick='openLightbox(@json($item["gallery"]), {{ $imgIndex }})'>
                                <div class="relative overflow-hidden rounded-xl bg-gray-200 animate-pulse" style="height:{{ $h }}px;">
                                    <img src="{{ $displayImg }}" loading="lazy" 
                                        onload="this.parentElement.classList.remove('animate-pulse', 'bg-gray-200'); this.classList.remove('opacity-0', 'scale-110');"
                                        class="opacity-0 scale-110 w-full h-full object-cover group-hover:scale-105 transition-all duration-700 ease-out">
                                    <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    @if($isIndividualVideo)
                                        <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
                                            <div class="w-10 h-10 rounded-full bg-black/55 backdrop-blur-md flex items-center justify-center border border-white/20 group-hover:scale-110 group-hover:bg-red-600 group-hover:border-red-600 transition-all duration-300">
                                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endforeach
            </div>

            <div class="mt-12 text-center" x-show="showLoadMore" x-cloak>
                <button @click="loadMore()"
                    class="inline-flex items-center gap-2 text-sm font-semibold text-gray-600 hover:text-red-600 border border-gray-200 hover:border-red-600 px-6 py-2.5 rounded-full transition-all">
                    Tampilkan Lebih Banyak
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>

        </div>
    </section>

    <div class="warm-divider"></div>


    {{-- ============================================================
    SERVICES
    ============================================================ --}}
    <section id="services" class="py-24 md:py-32 bg-[#faf9f7]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">

            <div class="reveal text-center mb-14">
                <span class="text-red-600 text-xs font-semibold tracking-widest uppercase">Layanan Kami</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-3">Keahlian Visual Kami
                </h2>
                <p class="text-gray-600 text-sm mt-3 max-w-sm mx-auto leading-relaxed">Dari momen intim personal hingga
                    dokumentasi skala besar, kami memberikan dedikasi penuh di setiap bidikan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                @php
                    $services = [
                        [
                            'delay' => 0,
                            'badge' => 'Populer',
                            'title' => 'Prewedding & Wedding',
                            'desc' => 'Dokumentasi lengkap momen bahagia Anda, mencakup Photo Shoot Wedding, Cinematic Wedding, hingga sesi Prewedding elegan.',
                            'images' => [asset('images/portfolio/prewedding/alineas-prewedding-004.webp'), asset('images/portfolio/prewedding/alineas-prewedding-014.webp'), asset('images/portfolio/prewedding/alineas-prewedding-017.webp'), asset('images/portfolio/prewedding/alineas-prewedding-010.webp'), asset('images/portfolio/prewedding/alineas-prewedding-002.webp'), asset('images/portfolio/prewedding/alineas-prewedding-015.webp')],
                            'wa_text' => 'Halo Admin Alineas, saya ingin berdiskusi mengenai dokumentasi Prewedding atau Wedding. Bisa minta informasi detail paket dan harganya?'
                        ],
                        [
                            'delay' => 100,
                            'badge' => null,
                            'title' => 'Portrait & Personal',
                            'desc' => 'Sesi studio profesional untuk Family, Group, Birthday, Graduation, dan Maternity yang diabadikan dengan sempurna.',
                            'images' => [asset('images/portfolio/exclusive/alineas-exclusive-002.webp'), asset('images/portfolio/exclusive/alineas-exclusive-006.webp'), asset('images/portfolio/maternity/alineas-maternity-008.webp'), asset('images/portfolio/maternity/alineas-maternity-019.webp'), asset('images/portfolio/exclusive/alineas-exclusive-005.webp'), asset('images/portfolio/exclusive/alineas-exclusive-008.webp')],
                            'wa_text' => 'Halo Admin Alineas, saya tertarik untuk sesi foto Portrait/Personal. Boleh tahu detail paketnya?'
                        ],
                        [
                            'delay' => 200,
                            'badge' => null,
                            'title' => 'Event Coverage',
                            'desc' => 'Dokumentasi event komprehensif, menangkap setiap momen penting dan atmosfer dari acara Anda secara dinamis.',
                            'images' => [asset('images/portfolio/automotive/alineas-automotive-014.webp'), asset('images/portfolio/event/alineas-event-009.webp'), asset('images/portfolio/event/alineas-event-005.webp'), asset('images/portfolio/event/alineas-event-011.webp'), asset('images/portfolio/event/alineas-event-013.webp'), asset('images/portfolio/event/alineas-event-015.webp')],
                            'wa_text' => 'Halo Admin Alineas, saya butuh jasa dokumentasi untuk Event/Acara. Bagaimana sistem kerjanya?'
                        ],
                        [
                            'delay' => 300,
                            'badge' => null,
                            'title' => 'School & Campus',
                            'desc' => 'Kreativitas tanpa batas untuk pembuatan Video Angkatan, Photo Angkatan, dan penyusunan buku kenangan (Yearbook).',
                            'images' => [asset('images/portfolio/school/alineas-school-003.webp'), asset('images/portfolio/school/alineas-school-015.webp'), asset('images/portfolio/school/alineas-school-005.webp'), asset('images/portfolio/school/alineas-school-009.webp'), asset('images/portfolio/graduation/alineas-graduation-006.webp'), asset('images/portfolio/graduation/alineas-graduation-003.webp')],
                            'wa_text' => 'Halo Admin Alineas, saya ingin menanyakan perihal pembuatan Video Angkatan atau Yearbook.'
                        ],
                        [
                            'delay' => 400,
                            'badge' => null,
                            'title' => 'Corporate Profile',
                            'desc' => 'Produksi Company Profile berkualitas tinggi untuk memperkuat citra profesional dan kredibilitas bisnis Anda.',
                            'images' => [asset('images/portfolio/corporate/alineas-corporate-001.webp'), asset('images/portfolio/corporate/alineas-corporate-002.webp'), asset('images/portfolio/corporate/alineas-corporate-003.webp')],
                            'wa_text' => 'Halo Admin Alineas, saya ingin berdiskusi tentang pembuatan Company Profile untuk perusahaan.'
                        ],
                        [
                            'delay' => 500,
                            'badge' => 'Tren',
                            'title' => 'Fun & Experience',
                            'desc' => 'Hadirkan keseruan lewat layanan Self Photo, instalasi Photobooth event, hingga sistem Photobox interaktif.',
                            'images' => [asset('images/portfolio/photobox/alineas-photobox-009.webp'), asset('images/portfolio/photobox/alineas-photobox-019.webp'), asset('images/portfolio/photobox/alineas-photobox-014.webp'), asset('images/portfolio/photobox/alineas-photobox-006.webp'), asset('images/portfolio/photobox/alineas-photobox-016.webp'), asset('images/portfolio/photobox/alineas-photobox-012.webp')],
                            'wa_text' => 'Halo Admin Alineas, saya tertarik dengan layanan Photobooth/Self Photo. Boleh minta detail harganya?'
                        ],
                    ];
                @endphp

                @foreach($services as $svc)
                    <div x-data="{ currentIdx: 0 }" 
                         @if(count($svc['images']) > 1)
                             x-init="setTimeout(() => setInterval(() => { currentIdx = (currentIdx + 1) % {{ count($svc['images']) }} }, 3500), {{ $svc['delay'] * 3 }})"
                         @endif
                         class="group relative aspect-square rounded-[1.125rem] overflow-hidden cursor-pointer shadow-sm hover:shadow-2xl transition-all duration-500">

                        {{-- Background Image Slideshow --}}
                        <div class="absolute inset-0 w-full h-full bg-gray-100">
                            @foreach($svc['images'] as $idx => $img)
                                <img src="{{ $img }}" alt="{{ $svc['title'] }} {{ $idx + 1 }}"
                                    x-show="currentIdx === {{ $idx }}" 
                                    x-transition.opacity.duration.1000ms
                                    @if($idx !== 0) x-cloak style="display: none;" @endif
                                    class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                            @endforeach
                        </div>

                        {{-- Gradient Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-95 lg:opacity-80 lg:group-hover:opacity-95 transition-opacity duration-500 z-10"></div>

                        {{-- Badge --}}
                        @if($svc['badge'])
                            <span class="absolute top-5 left-5 bg-red-600 text-white text-[10px] font-bold tracking-widest uppercase px-3.5 py-1.5 rounded-full z-20 shadow-md">
                                {{ $svc['badge'] }}
                            </span>
                        @endif

                        {{-- Content --}}
                        <div class="absolute inset-0 flex flex-col justify-end p-6 md:p-8 z-20">
                            {{-- Title --}}
                            <h3 class="font-display text-2xl font-bold text-white mb-2 -translate-y-2 lg:translate-y-0 lg:group-hover:-translate-y-4 transition-transform duration-500">{{ $svc['title'] }}</h3>

                            {{-- Hidden Content that reveals on hover on desktop, always visible on mobile --}}
                            <div class="overflow-hidden max-h-60 lg:max-h-0 lg:group-hover:max-h-60 opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-all duration-700 ease-in-out transform translate-y-0 lg:translate-y-4 lg:group-hover:translate-y-0">
                                <p class="text-white/80 text-sm leading-relaxed mb-5">{{ $svc['desc'] }}</p>

                                <a href="https://wa.me/6285213385280?text={{ urlencode($svc['wa_text']) }}" target="_blank"
                                    class="inline-flex items-center justify-center gap-2 w-full bg-white text-gray-900 text-sm font-bold px-5 py-3.5 rounded-xl hover:bg-red-600 hover:text-white transition-colors duration-300 shadow-lg">
                                    Diskusikan Kebutuhan
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- CTA Card --}}
                <div
                    class="reveal md:col-span-2 lg:col-span-3 bg-red-600 rounded-[1.125rem] p-8 md:p-12 flex flex-col md:flex-row items-start md:items-center justify-between relative overflow-hidden min-h-[300px]">
                    <div class="absolute -top-8 -right-8 w-40 h-40 rounded-full bg-white/5"></div>
                    <div class="absolute -bottom-10 -left-10 w-48 h-48 rounded-full bg-black/10"></div>
                    <div class="relative max-w-lg mb-8 md:mb-0">
                        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Siap Berkolaborasi?</h3>
                        <p class="text-red-100 text-base leading-relaxed">Konsultasi gratis, langsung diskusikan
                            kebutuhan visual Anda bersama kami tanpa komitmen apapun.</p>
                    </div>
                    <a href="https://wa.me/6285213385280" target="_blank"
                        class="relative inline-flex flex-shrink-0 items-center gap-2 bg-white text-red-600 text-base font-semibold px-8 py-4 rounded-full hover:bg-red-50 transition-all hover:scale-105 shadow-xl shadow-black/10">
                        Hubungi Kami
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <div class="warm-divider"></div>


    {{-- ============================================================
    REVIEWS
    ============================================================ --}}
    <section id="reviews" class="py-24 md:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="reveal text-center mb-12">
                <span class="text-red-600 text-xs font-semibold tracking-widest uppercase">Testimoni</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-3">Kata Mereka</h2>
                <p class="text-gray-600 text-sm mt-3">Klien kami menitipkan momen berharga mereka dan kami jaga
                    kepercayaan itu.</p>
            </div>
            <div class="reveal max-w-6xl mx-auto mt-10">
                @php
                    $testimonials = [
                        [
                            'name' => 'Rangga Mukti',
                            'role' => 'Google Maps Review',
                            'review' => 'Kalau sore nyaman banget sih tempatnya, dan photonya bagus juga, rekomen sih',
                            'stars' => 5
                        ],
                        [
                            'name' => 'Naufal Maulana Shabri',
                            'role' => 'Google Maps Review',
                            'review' => 'tempatnya nyaman, ruangannya full ac semua, bikin betah kalo lama lama di sini🤩',
                            'stars' => 5
                        ],
                        [
                            'name' => 'fitrah fardiansyah',
                            'role' => 'Google Maps Review',
                            'review' => 'G nyangka Murah, hasil bagus lagi. recomended lah',
                            'stars' => 5
                        ],
                        [
                            'name' => 'AZRIL AKBAR AGUSTIYANTI',
                            'role' => 'Google Maps Review',
                            'review' => 'oke banget diarahin diatur gaya & posisi nya jadinya bagus gak rugi kesini',
                            'stars' => 5
                        ],
                        [
                            'name' => 'avep grind',
                            'role' => 'Google Maps Review',
                            'review' => 'Hasilnya bagus banget, studionya aestetik',
                            'stars' => 5
                        ],
                        [
                            'name' => 'Tiara Maharani',
                            'role' => 'Google Maps Review',
                            'review' => 'Studio fotonya nyaman dan estetik banget! Hasil fotonya jernih.',
                            'stars' => 5
                        ]
                    ];
                @endphp

                {{-- GRID TESTIMONIAL 3x3 --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($testimonials as $index => $testi)
                        {{-- Authentic Google Maps Review Card Design --}}
                        <div class="bg-white border border-gray-200 rounded-[20px] p-6 md:p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-all duration-300 w-full text-left h-full flex flex-col">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center overflow-hidden flex-shrink-0">
                                        <svg class="w-6 h-6 text-gray-400 mt-1.5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-900 text-sm md:text-base tracking-tight leading-tight">{{ $testi['name'] }}</h4>
                                        <div class="flex items-center gap-1.5 text-xs text-gray-500 mt-1 font-medium">
                                            <svg viewBox="0 0 24 24" width="12" height="12" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.75h3.57c2.08-1.92 3.28-4.74 3.28-8.07z" fill="#4285F4"/>
                                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.75c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                                            </svg>
                                            <span>Ulasan Google</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-0.5 mb-3">
                                @for($i = 0; $i < $testi['stars']; $i++)
                                    <svg class="w-4 h-4" style="color: #fbbc04;" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-gray-800 text-sm leading-relaxed flex-grow">
                                {{ $testi['review'] }}
                            </p>
                        </div>
                    @endforeach
                </div>       </div>
        </div>
    </section>

    <div class="warm-divider"></div>

    {{-- ============================================================
    INSTAGRAM FEED
    ============================================================ --}}
    <section id="instagram" class="py-20 md:py-28 bg-gray-50 border-y border-gray-100 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="reveal text-center mb-10 md:mb-14">
                <span class="text-red-600 text-xs font-semibold tracking-widest uppercase">@alineas.studio</span>
                <h2
                    class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-3 flex items-center justify-center gap-3">
                    <svg class="w-8 h-8 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                    </svg>
                    Ikuti Cerita Kami
                </h2>
                <p class="text-gray-600 text-sm mt-3">Karya terbaru, behind the scenes, dan promo eksklusif menanti
                    Anda.</p>
            </div>

            <div class="reveal relative max-w-6xl mx-auto">
                {{-- NATIVE INSTAGRAM EMBEDS --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 items-start">
                    @php
                        $igUrls = [
                            'https://www.instagram.com/p/DXGgWbKEeYT/',
                            'https://www.instagram.com/p/DaXIANQkQnY/',
                            'https://www.instagram.com/p/DakLxMBEXg-/',
                            'https://www.instagram.com/p/DVorcq2knpN/',
                            'https://www.instagram.com/p/DQJK4cfETnY/',
                            'https://www.instagram.com/p/DZwTfEtEd9e/'
                        ];
                    @endphp
                    @foreach($igUrls as $url)
                        <div class="w-full flex justify-center">
                            <blockquote class="instagram-media" data-instgrm-permalink="{{ $url }}?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style="background:#FFF; border:0; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.05),0 1px 2px rgba(0,0,0,0.02); margin: 0; min-width:100%; padding:0; width:100%;">
                                <div style="padding:16px;"> 
                                    <a href="{{ $url }}" style="background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
                                        <div style="display: flex; flex-direction: row; align-items: center;">
                                            <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                <div style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                                <div style="background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                            </div>
                                        </div>
                                        <div style="padding: 19% 0;"></div>
                                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;">
                                            <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg>
                                        </div>
                                        <div style="padding-top: 8px;">
                                            <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div>
                                        </div>
                                    </a>
                                </div>
                            </blockquote>
                        </div>
                    @endforeach
                </div>
                <script async src="//www.instagram.com/embed.js"></script>

                <div class="text-center mt-10">
                    <a href="https://www.instagram.com/alineas.studio" target="_blank"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-gray-600 hover:text-pink-600 border border-gray-200 hover:border-pink-600 px-6 py-2.5 rounded-full transition-all bg-white shadow-sm hover:shadow-md">
                        Kunjungi Instagram Kami
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="alineas-checkerboard"></div>


    {{-- ============================================================
    CONTACT & LOCATION
    ============================================================ --}}
    <section id="contact" class="py-24 md:py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                <div class="reveal-left">
                    <span class="text-red-600 text-xs font-semibold tracking-widest uppercase">Lokasi Kami</span>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-6">Kunjungi Studio Kami
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-8 text-sm md:text-base">
                        Mari diskusikan konsep visual Anda secara langsung di studio kami. Kami siap menyambut Anda
                        dengan hangat untuk merencanakan setiap detail mahakarya Anda.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Alamat Studio</h4>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    Jl. Kepuh, Citarik, Kec. Tirtamulya,<br>
                                    Karawang, Jawa Barat 41372
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-1">Jam Operasional</h4>
                                <p class="text-sm text-gray-600">Setiap Hari: 09.00 - 21.00 WIB</p>
                                <p class="text-xs text-gray-400 mt-0.5">*Kunjungan di luar jam operasional harap RSVP
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <a href="https://wa.me/6285213385280" target="_blank"
                            class="inline-flex items-center gap-2 bg-gray-900 text-white text-sm font-semibold px-6 py-3.5 rounded-full hover:bg-gray-800 transition-all hover:-translate-y-0.5 shadow-xl shadow-gray-900/20">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Hubungi via WhatsApp
                        </a>
                    </div>
                </div>

                <div class="reveal-right">
                    <div
                        class="w-full aspect-[4/3] md:aspect-square bg-gray-100 rounded-2xl overflow-hidden border border-gray-200 shadow-xl relative group">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2724997412774!2d107.4446114!3d-6.3573493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977005e65a0fd%3A0x951ebb93fda8d89d!2sALINEAS%20PHOTO%20STUDIO!5e0!3m2!1sid!2sid!4v1749999999999!5m2!1sid!2sid"
                            class="w-full h-full grayscale group-hover:grayscale-0 transition-all duration-700"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <div class="absolute inset-0 pointer-events-none ring-1 ring-inset ring-black/10 rounded-2xl">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="alineas-checkerboard"></div>
</x-frontend-layout>
