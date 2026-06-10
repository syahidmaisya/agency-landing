@extends('layouts.app')
@section('content')
    @include('components.navbar', ['brand' => 'SB NET Studio'])

    @php
        $selectedLayanan = request('layanan');
        $layananOptions = [
            'Landing Page (1 Halaman)',
            'Company Profile',
            'Website UMKM / Bisnis Lokal',
            'Website Konveksi',
            'Website Katalog Produk (Tanpa Checkout)',
            'Toko Online (E-Commerce)',
            'Website Manajemen / Admin Panel',
            'Website Kasir (POS Online)',
            'Aplikasi Kasir (Desktop/Android)',
            'Aplikasi Mobile (Android)',
            'Website Custom',
            'Maintenance & Update',
            'Belum yakin / konsultasi dulu',
        ];
        $budgetOptions = [
            'Di bawah Rp 2 juta',
            'Rp 2 – 5 juta',
            'Rp 5 – 10 juta',
            'Rp 10 – 20 juta',
            'Di atas Rp 20 juta',
            'Belum tahu / fleksibel',
        ];
    @endphp

    <main class="bg-white text-slate-900">
        <section class="mx-auto max-w-6xl px-4 py-14">
            {{-- Header --}}
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-slate-50 px-4 py-1.5 text-sm text-slate-600">
                    <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-emerald-500"></span>
                    Konsultasi gratis, tanpa komitmen
                </span>
                <h1 class="mt-5 text-3xl font-semibold tracking-tight text-slate-900 md:text-4xl">Konsultasi Gratis</h1>
                <p class="mt-3 leading-relaxed text-slate-600">
                    Ceritakan jenis bisnis &amp; kebutuhanmu, nanti aku bantu rekomendasiin website atau aplikasi yang paling pas beserta estimasi harganya. Isi form di bawah — nanti langsung diteruskan ke WhatsApp aku.
                </p>
            </div>

            <div class="mt-10 grid gap-8 lg:grid-cols-5">
                {{-- Form --}}
                <div class="lg:col-span-3">
                    <form id="konsultasi-form" onsubmit="kirimKonsultasi(event)" class="space-y-5 rounded-3xl border border-slate-200 bg-white p-6 shadow-sm md:p-8">
                        @if($selectedLayanan)
                            <div class="rounded-xl border border-indigo-100 bg-indigo-50 px-4 py-3 text-sm text-indigo-700">
                                Layanan yang kamu pilih: <span class="font-semibold">{{ $selectedLayanan }}</span>
                            </div>
                        @endif

                        <div>
                            <label for="f-nama" class="block text-sm font-medium text-slate-700">Nama <span class="text-rose-500">*</span></label>
                            <input id="f-nama" type="text" placeholder="Nama kamu / nama bisnis"
                                   class="mt-1 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                        </div>

                        <div>
                            <label for="f-kontak" class="block text-sm font-medium text-slate-700">No. WhatsApp kamu <span class="text-slate-400">(opsional)</span></label>
                            <input id="f-kontak" type="tel" inputmode="numeric" placeholder="08xxxxxxxxxx"
                                   class="mt-1 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                        </div>

                        <div>
                            <label for="f-bisnis" class="block text-sm font-medium text-slate-700">Jenis bisnis <span class="text-slate-400">(opsional)</span></label>
                            <input id="f-bisnis" type="text" placeholder="Contoh: konveksi, kuliner, toko fashion, jasa"
                                   class="mt-1 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                        </div>

                        <div>
                            <label for="f-layanan" class="block text-sm font-medium text-slate-700">Layanan yang diminati</label>
                            <select id="f-layanan"
                                    class="mt-1 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                                @foreach($layananOptions as $opt)
                                    <option value="{{ $opt }}" {{ $selectedLayanan === $opt ? 'selected' : '' }}>{{ $opt }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="f-budget" class="block text-sm font-medium text-slate-700">Estimasi budget <span class="text-slate-400">(opsional)</span></label>
                            <select id="f-budget"
                                    class="mt-1 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200">
                                <option value="">— Pilih kisaran —</option>
                                @foreach($budgetOptions as $opt)
                                    <option value="{{ $opt }}">{{ $opt }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="f-detail" class="block text-sm font-medium text-slate-700">Detail kebutuhan <span class="text-slate-400">(opsional)</span></label>
                            <textarea id="f-detail" rows="4" placeholder="Ceritakan fitur yang kamu mau, contoh website yang kamu suka, target selesai, dll."
                                      class="mt-1 w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-900 shadow-sm outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200"></textarea>
                        </div>

                        <button type="submit"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/25 transition hover:bg-indigo-500">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                            Kirim &amp; Lanjut ke WhatsApp
                        </button>
                        <p class="text-center text-xs text-slate-400">Tombol akan membuka WhatsApp dengan pesanmu sudah terisi otomatis. Data tidak disimpan di server.</p>
                    </form>
                </div>

                {{-- Info sidebar --}}
                <aside class="space-y-6 lg:col-span-2">
                    <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h2 class="text-base font-semibold text-slate-900">Biar konsultasi lebih cepat</h2>
                        <p class="mt-2 text-sm text-slate-600">Siapkan info ini kalau ada:</p>
                        <ul class="mt-3 space-y-2 text-sm text-slate-600">
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-indigo-500"></span> Jenis bisnis &amp; produk/jasa kamu</li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-indigo-500"></span> Contoh website yang kamu suka (kalau ada)</li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-indigo-500"></span> Konten: logo, foto, teks (kalau sudah siap)</li>
                            <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-indigo-500"></span> Target waktu selesai</li>
                        </ul>
                    </div>

                    <div class="rounded-3xl border border-emerald-100 bg-emerald-50 p-6">
                        <h2 class="text-base font-semibold text-slate-900">Mau langsung chat?</h2>
                        <p class="mt-2 text-sm text-slate-600">Boleh juga WA langsung ke nomor di bawah.</p>
                        <a href="https://wa.me/6285524884478?text=Halo%2C+mau+konsultasi+bikin+website+untuk+bisnis+saya" target="_blank" rel="noopener"
                           class="mt-4 inline-flex items-center gap-2 rounded-xl bg-emerald-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-emerald-500">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                            0855-2488-4478
                        </a>
                    </div>
                </aside>
            </div>
        </section>
    </main>

    <script>
        function kirimKonsultasi(event) {
            event.preventDefault();
            var val = function (id) {
                var el = document.getElementById(id);
                return el ? el.value.trim() : '';
            };
            var nama = val('f-nama');
            var kontak = val('f-kontak');
            var bisnis = val('f-bisnis');
            var layanan = val('f-layanan');
            var budget = val('f-budget');
            var detail = val('f-detail');

            if (!nama) {
                alert('Isi nama dulu ya 🙂');
                document.getElementById('f-nama').focus();
                return;
            }

            var NL = String.fromCharCode(10);
            var lines = [];
            lines.push('Halo SB NET Studio, saya mau konsultasi.');
            lines.push('');
            lines.push('Nama: ' + nama);
            if (kontak) lines.push('No. WhatsApp: ' + kontak);
            if (bisnis) lines.push('Jenis bisnis: ' + bisnis);
            if (layanan) lines.push('Layanan: ' + layanan);
            if (budget) lines.push('Estimasi budget: ' + budget);
            if (detail) {
                lines.push('');
                lines.push('Detail kebutuhan:');
                lines.push(detail);
            }

            var pesan = lines.join(NL);
            var url = 'https://wa.me/6285524884478?text=' + encodeURIComponent(pesan);
            window.open(url, '_blank');
        }
    </script>
@endsection