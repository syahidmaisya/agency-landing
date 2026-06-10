@extends('layouts.app')

@section('content')
    @include('components.navbar', ['brand' => 'SB NET Studio'])

    @php
        $projects = [
            [
                'id'       => 1,
                'name'     => 'KA-KAOS Apparel Store',
                'category' => 'ecommerce',
                'label'    => 'Toko Online (E-Commerce)',
                'image'    => asset('ka-kaos (1).png'),
                'gallery'  => [asset('ka-kaos (1).png'), asset('ka-kaos (2).png'), asset('ka-kaos (3).png')],
                'url'      => 'https://ka-kaos.com',
                'role'     => 'Web Developer (Back-End Focus)',
                'status'   => 'Production',
                'accent'   => 'bg-rose-50 text-rose-700 ring-rose-200',
                'tech'     => ['PHP 8.2', 'Laravel 12', 'MySQL', 'JavaScript'],
                'desc'     => 'Platform e-commerce pakaian: penelusuran produk, keranjang belanja, hingga checkout yang aman & efisien.',
                'features' => ['Order processing end-to-end', 'Migrasi database', 'Integrasi API', 'Manajemen inventaris'],
                'overview' => 'KA-KAOS Apparel Store adalah platform e-commerce komprehensif untuk transaksi ritel pakaian secara online. Dibangun dengan fokus pada performa dan skalabilitas back-end, memastikan alur dari penelusuran produk, keranjang belanja, hingga penyelesaian transaksi berjalan aman dan efisien.',
                'responsibilities' => [
                    ['t' => 'Sistem Pemrosesan Pesanan', 'd' => 'Logika e-commerce end-to-end: validasi checkout, kalkulasi total harga, dan pembaruan status pesanan secara real-time.'],
                    ['t' => 'Manajemen Basis Data & Migrasi', 'd' => 'Skema database efisien untuk produk, pengguna, dan riwayat transaksi memakai sistem migration Laravel demi integritas data.'],
                    ['t' => 'Integrasi API', 'd' => 'Membangun dan mengonsumsi API untuk menghubungkan logika inti aplikasi dengan layanan atau antarmuka lain dengan presisi.'],
                    ['t' => 'Arsitektur E-Commerce', 'd' => 'Prinsip clean code pada controller dan model untuk logika keranjang belanja serta manajemen inventaris produk.'],
                ],
                'impact' => [
                    'Membangun fondasi back-end dengan PHP dan Laravel terbaru — keamanan tinggi dan siap dikembangkan ke fitur skala besar.',
                    'Menyelesaikan deployment hingga dapat diakses fungsional (menangani status hosting dan konfigurasi server).',
                ],
            ],
            [
                'id'       => 2,
                'name'     => 'Yayasan YSBM',
                'category' => 'website',
                'label'    => 'Company Profile / Organisasi',
                'image'    => asset('ysbm (1).png'),
                'gallery'  => [asset('ysbm (1).png'), asset('ysbm (2).png'), asset('ysbm (3).png')],
                'url'      => '',
                'role'     => 'Web Developer',
                'status'   => 'Live',
                'accent'   => 'bg-emerald-50 text-emerald-700 ring-emerald-200',
                'tech'     => ['PHP', 'Laravel', 'MySQL', 'Responsive'],
                'desc'     => 'Situs resmi yayasan filantropi: pilar program, struktur operasional, dan transparansi untuk donatur.',
                'features' => ['Struktur program utama', 'Unit operasional & ZISWAF', 'Kepercayaan institusi', 'Desain responsif'],
                'overview' => 'Situs web resmi Yayasan Sinergi Bakti Masyarakat (YSBM), organisasi filantropi yang berdedikasi pada pemberdayaan masyarakat melalui kerja sama strategis. Dirancang untuk membangun kehadiran digital yang kuat, meningkatkan transparansi yayasan, dan memudahkan masyarakat serta donatur memahami misi yang dijalankan.',
                'responsibilities' => [
                    ['t' => 'Struktur Program Utama', 'd' => 'Menyajikan pilar program yayasan dengan jelas: pendidikan, kesehatan, pemberdayaan ekonomi, dan sosial kemanusiaan.'],
                    ['t' => 'Struktur Operasional', 'd' => 'Halaman unit penggerak yayasan: manajemen relawan, pengelolaan ZISWAF (Zakat, Infaq, Sadaqah, Wakaf), dan pusat pelatihan.'],
                    ['t' => 'Optimalisasi Kepercayaan Institusi', 'd' => 'Mengatur aspek teknis (pemilihan basis data, pendaftaran nama domain resmi) demi kepercayaan tinggi dari pihak luar dan donatur.'],
                    ['t' => 'Desain Layar Responsif', 'd' => 'Tampil optimal dan rapi di berbagai perangkat — komputer, tablet, maupun ponsel pintar.'],
                ],
                'impact' => [],
            ],
            [
                'id'       => 3,
                'name'     => 'Toko Levi’s (E-Commerce)',
                'category' => 'ecommerce',
                'label'    => 'Toko Online (E-Commerce)',
                'image'    => asset('levis.png'),
                'gallery'  => [asset('levis.png'), asset('levis (2).png'), asset('levis (3).png'), asset('levis (4).png')],
                'url'      => '',
                'role'     => 'Web Developer',
                'status'   => 'Production',
                'accent'   => 'bg-blue-50 text-blue-700 ring-blue-200',
                'tech'     => ['PHP', 'Laravel', 'JavaScript', 'Blade', 'MySQL'],
                'desc'     => 'Toko daring bertema Levi’s: welcome page custom + slider dinamis, ditenagai back-end transaksi yang utuh.',
                'features' => ['Order processing utuh', 'Manajemen stok', 'Welcome page + slider', 'Desain responsif'],
                'overview' => 'Sistem toko daring (e-commerce) komprehensif yang mengadaptasi tema visual dan estetika merek pakaian Levi’s. Menonjolkan antarmuka pengguna yang modern dan interaktif, sekaligus ditenagai sistem back-end yang utuh untuk menangani seluruh alur transaksi secara nyata.',
                'responsibilities' => [
                    ['t' => 'Sistem Pemrosesan Pesanan Utuh', 'd' => 'Alur jual-beli end-to-end: validasi data keranjang, perhitungan total transaksi, dan pembaruan status pesanan — selaras dengan fungsionalitas inti KA-KAOS.'],
                    ['t' => 'Manajemen Basis Data & Inventaris', 'd' => 'Arsitektur basis data untuk produk, pengguna, dan riwayat transaksi yang aman, plus logika manajemen stok barang.'],
                    ['t' => 'Halaman Utama Terkustomisasi', 'd' => 'Welcome page berdesain khusus sesuai identitas merek Levi’s, lengkap dengan slider (korsel gambar) dinamis untuk koleksi unggulan.'],
                    ['t' => 'Tampilan Layar Responsif', 'd' => 'Tata letak antarmuka beradaptasi otomatis dan tetap rapi di berbagai ukuran layar, dari monitor hingga ponsel.'],
                ],
                'impact' => [],
            ],
            [
                'id'       => 4,
                'name'     => 'Alfajri Konveksi',
                'category' => 'konveksi',
                'label'    => 'Sistem Manajemen Konveksi (ERP)',
                'image'    => asset('konfeksi (1).png'),
                'gallery'  => [asset('konfeksi (1).png'), asset('konfeksi (2).png'), asset('konfeksi (3).png')],
                'url'      => '',
                'role'     => 'Full-Stack Developer',
                'status'   => 'Production',
                'accent'   => 'bg-orange-50 text-orange-700 ring-orange-200',
                'tech'     => ['PHP', 'Laravel', 'MySQL', 'JavaScript', 'PDF Export', 'WhatsApp API'],
                'desc'     => 'Sistem manajemen konveksi all-in-one: dari pesanan, produksi, keuangan, karyawan, payroll borongan, sampai 13 jenis laporan.',
                'features' => ['Dashboard & KPI', 'Pipeline produksi 5 tahap', 'Payroll borongan otomatis', 'Keuangan & P&L', '13 jenis laporan'],
                'overview' => 'Alfajri Konveksi adalah sistem manajemen (ERP) konveksi end-to-end yang merangkum seluruh operasional bisnis dalam satu platform: pelanggan, pesanan, produksi, pengiriman, keuangan, karyawan, hingga penggajian borongan. Dirancang untuk memangkas pekerjaan manual — misalnya menghitung gaji borongan 50+ karyawan dari 2 hari menjadi 10 menit.',
                'responsibilities' => [
                    ['t' => 'Dashboard', 'd' => 'Ringkasan bisnis 1 halaman: 6 KPI card (order, omset, pengeluaran, laba, piutang, karyawan), tren omset 6 bulan, top karyawan & pelanggan, activity feed, dan pending task.'],
                    ['t' => 'Pelanggan', 'd' => 'CRUD pelanggan dengan tier otomatis (Bronze/Silver/Gold by total spend), riwayat order, chat WA langsung, dan import CSV.'],
                    ['t' => 'Pesanan', 'd' => 'Inti sistem: order multi-item, pipeline produksi 5 tahap (Antrean → Potong → Jahit → Finishing → Selesai), progress real-time per pcs, invoice PDF, push WA otomatis, dan DP tracking.'],
                    ['t' => 'Pengiriman', 'd' => 'Multi-koli, pilih kurir, input/scan resi, label PDF (thermal/A6), update status via scan QR, dan timeline pengiriman + notif WA.'],
                    ['t' => 'Keuangan (6 sub-modul)', 'd' => 'Dashboard finance, pembayaran (kuitansi PDF), piutang aging report berwarna, pengeluaran, stok bahan baku (auto-deduct), dan laporan laba-rugi (P&L) otomatis.'],
                    ['t' => 'Karyawan (4 sub-modul)', 'd' => 'Data karyawan, master tarif borongan (job type), quick input hasil kerja (<5 detik per baris), dan kasbon yang otomatis dipotong dari payroll.'],
                    ['t' => 'Penggajian (Payroll)', 'd' => 'Payroll borongan otomatis: agregasi hasil kerja × tarif job type, auto-deduct kasbon (maks 50%), slip gaji PDF, dan kirim WA massal.'],
                    ['t' => 'Laporan', 'd' => '13 jenis laporan tergenerate dalam <30 detik dengan filter periode dan export 3 format.'],
                ],
                'impact' => [
                    'Memangkas perhitungan gaji borongan 50+ karyawan dari ~2 hari menjadi ~10 menit.',
                    'Menyatukan seluruh operasional (order → produksi → keuangan → payroll) dalam satu sistem terintegrasi.',
                ],
            ],
        ];

        $categories = [
            'semua'     => 'Semua',
            'ecommerce' => 'E-Commerce',
            'website'   => 'Website',
            'konveksi'  => 'Konveksi',
        ];
    @endphp

    <main class="min-h-screen bg-white text-slate-900">
        {{-- HERO --}}
        <section class="relative mx-auto max-w-7xl px-4 pb-16 pt-20 md:pt-28">
            <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
                <div class="absolute left-1/3 top-0 h-96 w-96 rounded-full bg-indigo-300/30 blur-[100px]"></div>
                <div class="absolute right-1/3 top-20 h-96 w-96 rounded-full bg-purple-300/20 blur-[100px]"></div>
            </div>
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-indigo-600">Hasil kerja nyata</span>
                <h1 class="mt-4 text-4xl font-bold tracking-tight text-slate-900 md:text-5xl">
                    Portofolio Project
                </h1>
                <p class="mx-auto mt-4 max-w-xl text-lg text-slate-600">
                    Dari toko online, web organisasi, sampai sistem manajemen konveksi — dibangun dengan <span class="font-medium text-slate-900">Laravel & PHP</span>, fokus pada back-end yang aman dan skalabel.
                </p>

                {{-- Stats --}}
                <div class="mt-10 flex flex-wrap items-center justify-center gap-6 text-sm">
                    @foreach([
                        ['num' => '4',    'label' => 'Project'],
                        ['num' => '2',    'label' => 'E-Commerce'],
                        ['num' => '1',    'label' => 'Sistem ERP'],
                        ['num' => '100%', 'label' => 'Production-ready'],
                    ] as $stat)
                        <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white px-5 py-3 shadow-sm">
                            <span class="text-2xl font-bold text-slate-900">{{ $stat['num'] }}</span>
                            <span class="text-slate-500">{{ $stat['label'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- FILTER + GRID --}}
        <section class="mx-auto max-w-7xl px-4 pb-24">
            {{-- Filter Tabs --}}
            <div class="flex flex-wrap justify-center gap-2" id="filter-buttons">
                @foreach($categories as $key => $label)
                    <button
                        data-filter="{{ $key }}"
                        onclick="filterProjects('{{ $key }}')"
                        class="filter-btn rounded-full border px-5 py-2 text-sm font-semibold transition-all duration-200
                               {{ $key === 'semua'
                                   ? 'border-indigo-600 bg-indigo-600 text-white'
                                   : 'border-slate-200 bg-white text-slate-600 hover:bg-slate-50 hover:text-slate-900' }}">
                        {{ $label }}
                        @if($key === 'semua')
                            <span class="ml-1 rounded-full bg-indigo-100 px-1.5 py-0.5 text-xs text-indigo-700">{{ count($projects) }}</span>
                        @endif
                    </button>
                @endforeach
            </div>

            {{-- Count display --}}
            <div class="mt-6 text-center text-sm text-slate-500">
                Menampilkan <span id="visible-count" class="font-semibold text-slate-700">{{ count($projects) }}</span> project
            </div>

            {{-- Grid --}}
            <div class="mt-8 grid gap-6 md:grid-cols-2 lg:grid-cols-3" id="projects-grid">
                @foreach($projects as $index => $p)
                    <article
                        data-category="{{ $p['category'] }}"
                        onclick="openModal({{ $index }})"
                        class="project-card group flex cursor-pointer flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:border-slate-300 hover:shadow-xl hover:shadow-slate-900/5">
                        {{-- Project Photo --}}
                        <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                            <img src="{{ $p['image'] }}" alt="{{ $p['name'] }}" loading="lazy"
                                 class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/35 via-transparent to-transparent"></div>
                            <span class="absolute left-3 top-3 rounded-full px-2.5 py-1 text-xs font-semibold ring-1 backdrop-blur {{ $p['accent'] }}">
                                {{ $p['label'] }}
                            </span>
                            <span class="absolute right-3 top-3 inline-flex items-center gap-1.5 rounded-full bg-white/90 px-2.5 py-1 text-xs font-medium text-emerald-700 ring-1 ring-emerald-200 backdrop-blur">
                                <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>{{ $p['status'] }}
                            </span>
                        </div>

                        {{-- Card Body --}}
                        <div class="flex flex-1 flex-col p-5">
                            <h3 class="text-lg font-bold text-slate-900">{{ $p['name'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $p['desc'] }}</p>

                            {{-- Features --}}
                            <div class="mt-4 flex flex-wrap gap-1.5">
                                @foreach($p['features'] as $feat)
                                    <span class="rounded-lg border border-slate-200 bg-slate-50 px-2.5 py-1 text-xs text-slate-600">
                                        ✓ {{ $feat }}
                                    </span>
                                @endforeach
                            </div>

                            {{-- Tech Stack + detail --}}
                            <div class="mt-auto flex items-center justify-between border-t border-slate-200 pt-4" style="margin-top:1rem">
                                <div class="flex flex-wrap gap-1.5">
                                    @foreach($p['tech'] as $tech)
                                        <span class="rounded-md bg-indigo-50 px-2 py-0.5 text-xs font-medium text-indigo-700">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                                <span class="shrink-0 text-xs font-semibold text-indigo-600">Lihat detail →</span>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Empty state --}}
            <div id="empty-state" class="hidden py-20 text-center">
                <div class="text-4xl">🔍</div>
                <p class="mt-4 text-slate-600">Tidak ada project di kategori ini.</p>
            </div>
        </section>

        {{-- MINTA PROJECT SERUPA --}}
        <section class="mx-auto max-w-7xl px-4 pb-24">
            <div class="relative overflow-hidden rounded-3xl border border-indigo-100 bg-gradient-to-br from-indigo-50 via-purple-50 to-cyan-50 p-8 md:p-12">
                <div class="absolute inset-0 opacity-40"
                     style="background-image: linear-gradient(rgba(99,102,241,0.08) 1px, transparent 1px), linear-gradient(90deg, rgba(99,102,241,0.08) 1px, transparent 1px); background-size: 40px 40px; border-radius: 24px;"></div>
                <div class="relative grid gap-8 md:grid-cols-2 md:items-center">
                    <div>
                        <span class="text-sm font-semibold uppercase tracking-widest text-indigo-600">Mau project serupa?</span>
                        <h2 class="mt-3 text-2xl font-bold text-slate-900 md:text-3xl">
                            Ceritain bisnis kamu,<br>kami bantu bikin websitenya.
                        </h2>
                        <p class="mt-3 text-slate-600">
                            Konsultasi gratis dulu — tidak ada komitmen. Kami kasih gambaran paket, estimasi harga, dan struktur halaman yang paling cocok.
                        </p>
                        <div class="mt-5 flex flex-wrap gap-3 text-sm text-slate-600">
                            <span class="flex items-center gap-1.5"><span class="text-emerald-500">✓</span> Balas dalam 30 menit</span>
                            <span class="flex items-center gap-1.5"><span class="text-emerald-500">✓</span> Harga transparan</span>
                            <span class="flex items-center gap-1.5"><span class="text-emerald-500">✓</span> Garansi 30 hari</span>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row md:flex-col lg:flex-row">
                        <a href="https://wa.me/6285524884478?text=Halo%2C+mau+konsultasi+bikin+website+seperti+di+portofolio"
                           target="_blank"
                           class="inline-flex flex-1 items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-emerald-500 to-green-500 px-6 py-4 font-semibold text-white shadow-lg shadow-emerald-500/30 transition hover:shadow-emerald-500/50">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Chat WhatsApp
                        </a>
                        <a href="{{ route('layanan') }}"
                           class="inline-flex flex-1 items-center justify-center gap-2 rounded-xl border border-slate-200 bg-white px-6 py-4 font-semibold text-slate-900 transition hover:bg-slate-50">
                            Lihat Layanan & Harga →
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- FOOTER --}}
        <footer class="border-t border-slate-200">
            <div class="mx-auto max-w-7xl px-4 py-8">
                <div class="flex flex-col items-center justify-between gap-4 text-sm text-slate-500 md:flex-row">
                    <div class="flex items-center gap-2">
                        <div class="flex h-6 w-6 items-center justify-center rounded-lg bg-gradient-to-br from-indigo-500 to-purple-500 text-[10px] font-bold text-white">SN</div>
                        <span>&copy; {{ date('Y') }} SB NET Studio. Semua hak dilindungi.</span>
                    </div>
                    <div class="flex gap-5">
                        <a href="{{ route('home') }}" class="transition hover:text-slate-900">Home</a>
                        <a href="{{ route('layanan') }}" class="transition hover:text-slate-900">Layanan</a>
                        <a href="{{ route('layanan') }}#harga" class="transition hover:text-slate-900">Harga</a>
                        <a href="{{ route('faq') }}" class="transition hover:text-slate-900">FAQ</a>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    {{-- MODAL DETAIL --}}
    <div id="modal-overlay"
         class="fixed inset-0 z-[100] hidden items-center justify-center bg-slate-900/50 p-4 backdrop-blur-sm"
         onclick="handleOverlayClick(event)">
        <div id="modal-box" class="relative max-h-[90vh] w-full max-w-2xl overflow-y-auto rounded-3xl border border-slate-200 bg-white shadow-2xl">
            <div class="relative h-48 overflow-hidden md:h-56">
                <img id="modal-image" src="" alt="" class="h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-slate-900/10"></div>
                <button onclick="closeModal()"
                        class="absolute right-4 top-4 flex h-8 w-8 items-center justify-center rounded-full bg-black/40 text-white transition hover:bg-black/60">✕</button>
                <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                    <span id="modal-label" class="inline-block rounded-full border border-white/30 bg-white/15 px-3 py-1 text-xs font-semibold text-white backdrop-blur"></span>
                    <h2 id="modal-title" class="mt-3 text-2xl font-bold tracking-tight text-white"></h2>
                    <div class="mt-2 flex flex-wrap items-center gap-3 text-sm text-white/90">
                        <span id="modal-role"></span>
                        <span id="modal-status" class="inline-flex items-center gap-1.5 rounded-full bg-white/15 px-2.5 py-0.5 text-xs"></span>
                    </div>
                </div>
            </div>
            <div class="p-6 md:p-8">
                {{-- Gallery thumbnails --}}
                <div id="modal-gallery" class="mb-6 flex gap-2 overflow-x-auto pb-1"></div>
                <p id="modal-overview" class="text-sm leading-relaxed text-slate-600"></p>

                <div class="my-6 h-px bg-slate-200"></div>
                <div class="text-sm font-semibold text-slate-900">Tech Stack</div>
                <div id="modal-tech" class="mt-3 flex flex-wrap gap-1.5"></div>

                <div id="modal-resp-wrap">
                    <div class="my-6 h-px bg-slate-200"></div>
                    <div class="text-sm font-semibold text-slate-900">Fitur & Tanggung Jawab</div>
                    <ul id="modal-responsibilities" class="mt-3 space-y-2.5 text-sm text-slate-600"></ul>
                </div>

                <div id="modal-impact-wrap">
                    <div class="my-6 h-px bg-slate-200"></div>
                    <div class="text-sm font-semibold text-slate-900">Highlight Pencapaian</div>
                    <ul id="modal-impact" class="mt-3 space-y-2.5 text-sm text-slate-600"></ul>
                </div>

                <div class="mt-8">
                    <a id="modal-cta" href="#"
                       class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-indigo-500"></a>
                </div>
            </div>
        </div>
    </div>

    {{-- SCRIPT --}}
    <script>
        const projectsData = @json($projects);
        const waUrl = 'https://wa.me/6285524884478?text=';
        let currentProject = null;

        // Filter
        const buttons = document.querySelectorAll('.filter-btn');
        const cards   = document.querySelectorAll('.project-card');
        const countEl = document.getElementById('visible-count');
        const emptyEl = document.getElementById('empty-state');

        function filterProjects(filter) {
            buttons.forEach(btn => {
                const isActive = btn.dataset.filter === filter;
                btn.className = btn.className
                    .replace(/border-indigo-600 bg-indigo-600 text-white/g, '')
                    .replace(/border-slate-200 bg-white text-slate-600/g, '')
                    .trim();
                if (isActive) {
                    btn.classList.add('border-indigo-600', 'bg-indigo-600', 'text-white');
                    btn.classList.remove('border-slate-200', 'bg-white', 'text-slate-600', 'hover:bg-slate-50', 'hover:text-slate-900');
                } else {
                    btn.classList.add('border-slate-200', 'bg-white', 'text-slate-600', 'hover:bg-slate-50', 'hover:text-slate-900');
                    btn.classList.remove('border-indigo-600', 'bg-indigo-600', 'text-white');
                }
            });

            let count = 0;
            cards.forEach(card => {
                const match = filter === 'semua' || card.dataset.category === filter;
                card.style.display = match ? '' : 'none';
                if (match) count++;
            });
            countEl.textContent = count;
            emptyEl.classList.toggle('hidden', count > 0);
        }

        // Modal
        function openModal(index) {
            const p = projectsData[index];
            const img = document.getElementById('modal-image');
            img.src = p.image;
            img.alt = p.name;
            currentProject = p;

            const gallery = document.getElementById('modal-gallery');
            if (p.gallery && p.gallery.length > 1) {
                gallery.style.display = '';
                gallery.innerHTML = p.gallery.map(function(src, i) {
                    return '<button type="button" onclick="setModalImage(' + i + ', this)" class="modal-thumb shrink-0 overflow-hidden rounded-lg ring-2 ' + (i === 0 ? 'ring-indigo-500' : 'ring-transparent') + '"><img src="' + src + '" class="h-14 w-20 object-cover"></button>';
                }).join('');
            } else {
                gallery.style.display = 'none';
                gallery.innerHTML = '';
            }
            document.getElementById('modal-label').textContent = p.label;
            document.getElementById('modal-title').textContent = p.name;
            document.getElementById('modal-role').textContent = p.role;
            document.getElementById('modal-status').innerHTML = '<span class="h-1.5 w-1.5 rounded-full bg-emerald-300"></span>' + p.status;
            document.getElementById('modal-overview').textContent = p.overview;

            document.getElementById('modal-tech').innerHTML = p.tech.map(t =>
                '<span class="rounded-md bg-indigo-50 px-2.5 py-1 text-xs font-medium text-indigo-700">' + t + '</span>'
            ).join('');

            const respWrap = document.getElementById('modal-resp-wrap');
            if (p.responsibilities && p.responsibilities.length) {
                respWrap.style.display = '';
                document.getElementById('modal-responsibilities').innerHTML = p.responsibilities.map(r =>
                    '<li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-indigo-500"></span><span><span class="font-semibold text-slate-800">' + r.t + ':</span> ' + r.d + '</span></li>'
                ).join('');
            } else {
                respWrap.style.display = 'none';
            }

            const impactWrap = document.getElementById('modal-impact-wrap');
            if (p.impact && p.impact.length) {
                impactWrap.style.display = '';
                document.getElementById('modal-impact').innerHTML = p.impact.map(it =>
                    '<li class="flex gap-2"><span class="text-emerald-500 shrink-0">✓</span><span>' + it + '</span></li>'
                ).join('');
            } else {
                impactWrap.style.display = 'none';
            }

            const cta = document.getElementById('modal-cta');
            if (p.url) {
                cta.href = p.url;
                cta.target = '_blank';
                cta.textContent = 'Kunjungi Website ↗';
            } else {
                cta.href = waUrl + encodeURIComponent('Halo, mau tanya soal project ' + p.name);
                cta.target = '_blank';
                cta.textContent = 'Tanya soal project ini →';
            }

            const overlay = document.getElementById('modal-overlay');
            overlay.classList.remove('hidden');
            overlay.classList.add('flex');
            document.getElementById('modal-box').scrollTop = 0;
            document.body.style.overflow = 'hidden';
        }

        function setModalImage(i, btn) {
            document.getElementById('modal-image').src = currentProject.gallery[i];
            document.querySelectorAll('#modal-gallery .modal-thumb').forEach(function(t) {
                t.classList.remove('ring-indigo-500');
                t.classList.add('ring-transparent');
            });
            btn.classList.remove('ring-transparent');
            btn.classList.add('ring-indigo-500');
        }

        function closeModal() {
            const overlay = document.getElementById('modal-overlay');
            overlay.classList.add('hidden');
            overlay.classList.remove('flex');
            document.body.style.overflow = '';
        }

        function handleOverlayClick(e) {
            if (e.target === document.getElementById('modal-overlay')) closeModal();
        }

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeModal();
        });
    </script>
@endsection
