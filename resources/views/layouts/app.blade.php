<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- 1. SEO META TAGS DINAMIS -->
    <!-- Setiap halaman anak (child view) dapat mengisi title & description secara dinamis -->
    <title>@yield('title', 'Caesar Vior Byrnanda | Fullstack Web Developer & DevOps')</title>
    <meta name="description" content="@yield('meta_description', 'Portfolio profesional Caesar Vior Byrnanda, seorang Fullstack Web Developer dan DevOps engineer berpengalaman yang berfokus pada performa sistem & otomasi.')">
    <meta name="keywords"
        content="Caesar Vior Byrnanda, Fullstack Web Developer, DevOps, Laravel Developer, Portofolio Programmer, CI/CD, Docker, Indonesia">
    <meta name="author" content="Caesar Vior Byrnanda">
    <meta name="robots" content="index, follow">

    <!-- URL Kanonikal untuk menghindari konten duplikat di mata Google Search Console -->
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('civra-icon.png') }}" type="image/png">

    <!-- 2. OPEN GRAPH / FACEBOOK (Optimasi Share Link Sosial Media) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Caesar Vior Byrnanda | Fullstack Web Developer & DevOps')">
    <meta property="og:description" content="@yield('meta_description', 'Menjembatani kode berkualitas tinggi dengan arsitektur server yang aman, cepat, dan otomatis.')">
    <meta property="og:image" content="@yield('og_image', asset('images/caesar-vior.png'))">
    <meta property="og:site_name" content="Caesar Portfolio">

    <!-- TWITTER CARD -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Caesar Vior Byrnanda | Fullstack Web Developer & DevOps')">
    <meta name="twitter:description" content="@yield('meta_description', 'Fullstack Web Developer & DevOps Engineer.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/caesar-vior.png'))">

    <!-- 3. PRE-FETCH FONTS & ICONS (Plus Jakarta Sans & Fira Code) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Fira+Code:wght@400;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        mono: ['Fira Code', 'monospace'],
                    },
                }
            }
        }
    </script>

    <!-- 4. GLOBAL CSS STYLING & ANIMATIONS -->
    <style>
        /* Desain scrollbar premium modern */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #020617;
            /* slate-950 */
        }

        ::-webkit-scrollbar-thumb {
            background: #1e1b4b;
            /* indigo-950 */
            border-radius: 9999px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #4f46e5;
            /* indigo-600 */
        }

        /* --- ANIMASI SCROLL REVEAL (GRAY TO COLOR & SLIDE UP) --- */
        /* State awal: abu-abu redup, buram, agak bergeser ke bawah, dan skala sedikit mengecil */
        .scroll-reveal {
            opacity: 0.15;
            transform: translateY(40px) scale(0.97);
            filter: grayscale(100%) blur(1px);
            transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: transform, opacity, filter;
        }

        /* State aktif: berwarna normal, tajam, dan kembali ke posisi semula saat masuk viewport */
        .scroll-reveal.active {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: grayscale(0%) blur(0px);
        }

        /* Khusus animasi text: dari abu-abu redup (slate-500) ke putih solid */
        .text-reveal {
            color: #64748b;
            /* slate-500 */
            transition: color 1.2s ease-in-out;
        }

        .text-reveal.active {
            color: #ffffff;
        }
    </style>
</head>

