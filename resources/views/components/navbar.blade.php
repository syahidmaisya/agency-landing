<header id="site-header"
        class="sticky top-0 z-50 border-b border-transparent bg-white transition-all duration-300">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="group flex items-center gap-2.5">
            <div class="relative flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-600 to-cyan-500 shadow-lg shadow-indigo-500/25 transition-all duration-300 group-hover:scale-105 group-hover:shadow-indigo-500/50">
                <span class="text-xs font-bold text-white">SN</span>
            </div>
            <div class="flex flex-col leading-none">
                <span class="text-[15px] font-semibold tracking-tight text-slate-900 transition-colors duration-200 group-hover:text-indigo-600">{{ $brand ?? 'SB NET Studio' }}</span>
                <span class="mt-1 text-[11px] font-medium tracking-wide text-slate-500">Jasa Pembuatan Website</span>
            </div>
        </a>

        {{-- Nav Desktop --}}
        @php
            $navLinks = [
                ['label' => 'Beranda',    'route' => 'home',       'anchor' => ''],
                ['label' => 'Layanan',    'route' => 'layanan',    'anchor' => ''],
                ['label' => 'Portofolio', 'route' => 'portofolio', 'anchor' => ''],
                ['label' => 'FAQ',        'route' => 'faq',        'anchor' => ''],
            ];
        @endphp
        <nav class="hidden items-center gap-1 md:flex">
            @foreach($navLinks as $nav)
                @php
                    // Cek apakah route valid biar gak error
                    $active = Route::has($nav['route']) && request()->routeIs($nav['route']);
                    $href = Route::has($nav['route']) ? route($nav['route']) . $nav['anchor'] : url('/') . $nav['anchor'];
                @endphp
                <a href="{{ $href }}"
                   class="group relative rounded-lg px-3 py-2 text-sm font-medium transition-colors duration-200 {{ $active ? 'text-slate-900' : 'text-slate-600 hover:text-slate-900' }}">
                    {{ $nav['label'] }}
                    <span class="pointer-events-none absolute inset-x-3 bottom-1 h-0.5 origin-left rounded-full bg-gradient-to-r from-indigo-500 to-cyan-400 transition-transform duration-300 {{ $active ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}"></span>
                </a>
            @endforeach
        </nav>

        {{-- Kanan: status + CTA + Hamburger --}}
        <div class="flex items-center gap-3">
            <span class="hidden items-center gap-1.5 rounded-full border border-emerald-300/60 bg-emerald-50/70 px-2.5 py-1 text-xs font-medium text-emerald-700 backdrop-blur lg:inline-flex">
                <span class="relative flex h-1.5 w-1.5">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                </span>
                Open for project
            </span>

            <a href="{{ Route::has('konsultasi') ? route('konsultasi') : url('/konsultasi') }}"
               class="group hidden items-center gap-1.5 rounded-xl bg-gradient-to-r from-indigo-600 to-indigo-500 px-5 py-2 text-sm font-semibold text-white shadow-sm shadow-indigo-600/20 transition-all duration-200 hover:shadow-lg hover:shadow-indigo-600/30 md:inline-flex">
                <span>Konsultasi Gratis</span>
                <span class="transition-transform duration-200 group-hover:translate-x-0.5">→</span>
            </a>

            {{-- Hamburger Mobile --}}
            <button id="hamburger-btn"
                    onclick="toggleMobileMenu()"
                    class="flex flex-col items-center justify-center gap-[5px] rounded-lg p-2 transition hover:bg-slate-900/5 md:hidden"
                    aria-label="Toggle menu">
                <span id="hb-line-1" class="block h-0.5 w-5 rounded-full bg-slate-700 transition-all duration-300 origin-center"></span>
                <span id="hb-line-2" class="block h-0.5 w-5 rounded-full bg-slate-700 transition-all duration-300"></span>
                <span id="hb-line-3" class="block h-0.5 w-3 rounded-full bg-slate-700 transition-all duration-300 origin-center self-start"></span>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu"
         class="overflow-hidden border-t border-slate-200 bg-white/95 backdrop-blur-xl md:hidden"
         style="max-height: 0; transition: max-height 0.3s ease;">
        <nav class="flex flex-col gap-1 px-4 py-4">
            @foreach($navLinks as $nav)
                @php
                    $active = Route::has($nav['route']) && request()->routeIs($nav['route']);
                    $href = Route::has($nav['route']) ? route($nav['route']) . $nav['anchor'] : url('/') . $nav['anchor'];
                @endphp
                <a href="{{ $href }}"
                   onclick="closeMobileMenu()"
                   class="group flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium transition-all duration-200 {{ $active ? 'bg-indigo-50 text-indigo-700' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}">
                    <span class="h-1.5 w-1.5 rounded-full bg-gradient-to-r from-indigo-500 to-cyan-400 transition-opacity duration-200 {{ $active ? 'opacity-100' : 'opacity-0 group-hover:opacity-100' }}"></span>
                    {{ $nav['label'] }}
                </a>
            @endforeach
            <a href="{{ Route::has('konsultasi') ? route('konsultasi') : url('/konsultasi') }}"
               class="mt-3 inline-flex items-center justify-center gap-1.5 rounded-xl bg-gradient-to-r from-indigo-600 to-indigo-500 px-4 py-3 text-center text-sm font-semibold text-white transition hover:shadow-lg hover:shadow-indigo-600/30">
                Konsultasi Gratis →
            </a>
        </nav>
    </div>
</header>

<script>
    let menuOpen = false;
    function toggleMobileMenu() {
        menuOpen = !menuOpen;
        const menu = document.getElementById('mobile-menu');
        const l1   = document.getElementById('hb-line-1');
        const l2   = document.getElementById('hb-line-2');
        const l3   = document.getElementById('hb-line-3');
        if (menuOpen) {
            menu.style.maxHeight = menu.scrollHeight + 'px';
            l1.style.transform   = 'translateY(7px) rotate(45deg)';
            l2.style.opacity     = '0';
            l3.style.transform   = 'translateY(-7px) rotate(-45deg)';
            l3.style.width       = '1.25rem';
        } else {
            closeMobileMenu();
        }
    }
    function closeMobileMenu() {
        menuOpen = false;
        const menu = document.getElementById('mobile-menu');
        const l1   = document.getElementById('hb-line-1');
        const l2   = document.getElementById('hb-line-2');
        const l3   = document.getElementById('hb-line-3');
        menu.style.maxHeight = '0';
        l1.style.transform   = '';
        l2.style.opacity     = '';
        l3.style.transform   = '';
        l3.style.width       = '';
    }

    // Transparan saat di atas, jadi putih solid + blur saat di-scroll
    (function () {
        const header = document.getElementById('site-header');
        if (!header) return;
        const solid = ['bg-white/80', 'backdrop-blur-xl', 'border-slate-200', 'shadow-lg', 'shadow-slate-900/5'];
        const onScroll = function () {
            if (window.scrollY > 8) {
                header.classList.add(...solid);
                header.classList.remove('border-transparent', 'bg-white');
            } else {
                header.classList.remove(...solid);
                header.classList.add('border-transparent', 'bg-white');
            }
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    })();
</script>
