<header id="main-nav" class="fixed top-0 left-0 right-0 z-50">
    <div x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex items-center justify-between h-20">

            <a href="/" class="relative z-10 flex-shrink-0">
                @if (file_exists(public_path('images/alineas-logo.png')))
                    <img src="{{ asset('images/alineas-logo.png') }}" alt="Alineas Studio" class="nav-logo h-8 w-auto transition-all duration-300">
                @else
                    <span class="nav-logo text-xl font-bold tracking-tight transition-colors duration-300">ALINEAS<span class="text-red-500">.</span></span>
                @endif
            </a>

            <nav class="hidden md:flex items-center gap-9">
                <a href="#hero"      class="nav-link text-sm font-medium transition-colors duration-250">Beranda</a>
                <a href="#about"     class="nav-link text-sm font-medium transition-colors duration-250">Tentang</a>
                <a href="#portfolio" class="nav-link text-sm font-medium transition-colors duration-250">Portfolio</a>
                <a href="#services"  class="nav-link text-sm font-medium transition-colors duration-250">Layanan</a>
                <a href="#contact"   class="nav-link text-sm font-medium transition-colors duration-250">Kontak</a>
            </nav>

            <div class="hidden md:flex">
                <a href="https://wa.me/6285213385280" target="_blank"
                    class="nav-cta text-sm font-semibold px-5 py-2.5 rounded-full transition-all duration-300">
                    Mari Berkolaborasi
                </a>
            </div>

            <button @click="open = !open" class="md:hidden relative z-10 w-8 h-8 flex flex-col justify-center items-center gap-1.5">
                <span :class="open ? 'rotate-45 translate-y-2' : ''" class="block w-5 h-0.5 nav-hamburger bg-current transition-all duration-300 rounded-full"></span>
                <span :class="open ? 'opacity-0' : ''" class="block w-5 h-0.5 nav-hamburger bg-current transition-all duration-300 rounded-full"></span>
                <span :class="open ? '-rotate-45 -translate-y-2' : ''" class="block w-5 h-0.5 nav-hamburger bg-current transition-all duration-300 rounded-full"></span>
            </button>
        </div>

        <div x-show="open"
            x-transition:enter="transition ease-out duration-250"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-180"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="md:hidden absolute inset-x-0 top-0 bg-white border-b border-gray-100 pt-20 pb-7 px-6 shadow-lg"
            style="display: none;">
            <nav class="flex flex-col gap-0.5">
                <a href="#hero"      @click="open = false" class="text-base font-medium text-gray-700 hover:text-gray-900 py-3 border-b border-gray-50 transition-colors">Beranda</a>
                <a href="#about"     @click="open = false" class="text-base font-medium text-gray-700 hover:text-gray-900 py-3 border-b border-gray-50 transition-colors">Tentang Kami</a>
                <a href="#portfolio" @click="open = false" class="text-base font-medium text-gray-700 hover:text-gray-900 py-3 border-b border-gray-50 transition-colors">Portfolio</a>
                <a href="#services"  @click="open = false" class="text-base font-medium text-gray-700 hover:text-gray-900 py-3 border-b border-gray-50 transition-colors">Layanan</a>
                <a href="#contact"   @click="open = false" class="text-base font-medium text-gray-700 hover:text-gray-900 py-3 transition-colors">Kontak</a>
                <a href="https://wa.me/6285213385280" target="_blank"
                    class="mt-4 flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-full transition-colors text-sm">
                    Mari Berkolaborasi
                </a>
            </nav>
        </div>
    </div>
</header>
