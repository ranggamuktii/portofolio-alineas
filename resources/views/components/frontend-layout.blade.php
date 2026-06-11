<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title . ' | Alineas Studio' : 'Alineas Studio — Photography Studio Karawang' }}</title>
    <meta name="description"
        content="Alineas Studio, studio fotografi profesional di Karawang. Prewedding, wedding, portrait, graduation, product, dan event photography.">

    <link rel="icon" type="image/png" href="{{ asset('images/alineas-icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,700;0,900;1,700&display=swap"
        rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-[#faf9f7] text-[#1a1a1a] overflow-x-hidden">

    {{-- PAGE LOADER --}}
    <div id="page-loader">
        <div class="flex flex-col items-center gap-7">
            @if (file_exists(public_path('images/alineas-logo.png')))
                <img src="{{ asset('images/alineas-logo.png') }}" alt="Alineas Studio" class="h-10 w-auto opacity-75">
            @else
                <span class="text-2xl font-bold tracking-tight text-gray-900">ALINEAS<span
                        class="text-red-600">.</span></span>
            @endif
            <div class="flex flex-col items-center gap-3">
                <div class="loader-progress-track">
                    <div class="loader-progress-fill"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Cursor spotlight --}}
    <div id="cursor-spotlight"></div>

    @include('layouts.customer-navbar')

    <main>{{ $slot }}</main>

    @include('layouts.footer')

    {{-- LIGHTBOX --}}
    <div id="lightbox" class="fixed inset-0 z-[99999] bg-black/92 p-4 md:p-10"
        onclick="if(event.target===this || event.target.id==='lightbox-container')closeLightbox()">
        
        <button onclick="closeLightbox()"
            class="absolute top-5 right-5 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white/70 hover:text-white transition-all z-20">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <button onclick="prevLightbox(event)" class="absolute left-4 md:left-10 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white/70 hover:text-white transition-all z-20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
        </button>
        
        <button onclick="nextLightbox(event)" class="absolute right-4 md:right-10 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white/70 hover:text-white transition-all z-20">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
        </button>

        <div class="w-full h-full flex items-center justify-center select-none" id="lightbox-container">
            <img id="lightbox-img" src="" alt="Portfolio"
                class="max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl transition-opacity duration-200">
        </div>
    </div>

    <script>
        (function () {
            // Loader
            window.addEventListener('load', () => setTimeout(() => document.getElementById('page-loader').classList.add('out'), 1900));

            // Cursor
            const spot = document.getElementById('cursor-spotlight');
            document.addEventListener('mousemove', e => { spot.style.left = e.clientX + 'px'; spot.style.top = e.clientY + 'px'; });

            // Sticky nav
            const nav = document.getElementById('main-nav');
            window.addEventListener('scroll', () => nav.classList.toggle('scrolled', window.scrollY > 70), { passive: true });

            // Active nav
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            sections.forEach(s => new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting)
                        navLinks.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + entry.target.id));
                });
            }, { rootMargin: '-35% 0px -60% 0px' }).observe(s));

            // Scroll reveal
            const revealObs = new IntersectionObserver(entries => {
                entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('visible'); revealObs.unobserve(entry.target); } });
            }, { threshold: 0.07 });
            document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => revealObs.observe(el));

            // Count-up
            function countUp(el) {
                const target = parseInt(el.dataset.target, 10), suffix = el.dataset.suffix || '', dur = 1800, start = performance.now();
                const tick = now => {
                    const t = Math.min((now - start) / dur, 1), v = 1 - Math.pow(1 - t, 4);
                    el.textContent = Math.floor(v * target) + suffix;
                    if (t < 1) requestAnimationFrame(tick);
                };
                requestAnimationFrame(tick);
            }
            const cntObs = new IntersectionObserver(entries => {
                entries.forEach(e => { if (e.isIntersecting) { countUp(e.target); cntObs.unobserve(e.target); } });
            }, { threshold: 0.5 });
            document.querySelectorAll('[data-target]').forEach(el => cntObs.observe(el));

            // Parallax hero
            const heroBg = document.getElementById('hero-bg');
            if (heroBg) window.addEventListener('scroll', () => {
                heroBg.style.transform = `translateY(${window.scrollY * 0.35}px) scale(1.1)`;
            }, { passive: true });

            // Lightbox
            let lightboxImages = [];
            let currentLightboxIndex = 0;

            window.openLightbox = src => {
                const els = Array.from(document.querySelectorAll('[onclick^="openLightbox"]'))
                                 .filter(el => getComputedStyle(el).display !== 'none');
                
                lightboxImages = els.map(el => {
                    const match = el.getAttribute('onclick').match(/'([^']+)'/);
                    return match ? match[1] : null;
                }).filter(Boolean);

                currentLightboxIndex = lightboxImages.indexOf(src);
                if (currentLightboxIndex === -1) {
                    lightboxImages = [src];
                    currentLightboxIndex = 0;
                }

                updateLightboxImage();
                document.getElementById('lightbox').classList.add('active');
                document.body.style.overflow = 'hidden';
            };

            window.updateLightboxImage = () => {
                const img = document.getElementById('lightbox-img');
                img.style.opacity = '0';
                setTimeout(() => {
                    img.src = lightboxImages[currentLightboxIndex];
                    img.style.opacity = '1';
                }, 150);
            };

            window.prevLightbox = (e) => {
                if(e) e.stopPropagation();
                if(lightboxImages.length <= 1) return;
                currentLightboxIndex = (currentLightboxIndex - 1 + lightboxImages.length) % lightboxImages.length;
                updateLightboxImage();
            };

            window.nextLightbox = (e) => {
                if(e) e.stopPropagation();
                if(lightboxImages.length <= 1) return;
                currentLightboxIndex = (currentLightboxIndex + 1) % lightboxImages.length;
                updateLightboxImage();
            };

            window.closeLightbox = () => {
                document.getElementById('lightbox').classList.remove('active');
                document.body.style.overflow = '';
            };

            document.addEventListener('keydown', e => { 
                if (document.getElementById('lightbox').classList.contains('active')) {
                    if (e.key === 'Escape') closeLightbox(); 
                    if (e.key === 'ArrowLeft') prevLightbox();
                    if (e.key === 'ArrowRight') nextLightbox();
                }
            });
        })();
    </script>
</body>

</html>