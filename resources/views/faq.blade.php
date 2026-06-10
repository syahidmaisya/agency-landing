@extends('layouts.app')

@section('content')
    @include('components.navbar', ['brand' => 'SB NET Studio'])

    @php
        $faqGroups = [
            [
                'id'    => 'umum',
                'icon'  => '💬',
                'title' => 'Umum',
                'desc'  => 'Pertanyaan dasar tentang layanan kami',
                'faqs'  => [
                    [
                        'q' => 'Apa itu SB NET Studio?',
                        'a' => 'SB NET Studio adalah jasa pembuatan website untuk UMKM, konveksi, dan bisnis lokal. Kami fokus bikin website yang clean, cepat, mobile-friendly, dan diarahkan untuk konversi — bukan sekadar tampil bagus.',
                    ],
                    [
                        'q' => 'Layanan apa saja yang tersedia?',
                        'a' => 'Kami menyediakan: Landing Page, Company Profile, Website UMKM/Bisnis Lokal, Website Konveksi, Katalog Produk (tanpa checkout), Toko Online (E-Commerce), Admin Panel/Web App, Website Custom, dan Maintenance bulanan. Detail lengkap ada di halaman Layanan.',
                    ],
                    [
                        'q' => 'Apakah bisa konsultasi dulu sebelum pesan?',
                        'a' => 'Bisa, dan kami sangat anjurkan. Konsultasi gratis — tidak ada biaya, tidak ada komitmen. Ceritakan jenis bisnis, kebutuhan, dan budget kamu. Kami bantu rekomendasikan paket yang paling cocok dan kasih gambaran struktur halamannya.',
                    ],
                    [
                        'q' => 'Apakah hanya melayani bisnis konveksi?',
                        'a' => 'Tidak. Konveksi memang salah satu spesialisasi kami, tapi kami juga handle kuliner, bengkel, salon, konsultan, startup, event organizer, koperasi, dan bisnis lainnya. Kalau bisnis kamu butuh website, kami bisa bantu.',
                    ],
                    [
                        'q' => 'Apakah bisa request fitur yang tidak ada di paket?',
                        'a' => 'Bisa. Fitur tambahan di luar paket standar bisa diajukan saat konsultasi. Kami kasih estimasi biaya dan waktu terpisah, lalu kamu putuskan mau lanjut atau tidak.',
                    ],
                ],
            ],
            [
                'id'    => 'harga',
                'icon'  => '💰',
                'title' => 'Harga & Pembayaran',
                'desc'  => 'Soal biaya, sistem bayar, dan yang sudah termasuk',
                'faqs'  => [
                    [
                        'q' => 'Berapa range harga pembuatan website?',
                        'a' => 'Tergantung jenis dan kompleksitasnya. Mulai dari Rp 1.500.000 untuk landing page 1 halaman, hingga Rp 15.000.000+ untuk toko online atau web app. Harga lengkap per layanan bisa dilihat di halaman Layanan.',
                    ],
                    [
                        'q' => 'Sistem pembayarannya gimana?',
                        'a' => 'DP 50% di awal setelah deal, pelunasan 50% setelah website selesai dan kamu sudah approve. Transfer via transfer bank (BCA, BRI, Mandiri) atau e-wallet (GoPay, OVO, Dana). Tidak ada biaya tersembunyi.',
                    ],
                    [
                        'q' => 'Domain dan hosting sudah termasuk?',
                        'a' => 'Belum termasuk secara default. Domain (.com) sekitar Rp 150.000–200.000/tahun, hosting sekitar Rp 300.000–600.000/tahun tergantung spesifikasi. Kami bisa bantu setup domain + hosting dengan biaya terpisah, atau kamu bisa pakai yang sudah punya.',
                    ],
                    [
                        'q' => 'Apakah ada biaya bulanan setelah website jadi?',
                        'a' => 'Tidak ada biaya bulanan dari kami kecuali kamu ambil paket Maintenance. Yang rutin adalah perpanjangan domain & hosting dari pihak penyedia (bukan kami). Kami tidak markup biaya tersebut.',
                    ],
                    [
                        'q' => 'Apakah harga bisa dinegosiasi?',
                        'a' => 'Harga di paket sudah kami kalkulasi sewajar mungkin. Tapi kalau budget terbatas, ceritakan saja — kami bisa bantu cari solusi: kurangi fitur tertentu, prioritaskan yang paling penting dulu, atau cicil scope-nya.',
                    ],
                    [
                        'q' => 'Bagaimana kalau project dibatalkan di tengah jalan?',
                        'a' => 'DP tidak bisa dikembalikan karena sudah masuk ke alokasi waktu dan sumber daya. Tapi kalau ada kendala di pihak klien, kami open untuk diskusi solusi — misalnya pause dulu atau reschedule.',
                    ],
                ],
            ],
            [
                'id'    => 'proses',
                'icon'  => '🛠️',
                'title' => 'Proses Pengerjaan',
                'desc'  => 'Alur kerja, estimasi waktu, dan revisi',
                'faqs'  => [
                    [
                        'q' => 'Berapa lama proses pengerjaan website?',
                        'a' => 'Tergantung paket: Landing page 3–5 hari, company profile 7–14 hari, website konveksi 7–14 hari, toko online 21–30 hari, web app custom 14–45 hari. Waktu bisa lebih cepat kalau konten (foto, teks, logo) sudah siap semua dari kamu.',
                    ],
                    [
                        'q' => 'Konten (teks & foto) disiapkan siapa?',
                        'a' => 'Teks dan foto disiapkan oleh klien. Kalau belum punya, kami bisa bantu: copywriting dikenakan biaya terpisah, foto produk bisa pakai foto HP yang kami arahkan cara pengambilannya, atau pakai foto dari stock photo gratis (Unsplash, dll).',
                    ],
                    [
                        'q' => 'Berapa kali bisa revisi?',
                        'a' => 'Tergantung paket. Basic 2x, Standar 4x, Premium 5–6x. Revisi berlaku untuk perubahan yang wajar (teks, warna, posisi elemen). Perubahan besar seperti ganti total desain atau tambah fitur baru dihitung sebagai scope tambahan.',
                    ],
                    [
                        'q' => 'Apakah bisa lihat progress pengerjaan?',
                        'a' => 'Bisa. Kami share link staging (preview online) sejak tahap desain. Kamu bisa lihat langsung di browser dan kasih feedback kapan saja. Update progres juga kami kabarin via WhatsApp.',
                    ],
                    [
                        'q' => 'Bagaimana kalau desain awal tidak sesuai ekspektasi?',
                        'a' => 'Wajar banget terjadi. Makanya di awal konsultasi kami minta referensi website yang kamu suka, palet warna, dan feel yang diinginkan. Kalau hasil awal kurang pas, langsung kasih feedback spesifik — kami revisi sesuai jatah.',
                    ],
                ],
            ],
            [
                'id'    => 'teknis',
                'icon'  => '⚙️',
                'title' => 'Teknis',
                'desc'  => 'Framework, hosting, performa, dan SEO',
                'faqs'  => [
                    [
                        'q' => 'Teknologi apa yang dipakai?',
                        'a' => 'Mayoritas project kami pakai Laravel (PHP) + TailwindCSS untuk website dan web app. Untuk kebutuhan tertentu bisa pakai Next.js atau framework lain. Database: MySQL. Semua kode clean, terdokumentasi, dan mudah di-maintain.',
                    ],
                    [
                        'q' => 'Apakah website bisa diedit sendiri?',
                        'a' => 'Untuk paket yang include admin panel atau CMS, kamu bisa tambah/edit/hapus konten sendiri (produk, artikel, testimoni, dll). Kami kasih training saat serah terima. Untuk website statis, perubahan konten bisa request ke kami via Maintenance.',
                    ],
                    [
                        'q' => 'Seberapa cepat loading website-nya?',
                        'a' => 'Semua paket sudah include optimasi dasar: kompres gambar, lazy loading, caching basic. Score PageSpeed biasanya 80–95 di mobile. Untuk performa maksimal (VPS, CDN, Redis), bisa ditambahkan di paket Premium atau custom.',
                    ],
                    [
                        'q' => 'Apakah website sudah SEO-friendly?',
                        'a' => 'Iya. Semua website kami sudah include SEO basic: meta title, meta description, Open Graph image, struktur heading (H1/H2/H3), sitemap.xml, robots.txt, dan URL yang bersih. Untuk SEO lanjutan (schema markup, artikel blog, backlink), bisa ditambahkan terpisah.',
                    ],
                    [
                        'q' => 'Apa rekomendasi hosting untuk website Laravel?',
                        'a' => 'Untuk website statis/sederhana, shared hosting (Niagahoster, Rumahweb) sudah cukup. Untuk website dengan trafik tinggi atau web app, kami rekomendasikan VPS (Digital Ocean, Vultr, atau IDCloudHost). Kami bisa bantu setup VPS jika dibutuhkan.',
                    ],
                    [
                        'q' => 'File dan kode sumber diberikan ke klien?',
                        'a' => 'Ya. Setelah pelunasan, semua file kode sumber, database backup, dan akses server (jika di server kami) diserahkan penuh ke klien. Kamu punya full ownership atas websitemu.',
                    ],
                ],
            ],
            [
                'id'    => 'aftersales',
                'icon'  => '🛡️',
                'title' => 'After Sales',
                'desc'  => 'Garansi, maintenance, dan dukungan pasca launch',
                'faqs'  => [
                    [
                        'q' => 'Ada garansi setelah website live?',
                        'a' => 'Ada. Garansi bug fix gratis selama 30 hari setelah go live. Kalau ada error teknis atau fitur tidak berjalan sesuai yang disepakati, kami perbaiki tanpa biaya tambahan.',
                    ],
                    [
                        'q' => 'Apa yang TIDAK termasuk garansi?',
                        'a' => 'Garansi hanya untuk bug teknis, bukan untuk permintaan fitur baru, perubahan desain, atau error yang disebabkan klien (misalnya salah edit konten, ganti hosting sendiri, dll). Ini dihitung sebagai pekerjaan baru.',
                    ],
                    [
                        'q' => 'Apakah ada layanan maintenance bulanan?',
                        'a' => 'Ada. Paket Maintenance mulai Rp 300.000/bulan, mencakup: update konten ringan, backup berkala, perbaikan bug minor, dan monitoring uptime. Detail paket ada di halaman Layanan.',
                    ],
                    [
                        'q' => 'Kalau nanti mau tambah halaman atau fitur baru?',
                        'a' => 'Bisa kapan saja. Hubungi kami via WhatsApp, ceritakan kebutuhannya, kami kasih estimasi biaya dan waktu. Tidak perlu bikin ulang dari nol — tinggal tambah di website yang sudah ada.',
                    ],
                    [
                        'q' => 'Bagaimana cara menghubungi support?',
                        'a' => 'Lewat WhatsApp — paling cepat dan langsung. Jam kerja Senin–Sabtu 08.00–17.00 WIB. Untuk klien paket Maintenance Premium, response maksimal 4 jam. Untuk non-maintenance, response 1–2 hari kerja.',
                    ],
                ],
            ],
        ];
    @endphp

    <main class="min-h-screen bg-white text-slate-900">
        {{-- HERO --}}
        <section class="relative mx-auto max-w-7xl px-4 pb-16 pt-20 md:pt-28">
            <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
                <div class="absolute left-1/3 top-0 h-80 w-80 rounded-full bg-indigo-300/30 blur-[100px]"></div>
                <div class="absolute right-1/3 top-20 h-80 w-80 rounded-full bg-purple-300/20 blur-[100px]"></div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-semibold uppercase tracking-widest text-indigo-600">Pertanyaan & Jawaban</span>
                <h1 class="mt-4 text-4xl font-bold tracking-tight text-slate-900 md:text-5xl">
                    FAQ
                </h1>
                <p class="mt-4 text-lg text-slate-600">
                    Belum jelas soal layanan, proses, atau harga? Semua jawabannya ada di sini.
                </p>

                {{-- Search --}}
                <div class="relative mx-auto mt-8 max-w-lg">
                    <svg class="absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0"/>
                    </svg>
                    <input
                        id="faq-search"
                        type="text"
                        placeholder="Cari pertanyaan... (contoh: harga, revisi, hosting)"
                        class="w-full rounded-2xl border border-slate-200 bg-white py-4 pl-12 pr-4 text-sm text-slate-900 placeholder-slate-400 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20"
                        oninput="searchFaq(this.value)"
                    />
                    <div id="search-clear"
                         class="absolute right-4 top-1/2 hidden -translate-y-1/2 cursor-pointer text-slate-400 hover:text-slate-900"
                         onclick="clearSearch()">✕</div>
                </div>

                {{-- Search result info --}}
                <div id="search-info" class="mt-3 hidden text-sm text-slate-500">
                    Menampilkan <span id="search-count" class="font-semibold text-slate-900"></span> hasil untuk
                    "<span id="search-keyword" class="text-indigo-600"></span>"
                </div>
            </div>
        </section>

        {{-- CATEGORY TABS --}}
        <section class="mx-auto max-w-5xl px-4">
            <div class="flex flex-wrap justify-center gap-2" id="category-tabs">
                <button onclick="scrollToCategory('semua')"
                        class="cat-tab active-tab rounded-full border border-indigo-600 bg-indigo-600 px-4 py-2 text-sm font-semibold text-white transition">
                    Semua
                </button>
                @foreach($faqGroups as $group)
                    <button onclick="scrollToCategory('{{ $group['id'] }}')"
                            class="cat-tab rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-50 hover:text-slate-900">
                        {{ $group['icon'] }} {{ $group['title'] }}
                    </button>
                @endforeach
            </div>
        </section>

        {{-- FAQ GROUPS --}}
        <section class="mx-auto max-w-4xl px-4 py-12 pb-24" id="faq-container">
            {{-- Search empty state --}}
            <div id="search-empty" class="hidden py-16 text-center">
                <div class="text-5xl">🔍</div>
                <p class="mt-4 text-lg font-semibold text-slate-900">Tidak ada hasil</p>
                <p class="mt-2 text-sm text-slate-600">Coba kata kunci lain, atau langsung tanya via WhatsApp.</p>
                <a href="https://wa.me/6285524884478"
                   target="_blank"
                   class="mt-6 inline-flex items-center gap-2 rounded-xl bg-emerald-500 px-5 py-3 text-sm font-semibold text-white transition hover:bg-emerald-400">
                    Tanya Langsung →
                </a>
            </div>

            @foreach($faqGroups as $group)
                <div class="faq-group mb-14" id="group-{{ $group['id'] }}">
                    {{-- Group Header --}}
                    <div class="mb-6 flex items-center gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-indigo-50 text-2xl ring-1 ring-indigo-100">
                            {{ $group['icon'] }}
                        </div>
                        <div>
                            <h2 class="text-xl font-bold text-slate-900">{{ $group['title'] }}</h2>
                            <p class="text-sm text-slate-500">{{ $group['desc'] }}</p>
                        </div>
                    </div>

                    {{-- FAQ Items --}}
                    <div class="space-y-3">
                        @foreach($group['faqs'] as $faqIndex => $faq)
                            <details
                                class="faq-item group rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-200 hover:border-slate-300 hover:shadow-md"
                                data-question="{{ strtolower($faq['q']) }}"
                                data-answer="{{ strtolower($faq['a']) }}">
                                <summary class="flex cursor-pointer list-none items-center justify-between gap-4 p-5 md:p-6">
                                    <span class="font-semibold text-slate-900">{{ $faq['q'] }}</span>
                                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-slate-100 text-slate-500 transition-all duration-300 group-open:rotate-180 group-open:bg-indigo-100 group-open:text-indigo-600">
                                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    </span>
                                </summary>
                                <div class="px-5 pb-5 md:px-6 md:pb-6">
                                    <div class="border-t border-slate-200 pt-4 text-sm leading-relaxed text-slate-600">
                                        {{ $faq['a'] }}
                                    </div>
                                </div>
                            </details>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </section>

        {{-- MASIH ADA PERTANYAAN --}}
        <section class="mx-auto max-w-5xl px-4 pb-24">
            <div class="relative overflow-hidden rounded-3xl border border-indigo-100 bg-gradient-to-br from-indigo-50 via-purple-50 to-cyan-50 p-8 text-center md:p-12">
                <div class="absolute inset-0 opacity-40"
                     style="background-image: linear-gradient(rgba(99,102,241,0.08) 1px, transparent 1px), linear-gradient(90deg, rgba(99,102,241,0.08) 1px, transparent 1px); background-size: 36px 36px; border-radius: 24px;"></div>
                <div class="relative">
                    <div class="text-4xl">🤔</div>
                    <h2 class="mt-4 text-2xl font-bold text-slate-900 md:text-3xl">
                        Masih ada yang mau ditanyain?
                    </h2>
                    <p class="mx-auto mt-3 max-w-md text-slate-600">
                        Chat langsung via WhatsApp. Kami jawab segera — biasanya dalam 5–30 menit di jam kerja.
                    </p>
                    <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                        <a href="https://wa.me/6285524884478?text=Halo%2C+mau+tanya+soal+layanan+website"
                           target="_blank"
                           class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-emerald-500 to-green-500 px-7 py-3.5 font-semibold text-white shadow-lg shadow-emerald-500/30 transition hover:shadow-emerald-500/50">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Tanya via WhatsApp
                        </a>
                        <a href="{{ route('layanan') }}"
                           class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white px-7 py-3.5 font-semibold text-slate-900 transition hover:bg-slate-50">
                            Lihat Layanan & Harga →
                        </a>
                    </div>
                    <div class="mt-6 flex flex-wrap items-center justify-center gap-5 text-xs text-slate-500">
                        <span class="flex items-center gap-1.5"><span class="text-emerald-500">●</span> Balas dalam 5–30 menit</span>
                        <span class="flex items-center gap-1.5"><span class="text-emerald-500">●</span> Senin–Sabtu 08.00–17.00 WIB</span>
                        <span class="flex items-center gap-1.5"><span class="text-emerald-500">●</span> Konsultasi gratis</span>
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
                        <a href="{{ route('portofolio') }}" class="transition hover:text-slate-900">Portofolio</a>
                        <a href="{{ route('layanan') }}#harga" class="transition hover:text-slate-900">Harga</a>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script>
        // Search
        function searchFaq(keyword) {
            const q       = keyword.toLowerCase().trim();
            const items   = document.querySelectorAll('.faq-item');
            const groups  = document.querySelectorAll('.faq-group');
            const empty   = document.getElementById('search-empty');
            const info    = document.getElementById('search-info');
            const clear   = document.getElementById('search-clear');
            const tabs    = document.getElementById('category-tabs');

            clear.classList.toggle('hidden', q === '');
            tabs.classList.toggle('opacity-30 pointer-events-none', q !== '');

            if (q === '') {
                items.forEach(item => {
                    item.style.display = '';
                    item.open = false;
                });
                groups.forEach(g => g.style.display = '');
                empty.classList.add('hidden');
                info.classList.add('hidden');
                return;
            }

            let count = 0;
            items.forEach(item => {
                const question = item.dataset.question || '';
                const answer   = item.dataset.answer   || '';
                const match    = question.includes(q) || answer.includes(q);
                item.style.display = match ? '' : 'none';
                if (match) { item.open = true; count++; }
            });

            groups.forEach(group => {
                const visible = group.querySelectorAll('.faq-item:not([style*="display: none"])');
                group.style.display = visible.length > 0 ? '' : 'none';
            });

            empty.classList.toggle('hidden', count > 0);
            info.classList.toggle('hidden', count === 0);
            document.getElementById('search-count').textContent = count;
            document.getElementById('search-keyword').textContent = keyword;
        }

        function clearSearch() {
            document.getElementById('faq-search').value = '';
            searchFaq('');
        }

        // Category scroll
        function scrollToCategory(id) {
            document.querySelectorAll('.cat-tab').forEach(btn => {
                btn.classList.remove('border-indigo-600', 'bg-indigo-600', 'text-white');
                btn.classList.add('border-slate-200', 'bg-white', 'text-slate-600');
            });
            event.currentTarget.classList.add('border-indigo-600', 'bg-indigo-600', 'text-white');
            event.currentTarget.classList.remove('border-slate-200', 'bg-white', 'text-slate-600');

            if (id === 'semua') {
                window.scrollTo({ top: 0, behavior: 'smooth' });
                return;
            }
            const target = document.getElementById('group-' + id);
            if (target) {
                const offset = target.getBoundingClientRect().top + window.scrollY - 100;
                window.scrollTo({ top: offset, behavior: 'smooth' });
            }
        }

        // Open by URL hash
        window.addEventListener('DOMContentLoaded', () => {
            const hash = window.location.hash.replace('#', '');
            if (hash) {
                const target = document.getElementById('group-' + hash);
                if (target) {
                    setTimeout(() => {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        target.querySelector('details')?.setAttribute('open', '');
                    }, 300);
                }
            }
        });
    </script>
@endsection