<body class="bg-slate-950 text-slate-100 antialiased font-sans overflow-x-hidden min-h-screen flex flex-col">

    <!-- 5. UTILITY NAVIGATION BAR -->
    <nav class="sticky top-0 z-40 bg-slate-950/80 backdrop-blur-md border-b border-slate-900/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">

            <!-- Logo Brand -->
            <a href="#" class="font-bold text-xl tracking-tight text-indigo-500 hover:text-indigo-400 transition">
                <img src="{{ asset('civra-logo-white-new.png') }}" alt="Civra Logo" class="h-12 w-auto">
            </a>

            <!-- Menu Desktop -->
            <div class="hidden md:flex space-x-8 text-sm font-medium text-slate-400">
                <a href="#tentang" class="p-0 m-0 hover:text-white transition-colors duration-200">Tentang</a>
                <a href="#pendidikan" class="hover:text-white transition-colors duration-200">Pendidikan</a>
                <a href="#portfolio" class="hover:text-white transition-colors duration-200">Portfolio</a>
                <a href="#kontak" class="hover:text-white transition-colors duration-200">Kontak</a>
            </div>

            <!-- CTA Button Desktop -->
            <div class="hidden md:flex">
                <a href="#kontak"
                    class="px-4 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-semibold transition-all duration-200 shadow-lg shadow-indigo-600/20">
                    Hubungi Saya
                </a>
            </div>

            <!-- Hamburger Menu Button Mobile -->
            <div class="md:hidden">
                <button id="main-mobile-menu-btn"
                    class="text-slate-400 hover:text-white focus:outline-none p-1.5 rounded-lg hover:bg-slate-900 transition">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Dropdown Menu Mobile -->
        <div id="main-mobile-menu"
            class="hidden md:hidden bg-slate-950/95 backdrop-blur-lg border-b border-slate-900 px-4 pt-2 pb-4 space-y-2">
            <a href="#tentang"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:bg-slate-900 hover:text-white transition">Tentang</a>
            <a href="#pendidikan"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:bg-slate-900 hover:text-white transition">Pendidikan</a>
            <a href="#portfolio"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:bg-slate-900 hover:text-white transition">Portfolio</a>
            <a href="#kontak"
                class="block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:bg-slate-900 hover:text-white transition">Kontak</a>
        </div>
    </nav>

    <!-- 6. UTAMA CONTENT INJECTION POINT (SLOT UNTUK PORTFOLIO.BLADE.PHP) -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- 7. GLOBAL FOOTER -->
    <footer class="bg-slate-950 py-12 border-t border-slate-900 text-center text-sm text-slate-500">
        <div class="max-w-7xl mx-auto px-4 space-y-3">
            <p class="font-semibold text-indigo-500 tracking-wide">Caesar Vior Byrnanda</p>
            <p>&copy; {{ date('Y') }} Caesar Portfolio. All rights reserved. Built with Laravel, Blade & Tailwind
                CSS.</p>
        </div>
    </footer>

    <!-- 8. GLOBAL SCRIPTS -->
    <script>
        // Logika Responsif Hamburger Menu Mobile
        const mobileMenuBtn = document.getElementById('main-mobile-menu-btn');
        const mobileMenu = document.getElementById('main-mobile-menu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                // Mengubah icon Hamburger ke Close (X) jika aktif
                const icon = mobileMenuBtn.querySelector('i');
                if (mobileMenu.classList.contains('hidden')) {
                    icon.className = "fa-solid fa-bars text-xl";
                } else {
                    icon.className = "fa-solid fa-xmark text-xl";
                }
            });

            // Tutup menu otomatis jika salah satu link diklik
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    mobileMenuBtn.querySelector('i').className = "fa-solid fa-bars text-xl";
                });
            });
        }

        // INTERSECTION OBSERVER UNTUK GLOBAL ANIMASI SCROLL (GRAY-TO-WHITE)
        const observerOptions = {
            root: null, // Berdasarkan viewport browser
            threshold: 0.12, // Elemen mulai terpicu saat 12% bagiannya masuk layar
            rootMargin: "0px 0px -60px 0px" // Triggers sedikit sebelum benar-benar sejajar batas bawah
        };

        const globalObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        // Cari semua elemen dengan kelas scroll-reveal dan text-reveal untuk didaftarkan ke observer
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('.scroll-reveal, .text-reveal').forEach(el => {
                globalObserver.observe(el);
            });
        });
    </script>
</body>

</html>
