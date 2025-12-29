<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JARIPOS - Aplikasi Kasir Modern</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1', // Indigo primary
                            600: '#4f46e5',
                            900: '#312e81',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar for elegance */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c7c7c7; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #a0a0a0; }
    </style>
</head>
<body class="font-sans text-slate-600 antialiased bg-white">

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-brand-600 rounded-lg flex items-center justify-center text-white font-bold text-xl">J</div>
                    <span class="font-bold text-2xl text-slate-900 tracking-tight">JARIPOS</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#features" class="text-slate-600 hover:text-brand-600 font-medium transition">Fitur</a>
                    <a href="#pricing" class="text-slate-600 hover:text-brand-600 font-medium transition">Harga</a>
                    <a href="#contact" class="text-slate-600 hover:text-brand-600 font-medium transition">Kontak</a>
                </div>
                <div>
                    <a href="/login" class="px-5 py-2.5 rounded-full text-sm font-semibold text-white bg-brand-600 hover:bg-brand-500 transition shadow-lg shadow-brand-500/30">
                        Coba Gratis
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <section class="pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-brand-50 text-brand-600 text-sm font-semibold mb-6">
                🚀 Solusi UMKM Digital
            </span>
            <h1 class="text-4xl md:text-6xl font-bold text-slate-900 leading-tight mb-6">
                Kelola Bisnis Semudah <br>
                <span class="text-brand-600">Sentuhan Jari</span>
            </h1>
            <p class="text-lg md:text-xl text-slate-500 mb-10 max-w-2xl mx-auto">
                Aplikasi Point of Sale (POS) yang dirancang untuk kecepatan, kemudahan, dan pertumbuhan bisnis Anda. Pantau stok dan laporan real-time.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#" class="px-8 py-4 rounded-full text-white bg-slate-900 hover:bg-slate-800 transition font-semibold shadow-xl">
                    Download Sekarang
                </a>
                <a href="#" class="px-8 py-4 rounded-full text-slate-700 bg-white border border-slate-200 hover:bg-slate-50 transition font-semibold">
                    Lihat Demo
                </a>
            </div>

            <div class="mt-16 relative mx-auto max-w-5xl">
                <div class="rounded-2xl bg-slate-100 p-2 md:p-4 shadow-2xl border border-slate-200">
                    <img src="https://placehold.co/1200x800/e2e8f0/64748b?text=Dashboard+JARIPOS+Preview" alt="App Dashboard" class="rounded-xl w-full h-auto">
                </div>
                <div class="absolute -top-10 -right-10 w-24 h-24 bg-brand-500/10 rounded-full blur-2xl"></div>
                <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl"></div>
            </div>
        </div>
    </section>

    <section id="features" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Kenapa Memilih JARIPOS?</h2>
                <p class="text-slate-500 max-w-xl mx-auto">Kami menyederhanakan proses kompleks menjadi fitur yang mudah digunakan oleh siapa saja.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition duration-300 border border-slate-100">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mb-6 text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Transaksi Cepat</h3>
                    <p class="text-slate-500 leading-relaxed">Proses checkout hitungan detik. Scan barcode atau cari manual tanpa lag, pelanggan tidak perlu antre lama.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition duration-300 border border-slate-100">
                    <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-6 text-green-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Laporan Real-time</h3>
                    <p class="text-slate-500 leading-relaxed">Akses laporan penjualan, laba rugi, dan stok barang kapan saja dari mana saja melalui dashboard cloud.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition duration-300 border border-slate-100">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-6 text-purple-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Mobile Friendly</h3>
                    <p class="text-slate-500 leading-relaxed">Didesain responsif. Gunakan di tablet, smartphone, atau desktop komputer dengan pengalaman yang sama.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-slate-100">
                <div>
                    <div class="text-3xl font-bold text-brand-600">500+</div>
                    <div class="text-sm text-slate-400 mt-1">Merchant Aktif</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brand-600">10k+</div>
                    <div class="text-sm text-slate-400 mt-1">Transaksi Harian</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brand-600">99%</div>
                    <div class="text-sm text-slate-400 mt-1">Uptime Server</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-brand-600">24/7</div>
                    <div class="text-sm text-slate-400 mt-1">Support</div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Investasi Terjangkau</h2>
                <p class="text-slate-500">Pilih paket yang sesuai dengan skala bisnis Anda.</p>
            </div>

            <div class="flex flex-col md:flex-row justify-center gap-8 max-w-5xl mx-auto">
                <div class="flex-1 bg-white border border-slate-200 rounded-2xl p-8 hover:border-brand-300 transition">
                    <h3 class="text-lg font-semibold text-slate-900">Starter</h3>
                    <div class="my-4">
                        <span class="text-4xl font-bold text-slate-900">Gratis</span>
                    </div>
                    <p class="text-sm text-slate-500 mb-6">Cocok untuk usaha rintisan kecil.</p>
                    <ul class="space-y-3 mb-8 text-sm text-slate-600">
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 1 Outlet</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Laporan Harian</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> 100 Produk</li>
                    </ul>
                    <a href="#" class="block w-full py-3 text-center rounded-lg border border-slate-200 text-slate-700 font-semibold hover:bg-slate-50 transition">Daftar Sekarang</a>
                </div>

                <div class="flex-1 bg-slate-900 text-white rounded-2xl p-8 transform md:-translate-y-4 shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 bg-brand-500 text-xs font-bold px-3 py-1 rounded-bl-lg">POPULAR</div>
                    <h3 class="text-lg font-semibold text-slate-100">Pro Business</h3>
                    <div class="my-4">
                        <span class="text-4xl font-bold">Rp 99rb</span>
                        <span class="text-slate-400 text-sm">/bulan</span>
                    </div>
                    <p class="text-sm text-slate-400 mb-6">Untuk toko yang sedang berkembang.</p>
                    <ul class="space-y-3 mb-8 text-sm text-slate-300">
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Unlimited Outlet</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Laporan Lengkap & Export</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Unlimited Produk</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-brand-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Manajemen Stok</li>
                    </ul>
                    <a href="#" class="block w-full py-3 text-center rounded-lg bg-brand-600 text-white font-bold hover:bg-brand-500 transition shadow-lg shadow-brand-500/50">Mulai Trial 14 Hari</a>
                </div>

                <div class="flex-1 bg-white border border-slate-200 rounded-2xl p-8 hover:border-brand-300 transition">
                    <h3 class="text-lg font-semibold text-slate-900">Enterprise</h3>
                    <div class="my-4">
                        <span class="text-4xl font-bold text-slate-900">Custom</span>
                    </div>
                    <p class="text-sm text-slate-500 mb-6">Solusi khusus untuk franchise besar.</p>
                    <ul class="space-y-3 mb-8 text-sm text-slate-600">
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> API Integration</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Priority Support</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Custom Features</li>
                    </ul>
                    <a href="#" class="block w-full py-3 text-center rounded-lg border border-slate-200 text-slate-700 font-semibold hover:bg-slate-50 transition">Hubungi Sales</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-600">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Siap Mengembangkan Bisnis Anda?</h2>
            <p class="text-brand-100 text-lg mb-10">Bergabunglah dengan ratusan pebisnis lain yang telah beralih ke digital bersama JARIPOS.</p>
            <a href="/login" class="inline-block px-10 py-4 bg-white text-brand-600 font-bold rounded-full shadow-lg hover:bg-slate-50 hover:scale-105 transition transform">
                Daftar Gratis Sekarang
            </a>
        </div>
    </section>

    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-1">
                <span class="text-white font-bold text-2xl">JARIPOS</span>
                <p class="mt-4 text-sm">Aplikasi kasir (POS) modern untuk memudahkan operasional bisnis UMKM di Indonesia.</p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Produk</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Fitur</a></li>
                    <li><a href="#" class="hover:text-white transition">Harga</a></li>
                    <li><a href="#" class="hover:text-white transition">Hardware</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Perusahaan</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                    <li><a href="#" class="hover:text-white transition">Karir</a></li>
                    <li><a href="#" class="hover:text-white transition">Blog</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Hubungi Kami</h4>
                <ul class="space-y-2 text-sm">
                    <li>hello@jaripos.id</li>
                    <li>+62 812 3456 7890</li>
                    <li>Semarang, Indonesia</li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 mt-12 pt-8 border-t border-slate-800 text-center text-sm">
            &copy; <?php echo e(date('Y')); ?> JARIPOS. All rights reserved.
        </div>
    </footer>

</body>
</html><?php /**PATH /var/www/resources/views/landing/index.blade.php ENDPATH**/ ?>