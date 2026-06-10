@extends('layouts.app')
@section('content')
    @include('components.navbar', ['brand' => 'SB NET Studio'])

    @php
        if (! function_exists('sbIcon')) {
            function sbIcon(string $name, string $class = 'h-6 w-6'): string {
                $paths = [
                    'window'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18"/>',
                    'building'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"/>',
                    'tag'       => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z"/>',
                    'cart'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>',
                    'dashboard' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z"/>',
                    'sparkles'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z"/>',
                    'wallet'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3m15 3.75h.008v.008H18v-.008Z"/>',
                    'bolt'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5 10.5 2.25 12 10.5h8.25L13.5 21.75 12 13.5H3.75Z"/>',
                    'phone'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/>',
                    'search'    => '<path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>',
                    'shield'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.249-8.25-3.285Z"/>',
                    'trend'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.307a11.95 11.95 0 0 1 5.814-5.519l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941"/>',
                    'chat'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z"/>',
                    'handshake' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12"/>',
                    'code'      => '<path stroke-linecap="round" stroke-linejoin="round" d="m17.25 6.75 5.25 5.25-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5"/>',
                    'check-circle' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>',
                    'rocket'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 0 0 6.16-12.12A14.98 14.98 0 0 0 9.631 8.41m5.96 5.96a14.926 14.926 0 0 1-5.841 2.58m-.119-8.54a6 6 0 0 0-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 0 0-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 0 1-2.448-2.448 14.9 14.9 0 0 1 .06-.312m-2.24 2.39a4.493 4.493 0 0 0-1.757 4.306 4.493 4.493 0 0 0 4.306-1.758M16.5 9a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>',
                    'arrow'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>',
                    'chevron-r' => '<path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>',
                    'check'     => '<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>',
                    'star'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"/>',
                ];
                $d = $paths[$name] ?? '';
                return '<svg class="'.e($class).'" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">'.$d.'</svg>';
            }
        }
    @endphp

    <main class="bg-white text-slate-900">
        {{-- HERO (background photo) --}}
        <section class="relative isolate overflow-hidden">
            <div class="absolute inset-0 -z-10">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=1920&q=80&auto=format&fit=crop" alt="" class="h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-white via-white/85 to-white/50"></div>
                <div class="absolute inset-0 bg-gradient-to-b from-white/95 via-white/40 to-white"></div>
            </div>
            <div class="mx-auto max-w-6xl px-4 py-24 lg:py-32">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white/80 px-4 py-1.5 text-sm text-slate-600 shadow-sm backdrop-blur">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-emerald-500"></span>
                        </span>
                        Menerima project baru — respons di jam kerja
                    </span>
                    <h1 class="mt-6 text-4xl font-bold leading-tight tracking-tight text-slate-900 sm:text-5xl lg:text-6xl">
                        Website & Aplikasi Bisnis yang
                        <span class="bg-gradient-to-r from-indigo-600 to-cyan-500 bg-clip-text text-transparent">Rapi, Cepat &amp; Profesional</span>
                    </h1>
                    <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-600">
                        Dari landing page, company profile, toko online, sistem kasir, sampai aplikasi mobile — khusus untuk UMKM &amp; konveksi. Sudah termasuk domain &amp; hosting tahun pertama.
                    </p>
                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="{{ route('layanan') }}"
                           class="group inline-flex items-center justify-center gap-2 rounded-xl bg-indigo-600 px-7 py-3.5 text-base font-semibold text-white shadow-lg shadow-indigo-600/25 transition hover:bg-indigo-700">
                            Lihat Semua Layanan
                            {!! sbIcon('arrow', 'h-5 w-5 transition group-hover:translate-x-0.5') !!}
                        </a>
                        <a href="#konsultasi"
                           class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-300 bg-white px-7 py-3.5 text-base font-semibold text-slate-900 shadow-sm transition hover:bg-slate-50">
                            {!! sbIcon('chat', 'h-5 w-5 text-slate-500') !!}
                            Konsultasi Gratis
                        </a>
                    </div>
                    <div class="mt-12 grid max-w-md grid-cols-3 gap-6">
                        @foreach([
                            ['num' => '50+',  'label' => 'Project Selesai'],
                            ['num' => '40+',  'label' => 'Klien Puas'],
                            ['num' => '100%', 'label' => 'Garansi Bug Fix'],
                        ] as $stat)
                            <div>
                                <div class="text-2xl font-bold text-slate-900 md:text-3xl">{{ $stat['num'] }}</div>
                                <div class="mt-1 text-xs text-slate-500">{{ $stat['label'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- SHOWCASE (photo) --}}
        <section class="mx-auto max-w-6xl space-y-24 px-4 py-20">
            <div class="grid items-center gap-10 lg:grid-cols-2">
                <div class="relative order-2 lg:order-1">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1100&q=80&auto=format&fit=crop"
                         alt="Contoh tampilan website yang rapi"
                         loading="lazy"
                         class="aspect-[4/3] w-full rounded-2xl object-cover ring-1 ring-slate-200 shadow-xl">
                </div>
                <div class="order-1 lg:order-2">
                    <span class="text-sm font-semibold uppercase tracking-widest text-indigo-600">Dikerjakan rapi</span>
                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Bukan template asal jadi</h2>
                    <p class="mt-4 leading-relaxed text-slate-600">
                        Setiap halaman dibangun dengan struktur yang jelas dan kode yang rapi, jadi website-mu enak dilihat, gampang dipakai pengunjung, dan mudah dikembangkan lagi nanti.
                    </p>
                    <ul class="mt-6 space-y-3">
                        @foreach(['Struktur & kode yang rapi dan mudah dikembangkan', 'Tombol WhatsApp yang gampang diklik', 'Loading cepat & sudah termasuk domain + hosting'] as $point)
                            <li class="flex items-start gap-3 text-slate-700">
                                <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-100 text-emerald-600">{!! sbIcon('check', 'h-4 w-4') !!}</span>
                                {{ $point }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="grid items-center gap-10 lg:grid-cols-2">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-indigo-600">Mobile-first</span>
                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Sempurna di layar HP</h2>
                    <p class="mt-4 leading-relaxed text-slate-600">
                        80%+ pengunjung buka website dari HP. Semua yang kami bangun dioptimasi untuk mobile lebih dulu, jadi tampil rapi di perangkat apa pun.
                    </p>
                    <a href="{{ route('portofolio') }}" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-indigo-600 transition hover:text-indigo-700">
                        Lihat contoh hasilnya
                        {!! sbIcon('arrow', 'h-4 w-4') !!}
                    </a>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=1000&q=80&auto=format&fit=crop"
                         alt="Tampilan website versi mobile"
                         loading="lazy"
                         class="aspect-[4/3] w-full rounded-2xl object-cover ring-1 ring-slate-200 shadow-xl">
                </div>
            </div>
        </section>

        {{-- LAYANAN --}}
        <section id="layanan" class="border-t border-slate-100 bg-slate-50">
            <div class="mx-auto max-w-6xl px-4 py-20">
                <div class="mx-auto max-w-2xl text-center">
                    <span class="text-sm font-semibold uppercase tracking-widest text-indigo-600">Layanan</span>
                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Yang Bisa Aku Buatin</h2>
                    <p class="mx-auto mt-4 text-slate-600">Aku fokus bikin website & aplikasinya. Pilih yang sesuai kebutuhan, atau konsultasi dulu — aku bantu rekomendasiin yang paling pas.</p>
                </div>

                @php
                    $homeServices = [
                        ['icon' => 'window',    'category' => 'Website', 'title' => 'Landing Page (1 Halaman)',         'desc' => 'Satu halaman fokus & rapi: struktur jelas, tombol WhatsApp, siap dipakai promosi.',           'price' => 'Mulai Rp 1.500.000', 'duration' => '3–5 hari kerja'],
                        ['icon' => 'building',  'category' => 'Website', 'title' => 'Company Profile',                  'desc' => 'Website profesional 5 halaman: layanan, portofolio, dan kontak yang rapi.',                   'price' => 'Mulai Rp 3.000.000', 'duration' => '7–14 hari kerja'],
                        ['icon' => 'tag',       'category' => 'Website', 'title' => 'Website Konveksi',                 'desc' => 'Katalog, size chart, MOQ, jenis bahan, galeri produksi, dan form penawaran via WhatsApp.',       'price' => 'Mulai Rp 3.500.000', 'duration' => '7–14 hari kerja'],
                        ['icon' => 'cart',      'category' => 'Website', 'title' => 'Toko Online (E-Commerce)',          'desc' => 'Full fitur jualan: katalog, keranjang, checkout, dan admin kelola order.',                     'price' => 'Mulai Rp 6.000.000', 'duration' => '21–30 hari kerja'],
                        ['icon' => 'dashboard', 'category' => 'Web App', 'title' => 'Website Manajemen / Admin Panel',  'desc' => 'Dashboard internal: kelola data, multi-role, laporan, dan export PDF/Excel.',                  'price' => 'Mulai Rp 5.000.000', 'duration' => '14–30 hari kerja'],
                        ['icon' => 'wallet',    'category' => 'Kasir',   'title' => 'Website Kasir (POS Online)',        'desc' => 'Kasir berbasis web: input transaksi, kelola stok, dan laporan penjualan terpusat.',            'price' => 'Mulai Rp 4.000.000', 'duration' => '14–25 hari kerja'],
                        ['icon' => 'bolt',      'category' => 'Kasir',   'title' => 'Aplikasi Kasir (Desktop/Android)',  'desc' => 'Aplikasi kasir yang bisa jalan offline, sinkron saat online, lengkap cetak struk.',            'price' => 'Mulai Rp 5.000.000', 'duration' => '21–35 hari kerja'],
                        ['icon' => 'phone',     'category' => 'Mobile',  'title' => 'Aplikasi Mobile (Android)',         'desc' => 'Aplikasi Android custom: katalog, pemesanan, membership, atau tools internal.',               'price' => 'Mulai Rp 8.000.000', 'duration' => '30–60 hari kerja'],
                        ['icon' => 'sparkles',  'category' => 'Custom',  'title' => 'Website Custom',                    'desc' => 'Dibangun dari nol sesuai kebutuhan spesifik bisnismu — bukan template, bukan copy-paste.',     'price' => 'Mulai Rp 5.000.000', 'duration' => '14–45 hari kerja'],
                    ];
                @endphp

                <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($homeServices as $s)
                        <div class="group flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-indigo-200 hover:shadow-lg">
                            <div class="flex-1">
                                <div class="flex items-start justify-between gap-3">
                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                                        {!! sbIcon($s['icon'], 'h-6 w-6') !!}
                                    </div>
                                    <span class="shrink-0 rounded-full border border-slate-200 px-2.5 py-1 text-xs font-medium text-slate-500">{{ $s['category'] }}</span>
                                </div>
                                <h3 class="mt-5 text-lg font-semibold text-slate-900">{{ $s['title'] }}</h3>
                                <p class="mt-2 text-sm leading-relaxed text-slate-500">{{ $s['desc'] }}</p>
                            </div>
                            <div class="mt-6 border-t border-slate-100 pt-4">
                                <div class="flex items-center justify-between text-sm">
                                    <div>
                                        <div class="text-xs text-slate-400">Estimasi</div>
                                        <div class="font-medium text-slate-600">{{ $s['duration'] }}</div>
                                    </div>
                                    <div class="text-right">
                                        <div class="text-xs text-slate-400">Harga</div>
                                        <div class="font-semibold text-indigo-600">{{ $s['price'] }}</div>
                                    </div>
                                </div>
                                <a href="{{ route('layanan') }}"
                                   class="mt-4 inline-flex w-full items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm font-semibold text-slate-900 transition hover:bg-slate-50">
                                    Detail &amp; Paket Harga
                                    {!! sbIcon('chevron-r', 'h-4 w-4') !!}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- PORTOFOLIO (foto asli dari public/) --}}
        <section class="mx-auto max-w-6xl px-4 py-20">
            <div class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-indigo-600">Portofolio</span>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Project yang Sudah Kelar</h2>
                <p class="mx-auto mt-4 text-slate-600">Beberapa project nyata yang sudah aku kerjakan.</p>
            </div>

            @php
                $portfolio = [
                    ['name' => 'KA-KAOS Apparel',  'type' => 'Toko Online (E-Commerce)',   'desc' => 'Toko online kaos: katalog produk, keranjang, dan checkout.',          'img' => asset('ka-kaos (1).png')],
                    ['name' => 'YSBM',             'type' => 'Company Profile',            'desc' => 'Website profil organisasi: profil, program kegiatan, dan kontak.',     'img' => asset('ysbm (1).png')],
                    ['name' => 'Toko Levi’s',      'type' => 'Toko Online (E-Commerce)',   'desc' => 'Katalog fashion dengan keranjang dan checkout online.',                'img' => asset('levis.png')],
                    ['name' => 'Alfajri Konveksi', 'type' => 'Sistem Manajemen Konveksi',  'desc' => 'Sistem konveksi: order, produksi, stok, dan laporan dalam satu panel.', 'img' => asset('konfeksi (1).png')],
                ];
            @endphp

            <div class="mt-12 grid gap-6 md:grid-cols-2">
                @foreach($portfolio as $p)
                    <div class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:shadow-lg">
                        <div class="relative overflow-hidden">
                            <img src="{{ $p['img'] }}"
                                 alt="{{ $p['name'] }}"
                                 loading="lazy"
                                 class="aspect-[16/10] w-full object-cover transition duration-500 group-hover:scale-105">
                            <span class="absolute left-4 top-4 inline-flex rounded-full border border-slate-200 bg-white/90 px-3 py-1 text-xs font-medium text-slate-700 backdrop-blur">{{ $p['type'] }}</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-slate-900">{{ $p['name'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-slate-500">{{ $p['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-10 text-center">
                <a href="{{ route('portofolio') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-indigo-600 transition hover:text-indigo-700">
                    Lihat Semua Portofolio
                    {!! sbIcon('arrow', 'h-4 w-4') !!}
                </a>
            </div>
        </section>

        {{-- KENAPA KAMI --}}
        <section class="border-y border-slate-100 bg-slate-50">
            <div class="mx-auto max-w-6xl px-4 py-20">
                <div class="mx-auto max-w-2xl text-center">
                    <span class="text-sm font-semibold uppercase tracking-widest text-indigo-600">Kenapa SB NET Studio</span>
                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Beda dari yang Lain</h2>
                </div>
                <div class="mt-12 grid gap-6 md:grid-cols-3">
                    @foreach([
                        ['icon' => 'wallet', 'title' => 'Harga Transparan',          'desc' => 'Harga jelas dari awal, tanpa biaya tambahan mendadak. DP 50%, pelunasan setelah approve.'],
                        ['icon' => 'bolt',   'title' => 'Pengerjaan Cepat',          'desc' => 'Landing page 3–5 hari, company profile 7–14 hari. Lebih cepat kalau konten sudah siap.'],
                        ['icon' => 'phone',  'title' => 'Mobile-First',              'desc' => '80%+ pengunjung pakai HP. Semua website kami dioptimasi untuk mobile terlebih dahulu.'],
                        ['icon' => 'window', 'title' => 'Domain & Hosting Termasuk', 'desc' => 'Domain .com + hosting tahun pertama sudah termasuk di semua paket pembuatan website.'],
                        ['icon' => 'shield', 'title' => 'Garansi 30 Hari',           'desc' => 'Ada bug atau error teknis setelah serah terima? Kami perbaiki gratis dalam 30 hari pertama.'],
                        ['icon' => 'code',   'title' => 'Source Code Milik Kamu',    'desc' => 'Setelah lunas, seluruh source code dan akses jadi milik kamu sepenuhnya.'],
                    ] as $why)
                        <div class="flex gap-4 rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:shadow-md">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                                {!! sbIcon($why['icon'], 'h-6 w-6') !!}
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900">{{ $why['title'] }}</h3>
                                <p class="mt-1.5 text-sm leading-relaxed text-slate-500">{{ $why['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- CARA KERJA --}}
        <section class="mx-auto max-w-6xl px-4 py-20">
            <div class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-indigo-600">Cara Kerja</span>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Dari Chat Sampai Serah Terima</h2>
                <p class="mx-auto mt-4 text-slate-600">Transparan, nggak ribet, dan progress bisa kamu pantau di setiap tahap.</p>
            </div>
            @php
                $steps = [
                    ['icon' => 'chat',         'title' => 'Konsultasi',      'desc' => 'Ceritakan kebutuhan & target. Aku beri saran paket + estimasi harga. Gratis.'],
                    ['icon' => 'handshake',    'title' => 'Deal & DP 50%',   'desc' => 'Sepakat harga, bayar DP 50%, pengerjaan dimulai. Tanpa biaya tambahan mendadak.'],
                    ['icon' => 'code',         'title' => 'Development',     'desc' => 'Desain + development dengan progress yang bisa kamu pantau dan beri feedback.'],
                    ['icon' => 'check-circle', 'title' => 'Review & Revisi', 'desc' => 'Kamu cek hasilnya. Ada yang kurang pas? Aku perbaiki sesuai paket sampai oke.'],
                    ['icon' => 'rocket',       'title' => 'Serah Terima',    'desc' => 'Website/aplikasi online, pelunasan 50%, serah terima source code + akses + panduan.'],
                ];
            @endphp
            <div class="mt-12 grid gap-4 md:grid-cols-5">
                @foreach($steps as $i => $step)
                    <div class="relative flex flex-col items-center gap-4 rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm">
                        @if(! $loop->last)
                            <div class="absolute -right-2 top-12 hidden h-0.5 w-4 bg-slate-200 md:block"></div>
                        @endif
                        <div class="relative flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                            {!! sbIcon($step['icon'], 'h-6 w-6') !!}
                            <span class="absolute -right-1.5 -top-1.5 flex h-5 w-5 items-center justify-center rounded-full bg-indigo-600 text-[11px] font-bold text-white">{{ $i + 1 }}</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-slate-900">{{ $step['title'] }}</h3>
                            <p class="mt-2 text-xs leading-relaxed text-slate-500">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- TESTIMONI (placeholder) --}}
        <section class="border-y border-slate-100 bg-slate-50">
            <div class="mx-auto max-w-6xl px-4 py-20">
                <div class="mx-auto max-w-2xl text-center">
                    <span class="text-sm font-semibold uppercase tracking-widest text-indigo-600">Testimoni</span>
                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Kata Mereka yang Sudah Coba</h2>
                </div>
                @php
                    $testimonials = [
                        ['name' => 'Ahmad F.', 'role' => 'Owner Al-Fajri Konveksi',   'rating' => 5, 'photo' => 'https://i.pravatar.cc/120?img=12', 'text' => 'Website katalog dari SB NET bikin klien lebih percaya. Order jadi lebih gampang, nggak perlu bolak-balik WA nanya detail. Recommended!'],
                        ['name' => 'Siti R.',  'role' => 'Pemilik Warung Sederhana',  'rating' => 5, 'photo' => 'https://i.pravatar.cc/120?img=45', 'text' => 'Sekarang pelanggan bisa lihat menu online, tahu jam buka, dan langsung diarahkan ke Maps. Pesanan via WA jadi lebih rapi. Terima kasih!'],
                        ['name' => 'Budi S.',  'role' => 'Direktur PT Digital',       'rating' => 5, 'photo' => 'https://i.pravatar.cc/120?img=33', 'text' => 'Company profile jadi terlihat lebih serius. Saat pitching ke klien, tinggal kirim link. Tim SB NET responsif dan hasilnya oke banget.'],
                    ];
                @endphp
                <div class="mt-12 grid gap-6 md:grid-cols-3">
                    @foreach($testimonials as $t)
                        <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:shadow-md">
                            <div class="flex gap-1 text-amber-400">
                                @for($i = 0; $i < $t['rating']; $i++)
                                    {!! sbIcon('star', 'h-4 w-4 fill-current') !!}
                                @endfor
                            </div>
                            <p class="mt-4 flex-1 text-sm leading-relaxed text-slate-600">“{{ $t['text'] }}”</p>
                            <div class="mt-6 flex items-center gap-3 border-t border-slate-100 pt-5">
                                <img src="{{ $t['photo'] }}" alt="{{ $t['name'] }}" loading="lazy" class="h-11 w-11 rounded-full object-cover ring-1 ring-slate-200">
                                <div>
                                    <div class="font-semibold text-slate-900">{{ $t['name'] }}</div>
                                    <div class="text-xs text-slate-500">{{ $t['role'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- FAQ --}}
        <section class="mx-auto max-w-3xl px-4 py-20">
            <div class="text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-indigo-600">FAQ</span>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">Yang Sering Ditanya</h2>
            </div>
            @php
                $faqs = [
                    ['q' => 'Berapa lama pengerjaannya?',      'a' => 'Tergantung paket. Landing page 3–5 hari, company profile 7–14 hari, e-commerce 21–30 hari, aplikasi mobile 30–60 hari. Bisa lebih cepat kalau konten (foto, teks) sudah siap.'],
                    ['q' => 'Bisa custom desain sesuai brand?', 'a' => 'Bisa banget. Warna, font, dan layout disesuaikan dengan identitas brand kamu. Kamu juga bisa kasih referensi website yang kamu suka.'],
                    ['q' => 'Bagaimana sistem pembayarannya?',  'a' => 'DP 50% saat deal, pelunasan 50% setelah selesai dan kamu approve. Transfer via bank atau e-wallet. Tanpa biaya tersembunyi.'],
                    ['q' => 'Apakah ada garansi?',              'a' => 'Ada. Garansi perbaikan bug gratis 30 hari setelah serah terima. Untuk update konten atau fitur baru ada biaya terpisah dengan estimasi yang jelas dulu.'],
                    ['q' => 'Bisa edit website sendiri?',       'a' => 'Untuk paket yang include admin panel/CMS, kamu bisa kelola konten sendiri. Aku beri panduan cara pakainya saat serah terima.'],
                    ['q' => 'Apa saja yang sudah termasuk?',    'a' => 'Setiap paket pembuatan website sudah termasuk domain (.com) + hosting tahun pertama, SSL/HTTPS, tampilan mobile-friendly, source code, dan panduan pakai. Perpanjangan domain & hosting tahun berikutnya menyesuaikan harga penyedia (kira-kira Rp 350–500rb/tahun).'],
                ];
            @endphp
            <div class="mt-12 space-y-3">
                @foreach($faqs as $faq)
                    <details class="group rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:shadow-md">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-4 p-6 font-semibold text-slate-900">
                            <span>{{ $faq['q'] }}</span>
                            {!! sbIcon('chevron-r', 'h-5 w-5 shrink-0 text-slate-400 transition-transform duration-300 group-open:rotate-90') !!}
                        </summary>
                        <div class="px-6 pb-6 text-sm leading-relaxed text-slate-600">{{ $faq['a'] }}</div>
                    </details>
                @endforeach
            </div>
        </section>

        {{-- CTA --}}
        <section id="konsultasi" class="mx-auto max-w-6xl px-4 pb-24">
            <div class="relative overflow-hidden rounded-3xl bg-gradient-to-r from-indigo-600 to-indigo-700 px-8 py-16 text-center shadow-xl md:px-16">
                <div class="mx-auto max-w-2xl">
                    <div class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-1.5 text-sm text-indigo-50">
                        <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-emerald-300"></span>
                        Konsultasi gratis, tanpa komitmen
                    </div>
                    <h2 class="mt-6 text-3xl font-bold text-white md:text-4xl">Mulai Project Website Kamu Sekarang</h2>
                    <p class="mx-auto mt-4 max-w-xl text-indigo-100">Ceritakan jenis bisnis, kebutuhan, dan budget. Aku beri saran paket paling cocok beserta estimasi harganya.</p>
                    <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                        <a href="https://wa.me/6285524884478?text=Halo%2C+mau+konsultasi+bikin+website+untuk+bisnis+saya" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-3 rounded-xl bg-white px-7 py-3.5 text-base font-semibold text-indigo-700 shadow-lg transition hover:bg-indigo-50">
                            <svg class="h-5 w-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                            Chat WhatsApp Sekarang
                        </a>
                        <a href="{{ route('layanan') }}"
                           class="inline-flex items-center gap-2 rounded-xl border border-white/30 bg-white/10 px-7 py-3.5 text-base font-semibold text-white transition hover:bg-white/20">
                            Lihat Paket &amp; Harga
                            {!! sbIcon('arrow', 'h-4 w-4') !!}
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- FOOTER --}}
        <footer class="border-t border-slate-200 bg-white">
            <div class="mx-auto max-w-6xl px-4 py-12">
                <div class="grid gap-10 md:grid-cols-4">
                    <div class="md:col-span-2">
                        <a href="{{ route('home') }}" class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-600 font-bold text-white">SN</div>
                            <span class="text-lg font-bold text-slate-900">SB NET Studio</span>
                        </a>
                        <p class="mt-4 max-w-sm text-sm leading-relaxed text-slate-500">Jasa pembuatan website & aplikasi untuk UMKM, konveksi, dan bisnis lokal. Harga wajar, hasil rapi, proses jelas.</p>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-slate-900">Layanan</h4>
                        <ul class="mt-4 space-y-2.5 text-sm text-slate-500">
                            @foreach(['Landing Page', 'Company Profile', 'Website Konveksi', 'Toko Online', 'Website Kasir', 'Website Custom'] as $item)
                                <li><a href="{{ route('layanan') }}" class="transition hover:text-indigo-600">{{ $item }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-slate-900">Lainnya</h4>
                        <ul class="mt-4 space-y-2.5 text-sm text-slate-500">
                            <li><a href="{{ route('portofolio') }}" class="transition hover:text-indigo-600">Portofolio</a></li>
                            <li><a href="{{ route('layanan') }}#harga" class="transition hover:text-indigo-600">Harga</a></li>
                            <li><a href="{{ route('faq') }}" class="transition hover:text-indigo-600">FAQ</a></li>
                            <li><a href="#konsultasi" class="transition hover:text-indigo-600">Konsultasi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-slate-200 pt-8 text-sm text-slate-400 md:flex-row">
                    <p>&copy; {{ date('Y') }} SB NET Studio. Semua hak dilindungi.</p>
                    <p>Dibuat untuk UMKM Indonesia.</p>
                </div>
            </div>
        </footer>
    </main>
@endsection