@extends('layouts.app')

@section('content')
    @include('components.navbar', ['brand' => 'SB NET Studio'])

    @php
        $services = [
            [
                'category' => 'Website',
                'title' => 'Landing Page (1 Halaman)',
                'subtitle' => 'Satu halaman untuk promosi & iklan.',
                'price' => 'Mulai Rp 1.500.000 – 3.000.000',
                'duration' => 'Estimasi 3–5 hari',
                'image' => 'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=600&q=80',
                'desc' => 'Satu halaman fokus closing: struktur jelas, tombol WhatsApp, dan siap dipakai promosi.',
                'deliverables' => ['1 halaman scroll + tombol WhatsApp', 'Desain mobile-friendly', 'Domain .com + hosting tahun pertama', 'Source code + panduan pakai'],
                'detail' => [
                    'overview' => 'Landing page adalah halaman tunggal yang dirancang untuk satu tujuan: bikin pengunjung mengambil aksi — chat WA, isi form, atau klik tombol. Aku fokus bikin halamannya rapi, cepat, dan enak dibuka di HP.',
                    'suitable_for' => ['Promosi produk/jasa lewat satu link', 'Bisnis baru yang mau tampil online cepat', 'Promo atau event terbatas waktu', 'UMKM yang baru mulai go digital'],
                    'price_tiers' => [
                        ['name' => 'Basic', 'price' => 'Rp 1.500.000', 'includes' => ['1 halaman scroll', 'Desain dari template', 'Tombol WhatsApp', 'Mobile responsive', 'Domain + hosting tahun 1']],
                        ['name' => 'Standar', 'price' => 'Rp 2.200.000', 'includes' => ['Semua di Basic', 'Desain semi-custom', 'Form pesan/lead', 'Animasi scroll ringan', 'Galeri foto/produk']],
                        ['name' => 'Premium', 'price' => 'Rp 3.000.000', 'includes' => ['Semua di Standar', 'Desain full custom', 'Section tambahan', 'Setup email bisnis (opsional)', 'Revisi hingga 3x']],
                    ],
                    'process' => ['Konsultasi kebutuhan & isi halaman', 'Susun struktur & konten', 'Desain tampilan', 'Pasang & testing', 'Online + serah terima (source code)'],
                    'notes' => 'Sudah termasuk domain (.com) + hosting tahun pertama. Aku fokus pembuatan website, bukan jasa iklan/SEO. Konten (foto & teks) disiapkan klien — bisa aku bantu rapikan.',
                ],
            ],
            [
                'category' => 'Website',
                'title' => 'Company Profile',
                'subtitle' => 'Untuk bisnis yang ingin terlihat kredibel.',
                'price' => 'Mulai Rp 3.000.000 – 7.000.000',
                'duration' => 'Estimasi 7–14 hari',
                'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80',
                'desc' => 'Website profesional untuk profil bisnis: layanan, portofolio, dan kontak yang rapi.',
                'deliverables' => ['5 halaman (Home, About, Layanan, Portofolio, Kontak)', 'Tombol WhatsApp + form kontak', 'Galeri/portofolio (grid)', 'Domain + hosting tahun pertama'],
                'detail' => [
                    'overview' => 'Company profile adalah wajah digital bisnis kamu yang bekerja 24 jam. Calon klien bisa langsung lihat layanan, portofolio, dan kontak — semua tersusun rapi dan meyakinkan.',
                    'suitable_for' => ['Bisnis/brand yang butuh kehadiran digital profesional', 'Kontraktor, konsultan, agensi, atau firma', 'Bisnis yang pitching ke klien korporat', 'Usaha yang mau tampil lebih serius'],
                    'price_tiers' => [
                        ['name' => 'Basic', 'price' => 'Rp 3.000.000', 'includes' => ['5 halaman standar', 'Template desain premium', 'Form kontak + WA', 'Mobile responsive', 'Domain + hosting tahun 1']],
                        ['name' => 'Standar', 'price' => 'Rp 5.000.000', 'includes' => ['Semua di Basic', 'Desain semi-custom', 'Halaman portofolio (grid + filter)', 'Section testimoni', 'Galeri foto']],
                        ['name' => 'Premium', 'price' => 'Rp 7.000.000', 'includes' => ['Semua di Standar', 'Desain full custom', 'Animasi & micro-interaction', 'Halaman blog/artikel (opsional)', 'Revisi hingga 5x']],
                    ],
                    'process' => ['Konsultasi & kumpulkan aset (logo, foto, teks)', 'Sitemap & wireframe', 'Desain UI semua halaman', 'Development + isi konten', 'Review + revisi', 'Online + serah terima + cara update'],
                    'notes' => 'Termasuk domain + hosting tahun pertama. Konten (foto & teks) disiapkan klien. Aku fokus pembuatan website, bukan jasa marketing/SEO.',
                ],
            ],
            [
                'category' => 'Website',
                'title' => 'Website UMKM / Bisnis Lokal',
                'subtitle' => 'Pas untuk kuliner, bengkel, toko, jasa lokal.',
                'price' => 'Mulai Rp 2.000.000 – 4.500.000',
                'duration' => 'Estimasi 5–10 hari',
                'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&q=80',
                'desc' => 'Tampilan rapi + info lengkap supaya pelanggan gampang percaya dan gampang kontak.',
                'deliverables' => ['Profil + layanan/produk', 'Lokasi (peta) + jam operasional', 'Testimoni + galeri', 'Domain + hosting tahun pertama'],
                'detail' => [
                    'overview' => 'Biar pelanggan lokal gampang nemuin bisnis kamu. Website ini dibuat simpel, cepat dibuka di HP, dan fokus bikin orang mau kontak atau datang langsung.',
                    'suitable_for' => ['Kuliner: warung, kafe, katering, toko kue', 'Jasa: bengkel, laundry, salon, fotografi', 'Toko: fashion lokal, oleh-oleh, retail', 'Bisnis yang punya pelanggan di area tertentu'],
                    'price_tiers' => [
                        ['name' => 'Basic', 'price' => 'Rp 2.000.000', 'includes' => ['3–4 halaman', 'Info bisnis + lokasi peta', 'CTA WhatsApp', 'Mobile responsive', 'Domain + hosting tahun 1']],
                        ['name' => 'Standar', 'price' => 'Rp 3.200.000', 'includes' => ['Semua di Basic', 'Galeri produk/menu', 'Testimoni pelanggan', 'Jam operasional + hari libur', 'Link ke sosial media']],
                        ['name' => 'Premium', 'price' => 'Rp 4.500.000', 'includes' => ['Semua di Standar', 'Desain custom sesuai brand', 'Form booking/reservasi (opsional)', 'Halaman tambahan', 'Revisi hingga 3x']],
                    ],
                    'process' => ['Konsultasi kebutuhan & lokasi bisnis', 'Pengumpulan aset (foto, menu, jam buka)', 'Desain + development', 'Testing di berbagai device', 'Online + serah terima'],
                    'notes' => 'Termasuk domain + hosting tahun pertama. Aku fokus pembuatan website, bukan pengelolaan iklan/SEO.',
                ],
            ],
            [
                'category' => 'Website',
                'title' => 'Website Konveksi',
                'subtitle' => 'Khusus konveksi: katalog + request penawaran.',
                'price' => 'Mulai Rp 3.500.000 – 7.000.000',
                'duration' => 'Estimasi 7–14 hari',
                'image' => 'https://images.unsplash.com/photo-1558769132-cb1aea458c5e?w=600&q=80',
                'desc' => 'Bikin calon klien yakin: tampilkan bahan, sample, MOQ, size chart, dan proses produksi.',
                'deliverables' => ['Katalog produk/jasa konveksi', 'Size chart + MOQ + jenis bahan', 'Form "Request Penawaran" + WA', 'Domain + hosting tahun pertama'],
                'detail' => [
                    'overview' => 'Konveksi butuh website yang menjawab pertanyaan calon klien sebelum mereka nanya: bisa bahan apa? minimum order berapa? ada size chart? Semua ditampilkan rapi + ada form request penawaran yang langsung ke WA.',
                    'suitable_for' => ['Konveksi kaos, seragam, jaket, tas, topi', 'Sablon & bordir custom', 'Supplier bahan tekstil', 'Bisnis yang terima order B2B / partai besar'],
                    'price_tiers' => [
                        ['name' => 'Basic', 'price' => 'Rp 3.500.000', 'includes' => ['Halaman utama + layanan', 'Katalog produk (list)', 'Info MOQ + bahan', 'Form request penawaran', 'Domain + hosting tahun 1']],
                        ['name' => 'Standar', 'price' => 'Rp 5.500.000', 'includes' => ['Semua di Basic', 'Galeri produksi + portofolio order', 'Size chart interaktif', 'Testimoni klien', 'Halaman tambahan']],
                        ['name' => 'Premium', 'price' => 'Rp 7.000.000', 'includes' => ['Semua di Standar', 'Desain full custom', 'Kalkulasi estimasi harga (form)', 'Halaman proses produksi', 'Revisi hingga 5x']],
                    ],
                    'process' => ['Konsultasi produk & target klien', 'Kumpulkan foto produk & galeri produksi', 'Desain UI sesuai brand konveksi', 'Development + form penawaran', 'Testing + online'],
                    'notes' => 'Termasuk domain + hosting tahun pertama. Foto produk & galeri produksi sangat menentukan hasil — kalau belum ada, aku bisa bantu saran pengambilan foto.',
                ],
            ],
            [
                'category' => 'Website',
                'title' => 'Website Katalog Produk (Tanpa Checkout)',
                'subtitle' => 'Produk tampil rapi, pesan via WhatsApp.',
                'price' => 'Mulai Rp 2.500.000 – 5.000.000',
                'duration' => 'Estimasi 5–10 hari',
                'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600&q=80',
                'desc' => 'Cocok untuk grosir/konveksi/produk custom: customer lihat katalog lalu order via WA.',
                'deliverables' => ['Halaman list + detail produk', 'CTA "Pesan via WhatsApp" (auto format)', 'Kategori produk (opsional)', 'Domain + hosting tahun pertama'],
                'detail' => [
                    'overview' => 'Kalau produkmu banyak variannya dan ordernya lewat diskusi dulu (nego harga, pilih warna, ukuran), katalog tanpa checkout lebih praktis dari toko online. Pembeli lihat, pilih, lalu langsung WA dengan pesan yang sudah terformat.',
                    'suitable_for' => ['Grosir/distributor yang negosiasi harga', 'Produk custom (konveksi, souvenir, furnitur)', 'Bisnis yang belum butuh pembayaran online', 'Brand lokal yang jual via WA/reseller'],
                    'price_tiers' => [
                        ['name' => 'Basic', 'price' => 'Rp 2.500.000', 'includes' => ['List produk (max 30 item)', 'Halaman detail produk', 'CTA WA auto-format', 'Mobile responsive', 'Domain + hosting tahun 1']],
                        ['name' => 'Standar', 'price' => 'Rp 3.800.000', 'includes' => ['Semua di Basic', 'Kategori & filter produk', 'Multi-foto per produk', 'Halaman "Cara Order"', 'Search produk']],
                        ['name' => 'Premium', 'price' => 'Rp 5.000.000', 'includes' => ['Semua di Standar', 'Produk unlimited', 'CMS kelola produk sendiri', 'Halaman tambahan', 'Revisi hingga 3x']],
                    ],
                    'process' => ['Konsultasi jumlah & kategori produk', 'Input data produk (nama, foto, deskripsi, harga)', 'Desain layout katalog', 'Development + setup WA auto-format', 'Testing + online'],
                    'notes' => 'Termasuk domain + hosting tahun pertama. Paket Basic & Standar produk diinput oleh tim; Premium dilengkapi CMS agar kamu bisa tambah produk sendiri.',
                ],
            ],
            [
                'category' => 'Website',
                'title' => 'Toko Online (E-Commerce)',
                'subtitle' => 'Untuk yang butuh keranjang & checkout.',
                'price' => 'Mulai Rp 6.000.000 – 15.000.000',
                'duration' => 'Estimasi 21–30 hari',
                'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600&q=80',
                'desc' => 'Full fitur jualan: produk, keranjang, checkout, dan manajemen pesanan.',
                'deliverables' => ['Katalog + keranjang + checkout', 'Admin kelola produk & order', 'Pembayaran/ongkir (opsional)', 'Domain + hosting tahun pertama'],
                'detail' => [
                    'overview' => 'Toko online lengkap dengan sistem keranjang, checkout, dan admin panel untuk kelola pesanan. Cocok untuk bisnis yang siap jual mandiri tanpa konfirmasi satu per satu lewat WA.',
                    'suitable_for' => ['Brand fashion, kosmetik, skincare, makanan', 'Bisnis yang jual produk fisik online', 'Usaha yang mau lepas dari ketergantungan marketplace', 'Bisnis dengan volume order tinggi'],
                    'price_tiers' => [
                        ['name' => 'Starter', 'price' => 'Rp 6.000.000', 'includes' => ['Katalog + cart + checkout', 'Admin kelola produk & order', 'Manajemen stok basic', 'Mobile responsive', 'Domain + hosting tahun 1']],
                        ['name' => 'Profesional', 'price' => 'Rp 10.000.000', 'includes' => ['Semua di Starter', 'Integrasi payment gateway (Midtrans/Xendit)', 'Kalkulasi ongkir otomatis', 'Notifikasi WhatsApp/email', 'Diskon & kupon']],
                        ['name' => 'Enterprise', 'price' => 'Rp 15.000.000', 'includes' => ['Semua di Profesional', 'Multi-kategori & varian produk', 'Ulasan & rating produk', 'Laporan penjualan (dashboard)', 'Revisi hingga 5x + training admin']],
                    ],
                    'process' => ['Konsultasi fitur & alur pemesanan', 'Desain UI', 'Development sistem + database', 'Integrasi payment & ongkir', 'Testing end-to-end', 'Online + training admin'],
                    'notes' => 'Termasuk domain + hosting tahun pertama. Biaya payment gateway dikenakan penyedia (Midtrans/Xendit), bukan aku. Untuk traffic tinggi disarankan upgrade hosting/VPS.',
                ],
            ],
            [
                'category' => 'Web App',
                'title' => 'Website Manajemen / Admin Panel',
                'subtitle' => 'Dashboard + kelola data + laporan.',
                'price' => 'Mulai Rp 5.000.000 – 15.000.000',
                'duration' => 'Estimasi 14–30 hari',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80',
                'desc' => 'Untuk kebutuhan internal: kelola data lebih rapi daripada Excel/WA.',
                'deliverables' => ['Login + hak akses (role)', 'CRUD data (tambah/edit/hapus)', 'Filter + search + halaman', 'Domain + hosting tahun pertama'],
                'detail' => [
                    'overview' => 'Capek kelola data di Excel yang sering bentrok? Website manajemen bisa jadi solusi: tim akses dari mana saja, data terpusat, dan ada catatan siapa mengubah apa. Lebih rapi, aman, dan efisien.',
                    'suitable_for' => ['Tim yang masih pakai Excel/Sheets untuk operasional', 'Bisnis yang butuh absensi/pemesanan/inventori', 'Perusahaan yang mau digitalisasi proses internal', 'Startup awal yang butuh tools custom cepat'],
                    'price_tiers' => [
                        ['name' => 'Basic', 'price' => 'Rp 5.000.000', 'includes' => ['Login + 1 role', 'CRUD 1–2 modul data', 'Filter + search + pagination', 'Desain panel standar', 'Domain + hosting tahun 1']],
                        ['name' => 'Standar', 'price' => 'Rp 9.000.000', 'includes' => ['Semua di Basic', 'Multi-role (admin, staf)', 'Dashboard statistik/grafik', 'Export PDF & Excel', 'Log aktivitas user']],
                        ['name' => 'Premium', 'price' => 'Rp 15.000.000', 'includes' => ['Semua di Standar', '3–5 modul data', 'Notifikasi sistem (email/WA)', 'Laporan & rekap otomatis', 'Training tim + dokumentasi']],
                    ],
                    'process' => ['Pemetaan kebutuhan & alur kerja tim', 'Desain database & wireframe', 'Development per modul', 'Testing oleh tim internal (UAT)', 'Online + training penggunaan'],
                    'notes' => 'Dibangun dengan Laravel + MySQL, termasuk domain + hosting tahun pertama. Bisa juga dihosting di server perusahaan kamu. Datamu privat, tidak disimpan di server pribadiku.',
                ],
            ],
            [
                'category' => 'Kasir',
                'title' => 'Website Kasir (POS Online)',
                'subtitle' => 'Kasir berbasis web, akses dari mana saja.',
                'price' => 'Mulai Rp 4.000.000 – 9.000.000',
                'duration' => 'Estimasi 14–25 hari',
                'image' => 'https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?w=600&q=80',
                'desc' => 'Catat transaksi, kelola stok, dan lihat laporan penjualan — semua terpusat lewat browser.',
                'deliverables' => ['Input transaksi + cetak struk', 'Manajemen produk & stok', 'Laporan penjualan harian', 'Domain + hosting tahun pertama'],
                'detail' => [
                    'overview' => 'Sistem kasir berbasis web yang bisa dibuka dari laptop, komputer kasir, atau tablet. Catat transaksi, kelola stok, dan pantau laporan penjualan dari mana saja karena datanya terpusat di cloud.',
                    'suitable_for' => ['Toko retail, minimarket, ATK', 'Kafe, warung, kedai', 'Outlet dengan banyak produk', 'Bisnis yang mau lepas dari catat manual'],
                    'price_tiers' => [
                        ['name' => 'Basic', 'price' => 'Rp 4.000.000', 'includes' => ['Kasir + cetak struk', 'Produk & kategori', 'Stok dasar', 'Laporan harian', 'Domain + hosting tahun 1']],
                        ['name' => 'Standar', 'price' => 'Rp 6.500.000', 'includes' => ['Semua di Basic', 'Multi-user (kasir/admin)', 'Manajemen stok lengkap', 'Laporan periode + export', 'Diskon & varian harga']],
                        ['name' => 'Premium', 'price' => 'Rp 9.000.000', 'includes' => ['Semua di Standar', 'Multi-outlet', 'Dashboard pemilik', 'Struk thermal', 'Training + dokumentasi']],
                    ],
                    'process' => ['Konsultasi alur kasir', 'Desain database & tampilan', 'Development sistem', 'Testing transaksi', 'Online + training kasir'],
                    'notes' => 'Termasuk domain + hosting tahun pertama. Bisa dipakai di perangkat apa pun yang punya browser. Printer struk thermal opsional (hardware disiapkan klien).',
                ],
            ],
            [
                'category' => 'Kasir',
                'title' => 'Aplikasi Kasir (Desktop / Android)',
                'subtitle' => 'Kasir yang bisa jalan offline.',
                'price' => 'Mulai Rp 5.000.000 – 12.000.000',
                'duration' => 'Estimasi 21–35 hari',
                'image' => 'https://images.unsplash.com/photo-1556740758-90de374c12ad?w=600&q=80',
                'desc' => 'Aplikasi kasir yang diinstall di Android atau komputer, tetap jalan walau internet mati.',
                'deliverables' => ['Aplikasi kasir (Android/desktop)', 'Bisa jalan offline', 'Cetak struk + kelola stok', 'File aplikasi (APK) + panduan'],
                'detail' => [
                    'overview' => 'Aplikasi kasir yang diinstall langsung di HP Android atau komputer. Bisa dipakai walau internet mati (offline), lalu sinkron saat online. Cocok untuk yang butuh kasir cepat dan tidak selalu ada internet.',
                    'suitable_for' => ['Warung/toko dengan koneksi internet terbatas', 'Food stall, booth, bazar keliling', 'Bisnis yang butuh kasir cepat di HP', 'Outlet yang sering offline'],
                    'price_tiers' => [
                        ['name' => 'Basic', 'price' => 'Rp 5.000.000', 'includes' => ['Aplikasi Android (APK)', 'Transaksi + struk', 'Produk & stok', 'Mode offline', 'Laporan dasar']],
                        ['name' => 'Standar', 'price' => 'Rp 8.000.000', 'includes' => ['Semua di Basic', 'Versi desktop juga', 'Sinkron online (cloud)', 'Multi-user', 'Laporan + export']],
                        ['name' => 'Premium', 'price' => 'Rp 12.000.000', 'includes' => ['Semua di Standar', 'Multi-outlet sinkron', 'Dashboard pemilik (web)', 'Backup otomatis', 'Training + dokumentasi']],
                    ],
                    'process' => ['Konsultasi kebutuhan & perangkat', 'Desain alur & database', 'Development aplikasi', 'Testing di perangkat target', 'Serah terima APK/installer + training'],
                    'notes' => 'Termasuk domain + hosting untuk sinkronisasi (paket online). Publikasi ke Play Store opsional (butuh akun developer milik klien). Aku fokus pembuatan aplikasinya, bukan marketing.',
                ],
            ],
            [
                'category' => 'Mobile',
                'title' => 'Aplikasi Mobile (Android)',
                'subtitle' => 'Aplikasi custom sesuai kebutuhan bisnis.',
                'price' => 'Mulai Rp 8.000.000 – 25.000.000+',
                'duration' => 'Estimasi 30–60 hari',
                'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600&q=80',
                'desc' => 'Aplikasi Android custom: katalog, pemesanan, membership, atau tools internal.',
                'deliverables' => ['Aplikasi Android sesuai kebutuhan', 'Desain UI aplikasi', 'Backend + API (jika perlu)', 'File APK + dokumentasi'],
                'detail' => [
                    'overview' => 'Aplikasi mobile custom untuk kebutuhan bisnismu — misalnya katalog, pemesanan, membership, atau internal tools. Dibangun sesuai alur yang kamu mau, bukan template.',
                    'suitable_for' => ['Bisnis yang butuh aplikasi sendiri', 'Layanan dengan membership/akun user', 'Internal tools untuk tim lapangan', 'Produk digital berbasis aplikasi'],
                    'price_tiers' => [
                        ['name' => 'Small', 'price' => 'Rp 8.000.000 – 12.000.000', 'includes' => ['1–2 fitur utama', 'Desain UI', 'Aplikasi Android', 'Testing + APK', 'Estimasi 30–40 hari']],
                        ['name' => 'Medium', 'price' => 'Rp 12.000.000 – 18.000.000', 'includes' => ['3–5 fitur', 'Login & akun user', 'Backend + API', 'Admin panel web', 'Estimasi 40–50 hari']],
                        ['name' => 'Large', 'price' => 'Rp 18.000.000 – 25.000.000+', 'includes' => ['Fitur kompleks', 'Integrasi pihak ketiga', 'Notifikasi push', 'Dashboard lengkap', 'Estimasi 50–60 hari']],
                    ],
                    'process' => ['Discovery: fitur & alur aplikasi', 'Proposal + estimasi', 'Desain UI (di-approve dulu)', 'Development bertahap', 'Testing + serah terima APK'],
                    'notes' => 'Harga estimasi, final setelah diskusi kebutuhan. iOS bisa ditambahkan dengan biaya terpisah. Upload ke Play Store/App Store butuh akun developer milik klien.',
                ],
            ],
            [
                'category' => 'Custom',
                'title' => 'Website Custom',
                'subtitle' => 'Desain & fitur sesuai kebutuhan spesifik.',
                'price' => 'Mulai Rp 5.000.000 – 25.000.000+',
                'duration' => 'Estimasi 14–45 hari',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80',
                'desc' => 'Website dibangun dari nol sesuai kebutuhan — bukan template, bukan copy-paste.',
                'deliverables' => ['Desain UI/UX custom', 'Development full-custom (Laravel/Next.js)', 'Fitur sesuai kebutuhan spesifik', 'Domain + hosting tahun pertama'],
                'detail' => [
                    'overview' => 'Kalau kebutuhanmu tidak masuk kategori manapun — ada fitur unik, alur khusus, atau integrasi sistem tertentu — ini solusinya. Mulai dari nol: diskusi kebutuhan, wireframe, desain, lalu development penuh.',
                    'suitable_for' => ['Bisnis dengan alur/fitur unik & tidak standar', 'Platform marketplace atau direktori bisnis', 'Website dengan login & dashboard member', 'Integrasi API pihak ketiga (ERP, CRM, POS)'],
                    'price_tiers' => [
                        ['name' => 'Small', 'price' => 'Rp 5.000.000 – 10.000.000', 'includes' => ['Fitur custom 1–2 modul', 'Desain UI/UX', 'Development Laravel/Next.js', 'Domain + hosting tahun 1', 'Estimasi 14–21 hari']],
                        ['name' => 'Medium', 'price' => 'Rp 10.000.000 – 18.000.000', 'includes' => ['Fitur custom 3–5 modul', 'Desain UI/UX lengkap', 'Admin panel + user role', 'Integrasi API (1–2 layanan)', 'Estimasi 21–35 hari']],
                        ['name' => 'Large', 'price' => 'Rp 18.000.000 – 25.000.000+', 'includes' => ['Fitur custom tak terbatas', 'Arsitektur skalabel', 'Multi-role management', 'Integrasi API kompleks', 'Estimasi 35–45 hari']],
                    ],
                    'process' => ['Discovery session: kebutuhan, fitur, alur sistem', 'Proposal + estimasi biaya & waktu', 'Desain UI/UX (di-approve dulu)', 'Development iteratif (per modul)', 'Testing menyeluruh (UAT)', 'Online + dokumentasi + training'],
                    'notes' => 'Termasuk domain + hosting tahun pertama. Aku fokus pembuatan & development, bukan jasa marketing/SEO. Harga final setelah sesi diskusi kebutuhan.',
                ],
            ],
            [
                'category' => 'Support',
                'title' => 'Maintenance & Update',
                'subtitle' => 'Biar website tetap aman & up-to-date.',
                'price' => 'Mulai Rp 300.000 – 750.000 / bulan',
                'duration' => 'Bulanan',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80',
                'desc' => 'Bantuan update konten, backup, perbaikan minor, dan perpanjangan domain/hosting.',
                'deliverables' => ['Update konten ringan', 'Backup berkala', 'Perbaikan bug minor', 'Bantuan perpanjangan domain & hosting'],
                'detail' => [
                    'overview' => 'Website bukan barang sekali jadi. Perlu di-update kontennya, dipantau, dan diperbaiki kalau ada bug. Paket maintenance ini biar kamu fokus ke bisnis tanpa pusing urusan teknis.',
                    'suitable_for' => ['Website aktif yang kontennya sering berubah', 'Bisnis yang tidak punya tim IT internal', 'Website toko online / web app yang butuh pemantauan', 'Siapa saja yang mau website-nya tetap aman'],
                    'price_tiers' => [
                        ['name' => 'Basic', 'price' => 'Rp 300.000/bln', 'includes' => ['Update konten ringan (max 3x/bln)', 'Backup manual (2x/bln)', 'Perbaikan bug minor', 'Response WA dalam 24 jam']],
                        ['name' => 'Standar', 'price' => 'Rp 500.000/bln', 'includes' => ['Semua di Basic', 'Update konten max 8x/bln', 'Backup otomatis mingguan', 'Pantau website aktif', 'Update library']],
                        ['name' => 'Premium', 'price' => 'Rp 750.000/bln', 'includes' => ['Semua di Standar', 'Update konten unlimited', 'Backup harian otomatis', 'Cek keamanan bulanan', 'Priority response (maks 4 jam)']],
                    ],
                    'process' => ['Audit kondisi website saat ini (gratis)', 'Pilih paket sesuai kebutuhan', 'Sepakati kontrak bulanan/tahunan', 'Mulai pemantauan & update rutin'],
                    'notes' => 'Kontrak minimal 3 bulan. Diskon 10% untuk pembayaran tahunan. Termasuk bantuan perpanjangan domain & hosting (biaya domain/hosting menyusul harga penyedia). Perbaikan besar (fitur baru, redesain) dihitung terpisah.',
                ],
            ],
        ];
    @endphp

    <div class="min-h-screen bg-white text-slate-900">
        <main class="mx-auto max-w-6xl px-4 py-14">
            <div class="flex flex-col gap-3 md:flex-row md:items-end md:justify-between">
                <div>
                    <p class="text-sm font-semibold text-indigo-600">Layanan</p>
                    <h1 class="mt-2 text-3xl font-semibold tracking-tight text-slate-900 md:text-4xl">
                        Jasa Pembuatan Website & Aplikasi
                    </h1>
                    <p class="mt-3 max-w-2xl leading-relaxed text-slate-600">
                        Aku fokus <span class="font-medium text-slate-900">bikin websitenya</span> — dari landing page, company profile, toko online, sistem manajemen, kasir, sampai aplikasi. Bukan jasa marketing/SEO/iklan. Klik kartu untuk lihat detail & harga.
                    </p>
                </div>
                <a href="{{ route('konsultasi') }}"
                   class="shrink-0 rounded-xl bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-indigo-500/25 transition hover:bg-indigo-500">
                    Konsultasi
                </a>
            </div>

            {{-- Semua paket sudah termasuk --}}
            <div class="mt-8 rounded-3xl border border-slate-200 bg-slate-50 p-5 md:p-6">
                <div class="text-sm font-semibold text-slate-900">Semua paket sudah termasuk:</div>
                <div class="mt-3 grid gap-2.5 text-sm text-slate-600 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach([
                        ['icon' => '🌐', 'text' => 'Domain .com (tahun pertama)'],
                        ['icon' => '☁️', 'text' => 'Hosting (tahun pertama)'],
                        ['icon' => '🔒', 'text' => 'SSL / HTTPS (gembok hijau)'],
                        ['icon' => '📱', 'text' => 'Tampilan mobile-friendly'],
                        ['icon' => '💾', 'text' => 'Source code jadi milik kamu'],
                        ['icon' => '📘', 'text' => 'Panduan pakai + bantuan setelah online'],
                    ] as $inc)
                        <div class="flex items-center gap-2.5 rounded-xl border border-slate-200 bg-white px-3 py-2.5">
                            <span>{{ $inc['icon'] }}</span>
                            <span>{{ $inc['text'] }}</span>
                        </div>
                    @endforeach
                </div>
                <p class="mt-3 text-xs text-slate-500">
                    Perpanjangan domain & hosting tahun berikutnya menyesuaikan harga penyedia (kira-kira Rp 350.000–500.000/tahun untuk skala UMKM).
                </p>
            </div>

            <div class="mt-10 grid gap-4 md:grid-cols-2">
                @foreach($services as $index => $s)
                    <article
                        onclick="openModal({{ $index }})"
                        class="group cursor-pointer overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm transition-all duration-200 hover:-translate-y-0.5 hover:border-slate-300 hover:shadow-xl hover:shadow-slate-900/5">
                        <div class="grid md:grid-cols-5">
                            <div class="md:col-span-2">
                                <img
                                    src="{{ $s['image'] }}"
                                    alt="{{ $s['title'] }}"
                                    class="h-48 w-full object-cover md:h-full"
                                    loading="lazy"
                                />
                            </div>
                            <div class="p-6 md:col-span-3">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="rounded-full border border-slate-200 bg-slate-50 px-3 py-1 text-xs font-medium text-slate-600">
                                        {{ $s['category'] }}
                                    </span>
                                    <span class="text-xs text-slate-500">{{ $s['duration'] }}</span>
                                </div>
                                <h2 class="mt-3 text-xl font-semibold tracking-tight text-slate-900">{{ $s['title'] }}</h2>
                                <p class="mt-1 text-sm text-slate-500">{{ $s['subtitle'] }}</p>
                                <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ $s['desc'] }}</p>
                                <div class="mt-4 rounded-2xl border border-slate-200 bg-slate-50 p-4">
                                    <div class="text-xs text-slate-500">Harga</div>
                                    <div class="mt-1 text-base font-semibold text-slate-900">{{ $s['price'] }}</div>
                                </div>
                                <div class="mt-4 flex items-center justify-between">
                                    <ul class="space-y-1.5 text-xs text-slate-500">
                                        @foreach(array_slice($s['deliverables'], 0, 2) as $d)
                                            <li class="flex gap-1.5">
                                                <span class="text-emerald-500">✓</span> {{ $d }}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <span class="shrink-0 text-xs font-semibold text-indigo-600 transition group-hover:translate-x-0.5">Lihat detail →</span>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <section class="mt-14">
                <div class="rounded-3xl border border-indigo-100 bg-gradient-to-br from-indigo-50 to-cyan-50 p-8 md:flex md:items-center md:justify-between">
                    <div>
                        <div class="text-sm text-slate-600">Biar lebih cepat cocok</div>
                        <div class="mt-1 text-xl font-semibold tracking-tight text-slate-900">
                            Kirim kebutuhan kamu (jenis bisnis + fitur) biar aku rekomendasiin paket yang paling pas.
                        </div>
                    </div>
                    <a href="{{ route('konsultasi') }}"
                       class="mt-5 inline-flex shrink-0 justify-center rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/25 transition hover:bg-indigo-500 md:mt-0">
                        Konsultasi Gratis
                    </a>
                </div>
            </section>
        </main>

        {{-- Modal Detail --}}
        <div id="modal-overlay"
             class="fixed inset-0 z-[100] hidden items-center justify-center bg-slate-900/50 p-4 backdrop-blur-sm"
             onclick="handleOverlayClick(event)">
            <div id="modal-box"
                 class="relative max-h-[90vh] w-full max-w-2xl overflow-y-auto rounded-3xl border border-slate-200 bg-white shadow-2xl">
                {{-- Header gambar --}}
                <div class="relative h-48 overflow-hidden rounded-t-3xl">
                    <img id="modal-image" src="" alt="" class="h-full w-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    <button onclick="closeModal()"
                            class="absolute right-4 top-4 flex h-8 w-8 items-center justify-center rounded-full bg-black/40 text-white transition hover:bg-black/70">
                        ✕
                    </button>
                    <div class="absolute bottom-4 left-6 right-6">
                        <span id="modal-category-badge"
                              class="rounded-full border border-white/20 bg-white/15 px-3 py-1 text-xs text-white backdrop-blur"></span>
                        <h2 id="modal-title" class="mt-2 text-2xl font-semibold tracking-tight text-white"></h2>
                        <p id="modal-subtitle" class="text-sm text-slate-200"></p>
                    </div>
                </div>

                <div class="p-6 md:p-8">
                    {{-- Overview --}}
                    <p id="modal-overview" class="text-sm leading-relaxed text-slate-600"></p>

                    <div class="my-6 h-px bg-slate-200"></div>

                    {{-- Cocok untuk --}}
                    <div>
                        <div class="text-sm font-semibold text-slate-900">Cocok untuk siapa?</div>
                        <ul id="modal-suitable" class="mt-3 space-y-2 text-sm text-slate-600"></ul>
                    </div>

                    <div class="my-6 h-px bg-slate-200"></div>

                    {{-- Pilihan Paket --}}
                    <div>
                        <div class="text-sm font-semibold text-slate-900">Pilihan Paket & Harga</div>
                        <div id="modal-tiers" class="mt-3 grid gap-3 sm:grid-cols-3"></div>
                    </div>

                    <div class="my-6 h-px bg-slate-200"></div>

                    {{-- Proses --}}
                    <div>
                        <div class="text-sm font-semibold text-slate-900">Proses Pengerjaan</div>
                        <ol id="modal-process" class="mt-3 space-y-2 text-sm text-slate-600"></ol>
                    </div>

                    <div class="my-6 h-px bg-slate-200"></div>

                    {{-- Catatan --}}
                    <div class="rounded-2xl border border-amber-200 bg-amber-50 p-4">
                        <div class="text-xs font-semibold text-amber-600">📌 Catatan Penting</div>
                        <p id="modal-notes" class="mt-1 text-sm text-slate-700"></p>
                    </div>

                    {{-- Footer CTA --}}
                    <div class="mt-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <div class="flex items-center gap-2 text-sm text-slate-500">
                            <span>⏱</span>
                            <span id="modal-duration"></span>
                        </div>
                        <a id="modal-cta"
                           href="{{ route('konsultasi') }}"
                           class="inline-flex justify-center rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/25 transition hover:bg-indigo-500">
                            Konsultasi Layanan Ini →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const servicesData = @json($services);
        const konsultasiUrl = "{{ route('konsultasi') }}";

        function openModal(index) {
            const s = servicesData[index];
            const d = s.detail;

            document.getElementById('modal-image').src = s.image;
            document.getElementById('modal-image').alt = s.title;
            document.getElementById('modal-category-badge').textContent = s.category;
            document.getElementById('modal-title').textContent = s.title;
            document.getElementById('modal-subtitle').textContent = s.subtitle;
            document.getElementById('modal-overview').textContent = d.overview;
            document.getElementById('modal-duration').textContent = s.duration;
            document.getElementById('modal-cta').href = konsultasiUrl + '?layanan=' + encodeURIComponent(s.title);

            document.getElementById('modal-suitable').innerHTML = d.suitable_for.map(item => `
                <li class="flex gap-2">
                    <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-indigo-500"></span>
                    <span>${item}</span>
                </li>
            `).join('');

            document.getElementById('modal-tiers').innerHTML = d.price_tiers.map((tier, i) => `
                <div class="rounded-2xl border ${i === 1 ? 'border-indigo-300 bg-indigo-50' : 'border-slate-200 bg-slate-50'} p-4 flex flex-col">
                    ${i === 1 ? '<div class="mb-2 text-center text-xs font-semibold text-indigo-600 bg-indigo-100 rounded-full py-0.5">Paling Populer</div>' : ''}
                    <div class="text-xs font-semibold ${i === 1 ? 'text-indigo-600' : 'text-slate-500'}">${tier.name}</div>
                    <div class="mt-1 text-sm font-bold text-slate-900 leading-tight">${tier.price}</div>
                    <ul class="mt-3 space-y-1.5 text-xs text-slate-600 flex-1">
                        ${tier.includes.map(item => `
                            <li class="flex gap-1.5">
                                <span class="text-emerald-500 shrink-0">✓</span>
                                <span>${item}</span>
                            </li>
                        `).join('')}
                    </ul>
                </div>
            `).join('');

            document.getElementById('modal-process').innerHTML = d.process.map((step, i) => `
                <li class="flex gap-3 items-start">
                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-indigo-100 text-xs font-semibold text-indigo-600 mt-0.5">${i + 1}</span>
                    <span>${step}</span>
                </li>
            `).join('');

            document.getElementById('modal-notes').textContent = d.notes;

            const overlay = document.getElementById('modal-overlay');
            overlay.classList.remove('hidden');
            overlay.classList.add('flex');
            document.getElementById('modal-box').scrollTop = 0;
            document.body.style.overflow = 'hidden';
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
