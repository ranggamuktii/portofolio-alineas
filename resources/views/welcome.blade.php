<x-frontend-layout>

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


    {{-- ============================================================
    MARQUEE
    ============================================================ --}}
    <div class="py-4 border-y border-gray-100 bg-white overflow-hidden">
        <div class="marquee-track select-none">
            @php $tickers = ['Prewedding', 'Wedding', 'Graduation', 'Portrait', 'Product', 'Video Angkatan', 'Event Aftermovie', 'Company Profile', 'Fashion', 'Corporate']; @endphp
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
    <section id="about" class="py-24 md:py-32 bg-[#faf9f7]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                {{-- Placeholder image --}}
                <div class="reveal-left relative">
                    <div class="about-img-wrap aspect-[4/5]">
                        {{-- PLACEHOLDER: ganti dengan foto studio --}}
                        <div class="w-full h-full bg-gray-100 flex flex-col items-center justify-center gap-3">
                            <svg class="w-14 h-14 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-300 text-xs font-medium tracking-wide">Foto Studio</span>
                        </div>
                    </div>

                    <div
                        class="absolute -bottom-5 -right-3 md:-right-6 bg-red-600 rounded-xl p-5 shadow-xl shadow-red-600/20">
                        <div class="font-display text-3xl font-bold text-white">5+</div>
                        <div class="text-red-100 text-xs mt-1">Years Active</div>
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
                        menghasilkan karya terbaik — bukan sekadar foto, tapi sebuah cerita visual.
                    </p>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach (['Peralatan Profesional', 'Editing Premium', 'Pengiriman Tepat Waktu', 'Konsultasi Gratis'] as $f)
                            <div class="flex items-center gap-2.5 text-sm text-gray-700">
                                <span class="w-5 h-5 rounded-md bg-red-50 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3 h-3 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                {{ $f }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="warm-divider"></div>


    {{-- ============================================================
    PORTFOLIO (Featured + Masonry)
    Semua gambar = placeholder abu
    ============================================================ --}}
    <section id="portfolio" class="py-24 md:py-32 bg-white" x-data="{
        active: 'All',
        categories: ['All', 'Wedding', 'Portrait', 'Event', 'Product', 'Video'],
        setActive(cat) {
            this.active = cat;
            document.querySelectorAll('.portfolio-item').forEach(el => {
                el.classList.toggle('hidden-item', cat !== 'All' && !(el.dataset.cat || '').includes(cat));
            });
        }
    }">

        <div class="max-w-7xl mx-auto px-6 lg:px-12">

            <div class="reveal flex flex-col sm:flex-row sm:items-end justify-between gap-5 mb-12">
                <div>
                    <span class="text-red-600 text-xs font-semibold tracking-widest uppercase">Portfolio</span>
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-2">Karya Terbaik Kami</h2>
                </div>
                <div class="flex flex-wrap gap-2">
                    <template x-for="cat in categories" :key="cat">
                        <button @click="setActive(cat)"
                            :class="active === cat ? 'bg-gray-900 text-white border-gray-900' : 'bg-transparent text-gray-400 border-gray-200 hover:border-gray-400 hover:text-gray-700'"
                            class="border text-[11px] font-semibold tracking-widest uppercase px-4 py-2 rounded-full transition-all duration-250"
                            x-text="cat">
                        </button>
                    </template>
                </div>
            </div>

            {{-- Featured row: placeholder --}}
            @php
                function imgPlaceholder(string $label, string $extraClass = ''): string
                {
                    return '<div class="w-full h-full bg-gray-100 flex flex-col items-center justify-center gap-2 ' . $extraClass . '">'
                        . '<svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>'
                        . '<span class="text-gray-300 text-xs font-medium">' . $label . '</span>'
                        . '</div>';
                }
            @endphp

            <div class="reveal grid grid-cols-1 md:grid-cols-3 gap-3 mb-3">

                {{-- Large featured --}}
                <div class="portfolio-featured md:col-span-2 cursor-zoom-in group h-64 md:h-[460px]" data-cat="Wedding">
                    <div class="w-full h-full bg-gray-100 flex flex-col items-center justify-center gap-2">
                        <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-gray-300 text-xs font-medium">Prewedding / Wedding</span>
                    </div>
                    <div
                        class="pf-overlay absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent flex flex-col justify-end p-5">
                        <span class="text-red-400 text-[10px] font-bold tracking-widest uppercase mb-1">Wedding</span>
                        <h3 class="text-white text-lg font-semibold">Classic Prewedding Session</h3>
                    </div>
                </div>

                {{-- Right 2 stacked --}}
                <div class="flex flex-col gap-3">
                    <div class="portfolio-featured cursor-zoom-in group flex-1 min-h-[130px] md:min-h-0"
                        data-cat="Portrait">
                        <div class="w-full h-full bg-gray-100 flex flex-col items-center justify-center gap-1.5">
                            <svg class="w-9 h-9 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-300 text-[11px] font-medium">Portrait</span>
                        </div>
                        <div
                            class="pf-overlay absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent flex flex-col justify-end p-3.5">
                            <span
                                class="text-red-400 text-[9px] font-bold tracking-widest uppercase mb-0.5">Portrait</span>
                            <h3 class="text-white text-sm font-semibold">Fashion Editorial</h3>
                        </div>
                    </div>
                    <div class="portfolio-featured cursor-zoom-in group flex-1 min-h-[130px] md:min-h-0"
                        data-cat="Product">
                        <div class="w-full h-full bg-gray-100 flex flex-col items-center justify-center gap-1.5">
                            <svg class="w-9 h-9 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-gray-300 text-[11px] font-medium">Product</span>
                        </div>
                        <div
                            class="pf-overlay absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent flex flex-col justify-end p-3.5">
                            <span
                                class="text-red-400 text-[9px] font-bold tracking-widest uppercase mb-0.5">Product</span>
                            <h3 class="text-white text-sm font-semibold">Cosmetics Campaign</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="masonry-grid">
                @php
                    $portfolioItems = [
                        ['cat' => 'Event', 'label' => 'Event', 'title' => 'Graduation Ceremony', 'h' => 230],
                        ['cat' => 'Wedding', 'label' => 'Wedding', 'title' => 'Outdoor Wedding', 'h' => 340],
                        ['cat' => 'Video', 'label' => 'Video', 'title' => 'Company Profile Video', 'h' => 250, 'isVideo' => true],
                        ['cat' => 'Product', 'label' => 'Product', 'title' => 'Food Photography', 'h' => 230],
                        ['cat' => 'Event', 'label' => 'Event', 'title' => 'Corporate Conference', 'h' => 310],
                        ['cat' => 'Portrait', 'label' => 'Portrait', 'title' => 'Family Portrait', 'h' => 250],
                        ['cat' => 'Video', 'label' => 'Video', 'title' => 'Video Angkatan (Tren)', 'h' => 270, 'isVideo' => true],
                        ['cat' => 'Product', 'label' => 'Product', 'title' => 'Fashion Product Shoot', 'h' => 330],
                        ['cat' => 'Event', 'label' => 'Event', 'title' => 'Birthday Celebration', 'h' => 230],
                        ['cat' => 'Video', 'label' => 'Video', 'title' => 'Wedding Cinematic', 'h' => 250, 'isVideo' => true],
                        ['cat' => 'Wedding', 'label' => 'Wedding', 'title' => 'Engagement Session', 'h' => 310],
                        ['cat' => 'Video', 'label' => 'Video', 'title' => 'Event Aftermovie', 'h' => 230, 'isVideo' => true],
                    ];
                @endphp

                @foreach($portfolioItems as $i => $item)
                    <div class="masonry-item portfolio-item group cursor-pointer reveal delay-{{ min(($i % 5) * 100, 400) }}"
                        data-cat="{{ $item['cat'] }}">
                        <div class="relative overflow-hidden rounded-xl" style="height:{{ $item['h'] }}px;">
                            <div
                                class="w-full h-full bg-gray-100 flex flex-col items-center justify-center gap-2 group-hover:bg-gray-200 transition-colors">
                                @if(!empty($item['isVideo']))
                                    <svg class="w-9 h-9 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                @else
                                    <svg class="w-9 h-9 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                @endif
                                <span class="text-gray-300 text-[11px] font-medium">{{ $item['label'] }}</span>
                            </div>
                            <div
                                class="pi-overlay absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent flex flex-col justify-end p-3.5">
                                <span
                                    class="text-red-400 text-[9px] font-bold tracking-widest uppercase mb-0.5">{{ $item['label'] }}</span>
                                <h3 class="text-white text-[13px] font-semibold leading-snug">{{ $item['title'] }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                <span class="text-red-600 text-xs font-semibold tracking-widest uppercase">Layanan</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-3">Apa yang Bisa Kami Lakukan
                </h2>
                <p class="text-gray-600 text-sm mt-3 max-w-sm mx-auto leading-relaxed">Dari momen personal hingga
                    kebutuhan komersial, semua kami handle dengan standar yang konsisten.</p>
            </div>

            <div class="services-grid">

                @php
                    $services = [
                        ['delay' => 0, 'badge' => 'Populer', 'title' => 'Prewedding & Wedding', 'desc' => 'Dokumentasi momen cinta Anda dengan sentuhan artistik yang elegan dan timeless.', 'icon' => 'photo'],
                        ['delay' => 100, 'badge' => 'Tren', 'title' => 'Videography & Cinema', 'desc' => 'Video cinematic untuk Wedding, Company Profile, Event, hingga Video Angkatan.', 'icon' => 'video'],
                        ['delay' => 200, 'badge' => null, 'title' => 'Portrait & Personal', 'desc' => 'Foto diri, keluarga, atau profil profesional dengan lighting studio terbaik.', 'icon' => 'photo'],
                        ['delay' => 300, 'badge' => null, 'title' => 'Graduation & Wisuda', 'desc' => 'Rayakan pencapaian akademis dengan sesi foto yang berkesan dan membanggakan.', 'icon' => 'photo'],
                        ['delay' => 400, 'badge' => null, 'title' => 'Event Coverage', 'desc' => 'Dokumentasi acara, seminar, konser, dan gathering secara profesional.', 'icon' => 'photo'],
                        ['delay' => 500, 'badge' => null, 'title' => 'Product & Commercial', 'desc' => 'Foto produk untuk e-commerce, katalog, dan kampanye iklan dengan hasil premium.', 'icon' => 'photo'],
                    ];
                @endphp

                @foreach($services as $svc)
                    <div class="reveal delay-{{ $svc['delay'] }} service-card">
                        <div class="sc-img relative h-48 bg-gray-100 flex flex-col items-center justify-center gap-2">
                            @if(isset($svc['icon']) && $svc['icon'] === 'video')
                                <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-gray-300 text-xs font-medium">Video Layanan</span>
                            @else
                                <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                <span class="text-gray-300 text-xs font-medium">Foto Layanan</span>
                            @endif
                            @if($svc['badge'])
                                <span class="absolute top-3 left-3 bg-red-600 text-white text-[10px] font-bold tracking-widest uppercase px-3 py-1 rounded-full">{{ $svc['badge'] }}</span>
                            @endif
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <h3 class="text-base font-semibold text-gray-900 mb-2">{{ $svc['title'] }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed flex-1">{{ $svc['desc'] }}</p>
                            <a href="https://wa.me/6285213385280" target="_blank"
                                class="mt-4 inline-flex items-center gap-1.5 text-sm font-semibold text-red-600 hover:text-red-700 transition-colors">
                                Tanya Sekarang
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach

                {{-- CTA Card --}}
                <div class="reveal md:col-span-2 lg:col-span-3 bg-red-600 rounded-[1.125rem] p-8 md:p-12 flex flex-col md:flex-row items-start md:items-center justify-between relative overflow-hidden min-h-[300px]">
                    <div class="absolute -top-8 -right-8 w-40 h-40 rounded-full bg-white/5"></div>
                    <div class="absolute -bottom-10 -left-10 w-48 h-48 rounded-full bg-black/10"></div>
                    <div class="relative max-w-lg mb-8 md:mb-0">
                        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Siap Berkolaborasi?</h3>
                        <p class="text-red-100 text-base leading-relaxed">Konsultasi gratis, langsung diskusikan kebutuhan visual Anda bersama kami tanpa komitmen apapun.</p>
                    </div>
                    <a href="https://wa.me/6285213385280" target="_blank"
                        class="relative inline-flex flex-shrink-0 items-center gap-2 bg-white text-red-600 text-base font-semibold px-8 py-4 rounded-full hover:bg-red-50 transition-all hover:scale-105 shadow-xl shadow-black/10">
                        Hubungi Kami
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
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
                <p class="text-gray-600 text-sm mt-3">Klien kami menitipkan momen berharga mereka — dan kami jaga
                    kepercayaan itu.</p>
            </div>
            <div class="reveal">
                <div class="transform scale-[0.90] sm:scale-100 origin-top overflow-hidden">
                    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                    <div class="elfsight-app-3f8acc35-fce7-478e-8145-226f9f636c9b" data-elfsight-app-lazy></div>
                </div>
            </div>
        </div>
    </section>


<div class="warm-divider"></div>


{{-- ============================================================
     CONTACT & LOCATION
============================================================ --}}
<section id="contact" class="py-24 md:py-32 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            
            <div class="reveal-left">
                <span class="text-red-600 text-xs font-semibold tracking-widest uppercase">Lokasi Kami</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-6">Kunjungi Studio Kami</h2>
                <p class="text-gray-600 leading-relaxed mb-8 text-sm md:text-base">
                    Mari diskusikan konsep visual Anda secara langsung di studio kami. Kami siap menyambut Anda dengan hangat untuk merencanakan setiap detail mahakarya Anda.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
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
                        <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Jam Operasional</h4>
                            <p class="text-sm text-gray-600">Setiap Hari: 09.00 - 21.00 WIB</p>
                            <p class="text-xs text-gray-400 mt-0.5">*Kunjungan di luar jam operasional harap RSVP</p>
                        </div>
                    </div>
                </div>

                <div class="mt-10">
                    <a href="https://wa.me/6285213385280" target="_blank"
                        class="inline-flex items-center gap-2 bg-gray-900 text-white text-sm font-semibold px-6 py-3.5 rounded-full hover:bg-gray-800 transition-all hover:-translate-y-0.5 shadow-xl shadow-gray-900/20">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Hubungi via WhatsApp
                    </a>
                </div>
            </div>

            <div class="reveal-right">
                <div class="w-full aspect-[4/3] md:aspect-square bg-gray-100 rounded-2xl overflow-hidden border border-gray-200 shadow-xl relative group">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2724997412774!2d107.4446114!3d-6.3573493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6977005e65a0fd%3A0x951ebb93fda8d89d!2sALINEAS%20PHOTO%20STUDIO!5e0!3m2!1sid!2sid!4v1749999999999!5m2!1sid!2sid" 
                        class="w-full h-full grayscale group-hover:grayscale-0 transition-all duration-700" 
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <div class="absolute inset-0 pointer-events-none ring-1 ring-inset ring-black/10 rounded-2xl"></div>
                </div>
            </div>
            
        </div>
    </div>
</section>

</x-frontend-layout>