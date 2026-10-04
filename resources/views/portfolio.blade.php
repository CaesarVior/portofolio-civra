@extends('layouts.app')

@section('title', 'Caesar Vior Byrnanda | Project Manager')

@section('content')
    <article class="bg-[#f4f4f2] text-neutral-900 antialiased selection:bg-neutral-900 selection:text-white">
        @php
            $experiences = [
                [
                    'company' => 'Technology Consultant',
                    'role' => 'Technology Consultant & Digitalization Partner',
                    'period' => '2026 — Now',
                    'scope' =>
                        'Membantu bisnis memahami masalah, menentukan prioritas, dan memilih solusi digital yang sesuai kebutuhan.',
                ],
                [
                    'company' => 'SMK Negeri 9 Malang',
                    'role' => 'Competition Mentor',
                    'period' => '2026',
                    'scope' =>
                        'Membimbing tim dalam persiapan kompetisi hingga berhasil meraih prestasi di bidang teknologi.',
                ],
                [
                    'company' => 'Student Exchange Program',
                    'role' => 'Technical Mentor',
                    'period' => '2025',
                    'scope' =>
                        'Membagikan dasar PHP Native, Kodular, dan IoT untuk membantu peserta memahami dan membangun proyek teknologi.',
                ],
                [
                    'company' => 'Venturo',
                    'role' => 'IT Intern',
                    'period' => '2024 — 2025',
                    'scope' =>
                        'Terlibat dalam pengembangan dan operasional proyek digital sekaligus belajar mengelola kebutuhan teknologi dalam lingkungan profesional.',
                ],
                [
                    'company' => 'KV Sepang, Malaysia',
                    'role' => 'Student Exchange Participant',
                    'period' => '2024',
                    'scope' =>
                        'Mendapat pengalaman belajar dan berkolaborasi dalam lingkungan pendidikan internasional selama program pertukaran pelajar.',
                ],
                [
                    'company' => 'Senvada',
                    'role' => 'Founder & Leader',
                    'period' => '2023 — 2025',
                    'scope' =>
                        'Mendirikan dan memimpin komunitas teknologi dengan membangun program belajar, mentoring, dan kolaborasi antaranggota.',
                ],
                [
                    'company' => 'Malang Youth Innovation Awards',
                    'role' => 'Gold Medalist — Technology Innovation',
                    'period' => '2023',
                    'scope' =>
                        'Meraih medali emas melalui pengembangan inovasi teknologi dalam kompetisi tingkat Malang.',
                ],
            ];
            $capabilities = [
                [
                    'title' => 'KONSULTASI DIGITAL',
                    'desc' => 'Mengidentifikasi kebutuhan bisnis dan menentukan solusi digital yang tepat.',
                ],
                [
                    'title' => 'SISTEM & BACKEND',
                    'desc' => 'Pengembangan sistem, database, API, dan aplikasi berbasis Laravel.',
                ],
                [
                    'title' => 'PENGELOLAAN PROYEK',
                    'desc' => 'Mengelola kebutuhan, scope, koordinasi, hingga proyek siap digunakan.',
                ],
                [
                    'title' => 'DEVOPS & DEPLOYMENT',
                    'desc' => 'Server, CI/CD, Docker, dan deployment aplikasi ke lingkungan produksi.',
                ],
            ];
        @endphp

        <section id="hero-section" class="bg-white overflow-hidden">
            <header id="navbar-sticky"
                class="fixed top-0 left-0 w-full z-50 transform -translate-y-full transition-transform duration-300 ease-in-out bg-white/80 backdrop-blur-md border-b border-neutral-100/80 shadow-sm">
                <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
                    <div
                        class="flex items-center gap-2.5 px-3.5 py-1.5 bg-neutral-100/80 rounded-full border border-neutral-200/50 text-[11px] font-medium text-neutral-700">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        Terbuka untuk Proyek Baru
                    </div>
                    <nav class="hidden md:flex items-center gap-8 text-xs font-semibold text-neutral-800 tracking-wide">
                        <a href="#work" class="hover:text-black transition">
                            Portfolio <span class="text-neutral-400 font-normal">[4]</span>
                        </a>

                        <a href="#capabilities" class="hover:text-black transition">
                            Keahlian <span class="text-neutral-400 font-normal">[4]</span>
                        </a>

                        <a href="#experience" class="hover:text-black transition">
                            Pengalaman <span class="text-neutral-400 font-normal">[3y+]</span>
                        </a>

                        <a href="#contact" class="hover:text-black transition">
                            Kontak
                        </a>
                    </nav>
                    <a href="#contact"
                        class="group bg-neutral-900 text-white px-5 py-2.5 rounded-full font-semibold text-xs hover:bg-neutral-800 transition flex items-center gap-2 shadow-md">
                        <span>Mari Berdiskusi</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                            class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5 group-hover:-translate-y-0.5">
                            <path d="M7 17L17 7" />
                            <path d="M7 7h10v10" />
                        </svg>
                    </a>
                </div>
            </header>
            <div id="hero-content"
                class="relative min-h-screen bg-[#fafafa] text-neutral-900 flex flex-col justify-between overflow-hidden font-sans pt-12 z-10">
                <div class="hero-top-bar w-full max-w-7xl mx-auto px-6 pt-4 flex justify-between items-center z-20">
                    <div
                        class="flex items-center gap-2.5 px-4 py-2 bg-white rounded-full shadow-sm border border-neutral-100 text-xs font-medium text-neutral-700">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        Terbuka untuk Proyek Baru
                    </div>
                    <a href="#contact"
                        class="group bg-neutral-900 text-white px-5 py-2.5 rounded-full font-semibold text-xs hover:bg-neutral-800 transition flex items-center gap-2 shadow-md">
                        <span>Mari Berdiskusi</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
                            class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5 group-hover:-translate-y-0.5">
                            <path d="M7 17L17 7" />
                            <path d="M7 7h10v10" />
                        </svg>
                    </a>
                </div>
                <div
                    class="relative w-full max-w-7xl mx-auto px-6 flex-1 flex flex-col justify-center items-center my-4 z-10">
                    <div class="relative w-full text-center select-none flex flex-col items-center justify-center">
                        <h1
                            class="hero-title font-extrabold uppercase tracking-tight text-[11vw] sm:text-[10vw] lg:text-[9.5rem] leading-none flex flex-col items-center justify-center">
                            <div class="w-full flex items-center justify-center gap-4 sm:gap-8 relative z-0">
                                <span class="inline-block text-transparent" style="-webkit-text-stroke: 2px #171717;">
                                    Caesar
                                </span>
                                <span class="inline-block text-neutral-900">
                                    Vior
                                </span>
                            </div>
                            <div class="relative z-20 -mt-3 sm:-mt-6 lg:mt-2">
                                <span class="relative z-20 text-white font-extrabold drop-shadow-lg"
                                    style="-webkit-text-stroke: 2.5px #171717; paint-order: stroke fill;">
                                    Byrnanda
                                </span>
                            </div>
                        </h1>
                        <div
                            class="hero-image absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 w-[240px] sm:w-[320px] lg:w-[380px] pointer-events-none">
                            <img src="{{ asset('images/civra-photo.png') }}" alt="Caesar Vior Byrnanda"
                                class="w-full h-auto object-contain drop-shadow-2xl mx-auto">
                        </div>

                    </div>
                </div>
                <div
                    class="hero-footer w-full max-w-7xl mx-auto px-6 pb-12 pt-4 z-30 grid grid-cols-1 md:grid-cols-2 items-end gap-8 relative">
                    <div class="max-w-md space-y-4">
                        <p class="text-xs font-semibold uppercase tracking-[0.3em] text-neutral-400">
                            Project Manager · Fullstack · DevOps
                        </p>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-neutral-900 tracking-tight leading-tight">
                            Mengutamakan Eksekusi, dari Konsep hingga Selesai.
                        </h2>
                        <p class="text-neutral-500 text-sm leading-relaxed">
                            Saya mengubah kebutuhan bisnis menjadi sistem yang jalan: rencana yang jelas, teknologi yang
                            tepat, rilis yang terukur.
                        </p>
                        <div class="pt-2">
                            <a href="#contact"
                                class="inline-flex items-center gap-2 bg-neutral-900 text-white px-6 py-3.5 rounded-full font-medium text-xs hover:bg-neutral-800 transition shadow-lg">
                                Let's collaborate <span>↗</span>
                            </a>
                        </div>
                    </div>
                    <div class="hero-socials relative z-30 flex flex-col items-start md:items-end gap-3">
                        <a href="https://instagram.com/civrabusiness" target="_blank" rel="noopener noreferrer"
                            class="w-36 flex items-center gap-3 px-4 py-2.5 bg-white border border-neutral-200/80 rounded-full text-xs font-medium text-neutral-800 shadow-sm hover:border-neutral-400 hover:shadow-md transition">
                            <svg class="w-4 h-4 text-neutral-700 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                            <span>Instagram</span>
                        </a>
                        <a href="https://threads.com/@civrabusiness" target="_blank" rel="noopener noreferrer"
                            class="w-36 flex items-center gap-3 px-4 py-2.5 bg-white border border-neutral-200/80 rounded-full text-xs font-medium text-neutral-800 shadow-sm hover:border-neutral-400 hover:shadow-md transition">
                            <svg class="w-4 h-4 text-neutral-700 shrink-0" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948s.928 1.509 1.005 2.644q.492.207.905.484c1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 1 13.987 1 7.994 1 2.034 4.482 0 8.044 0 9.69 0 13.55.243 15 5.036l-1.36.353C12.516 1.974 10.163 1.43 8.006 1.43c-3.565 0-5.582 2.171-5.582 6.79 0 4.143 2.254 6.343 5.63 6.343 2.777 0 4.847-1.443 4.847-3.556 0-1.438-1.208-2.127-1.27-2.127-.236 1.234-.868 3.31-3.644 3.31-1.618 0-3.013-1.118-3.013-2.582 0-2.09 1.984-2.847 3.55-2.847.586 0 1.294.04 1.663.114 0-.637-.54-1.728-1.9-1.728-1.25 0-1.566.405-1.967.868ZM8.716 8.19c-2.04 0-2.304.87-2.304 1.416 0 .878 1.043 1.168 1.6 1.168 1.02 0 2.067-.282 2.232-2.423a6.2 6.2 0 0 0-1.528-.161" />
                            </svg>
                            <span>Threads</span>
                        </a>
                        <a href="https://wa.me/62895361722121?text=Halo%20Caesar," target="_blank" rel="noopener noreferrer"
                            class="w-36 flex items-center gap-3 px-4 py-2.5 bg-white border border-neutral-200/80 rounded-full text-xs font-medium text-neutral-800 shadow-sm hover:border-neutral-400 hover:shadow-md transition">
                            <svg class="w-4 h-4 text-neutral-700 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.031 0C5.396 0 .012 5.385.012 12.02c0 2.121.552 4.19 1.602 6.012L0 24l6.147-1.611A11.97 11.97 0 0012.031 24c6.634 0 12.019-5.385 12.019-12.02C24.05 5.385 18.665 0 12.031 0zm0 22.022a9.98 9.98 0 01-5.093-1.393l-.365-.217-3.642.955.972-3.551-.238-.379a9.982 9.982 0 01-1.536-5.417c0-5.529 4.498-10.027 10.028-10.027 5.528 0 10.026 4.498 10.026 10.027 0 5.529-4.498 10.022-10.152 10.022zm5.503-7.525c-.302-.151-1.787-.882-2.064-.983-.277-.101-.479-.151-.68.151-.202.302-.781.983-.957 1.185-.176.201-.353.226-.655.075s-1.277-.47-2.433-1.501c-.9-.803-1.508-1.794-1.684-2.096-.176-.302-.019-.465.132-.615.136-.135.302-.353.453-.529.151-.176.201-.302.302-.504.101-.201.05-.377-.025-.529-.075-.151-.68-1.639-.932-2.243-.245-.589-.494-.509-.68-.518-.176-.008-.377-.008-.578-.008s-.528.075-.805.377c-.277.302-1.057 1.033-1.057 2.52 0 1.486 1.082 2.92 1.233 3.122.151.201 2.129 3.251 5.159 4.558.72.311 1.282.497 1.72.637.723.23 1.38.197 1.9.12.58-.087 1.787-.73 2.039-1.434.252-.704.252-1.308.176-1.434-.075-.126-.277-.202-.579-.353z" />
                            </svg>
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="relative z-20 border-y border-neutral-200 py-4 overflow-hidden bg-white">
                <div
                    class="marquee flex gap-12 whitespace-nowrap text-2xl font-bold uppercase tracking-tight text-neutral-300 w-max">
                    @foreach (array_merge($capabilities, $capabilities, $capabilities) as $cap)
                        <span>{{ $cap['title'] }} <span class="text-neutral-200">/</span></span>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="work" class="py-24">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <div class="reveal flex items-end justify-between flex-wrap gap-4">
                    <h2 class="text-5xl sm:text-6xl font-bold uppercase tracking-tight"><span
                            class="text-neutral-400">/</span>Portfolio</h2>
                    <p class="text-neutral-500 max-w-sm text-sm leading-relaxed">Project yang saya kelola sekaligus bangun
                        —
                        dari planning, arsitektur, hingga deployment dan serah terima.</p>
                </div>

                <div class="mt-14 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @forelse ($projects as $project)
                        @php $modalId = 'project-' . $project->id; @endphp
                        <article
                            class="reveal group bg-white border border-neutral-200 rounded-[1.75rem] overflow-hidden hover:shadow-2xl hover:shadow-neutral-900/10 hover:-translate-y-1 transition-all duration-300">
                            <div class="relative h-52 bg-neutral-100 overflow-hidden">
                                @if ($project->banner_image)
                                    <img src="{{ asset($project->banner_image) }}" alt="{{ $project->title }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                @else
                                    <div class="w-full h-full grid place-items-center text-4xl font-bold text-neutral-300">
                                        {{ mb_substr($project->title, 0, 1) }}</div>
                                @endif
                                <button type="button" data-project-modal="{{ $modalId }}"
                                    class="absolute bottom-4 right-4 w-11 h-11 rounded-full bg-white shadow-lg grid place-items-center hover:bg-neutral-900 hover:text-white transition">↗</button>
                            </div>
                            <div class="p-6">
                                <p class="text-xs uppercase tracking-[0.25em] text-neutral-400">{{ $project->category }}
                                </p>
                                <h3 class="text-xl font-bold mt-2 leading-snug">{{ $project->title }}</h3>
                                <div class="flex flex-wrap gap-2 mt-4">
                                    @foreach (array_slice($project->tags ?? [], 0, 3) as $tag)
                                        <span
                                            class="text-xs border border-neutral-200 rounded-full px-3 py-1 text-neutral-500">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </article>
                        <div id="{{ $modalId }}"
                            class="fixed inset-0 z-50 hidden flex items-center justify-center bg-neutral-950/60 backdrop-blur-sm p-4 transition-opacity duration-300 opacity-0">
                            <div
                                class="modal-card max-w-3xl w-full mx-auto bg-white rounded-[2rem] overflow-hidden shadow-2xl transform transition-all duration-300 scale-95 opacity-0 max-h-[85vh] flex flex-col relative">
                                <button type="button" data-project-close
                                    class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-white/80 backdrop-blur-md border border-neutral-200/60 flex items-center justify-center hover:bg-neutral-900 hover:text-white transition shadow-md">✕</button>
                                <div class="overflow-y-auto w-full custom-scrollbar">
                                    <div
                                        class="relative w-full aspect-[16/9] bg-neutral-100 overflow-hidden border-b border-neutral-100">
                                        @if ($project->banner_image)
                                            <img src="{{ asset($project->banner_image) }}" alt="{{ $project->title }}"
                                                class="w-full h-full object-cover object-top">
                                        @else
                                            <div
                                                class="w-full h-full grid place-items-center text-6xl font-bold text-neutral-300">
                                                {{ mb_substr($project->title, 0, 1) }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="p-6 sm:p-8">
                                        <p class="text-xs uppercase tracking-[0.3em] font-semibold text-neutral-400">
                                            {{ $project->category }}
                                        </p>
                                        <h3 class="text-2xl sm:text-3xl font-bold mt-1 tracking-tight text-neutral-900">
                                            {{ $project->title }}
                                        </h3>
                                        @if (!empty($project->tags))
                                            <div class="flex flex-wrap gap-2 mt-4">
                                                @foreach ($project->tags as $tag)
                                                    <span
                                                        class="text-xs font-medium border border-neutral-200 bg-neutral-50 rounded-full px-3 py-1 text-neutral-600">
                                                        {{ $tag }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        @endif
                                        <p class="mt-5 text-sm sm:text-base text-neutral-600 leading-relaxed">
                                            {{ $project->description }}
                                        </p>
                                        @if (!empty($project->features))
                                            <div class="mt-6 border-t border-neutral-100 pt-5">
                                                <h4
                                                    class="text-xs font-bold uppercase tracking-wider text-neutral-400 mb-3">
                                                    Key Features</h4>
                                                <ul class="space-y-2.5">
                                                    @foreach ($project->features as $feature)
                                                        <li class="flex items-start gap-3 text-sm text-neutral-700">
                                                            <span class="text-neutral-900 font-bold shrink-0">—</span>
                                                            <span>{{ $feature }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        @if ($project->link)
                                            <div class="mt-8 pt-4 border-t border-neutral-100">
                                                <a href="{{ Str::startsWith($project->link, ['http://', 'https://']) ? $project->link : 'https://' . $project->link }}"
                                                    target="_blank" rel="noopener"
                                                    class="inline-flex items-center gap-2.5 bg-neutral-900 text-white px-6 py-3 rounded-full text-sm font-semibold hover:bg-neutral-800 hover:gap-3 transition-all duration-300 shadow-sm">
                                                    <span>Jelajahi Proyek</span>
                                                    <svg class="w-4 h-4 text-white/80 shrink-0" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                                    </svg>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-neutral-500">Belum ada project.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <section id="capabilities" class="py-24 bg-white border-y border-neutral-200">
            <div class="max-w-7xl mx-auto px-6 lg:px-10">
                <h2 class="reveal text-5xl sm:text-6xl font-bold uppercase tracking-tight"><span
                        class="text-neutral-400">/</span>Keahlian</h2>
                <div class="mt-12 divide-y divide-neutral-200 border-t-2 border-b-2 border-neutral-900">
                    @foreach ($capabilities as $cap)
                        <div
                            class="reveal grid md:grid-cols-[1fr_2fr_auto] gap-4 md:gap-10 items-baseline py-7 group hover:bg-neutral-50 px-2 transition">
                            <h3
                                class="text-2xl sm:text-3xl font-bold uppercase tracking-tight group-hover:translate-x-2 transition-transform">
                                {{ $cap['title'] }}</h3>
                            <p class="text-neutral-500">{{ $cap['desc'] }}</p>
                            <span
                                class="hidden md:block text-xl group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">↗</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="experience" class="py-24 bg-neutral-950 text-white">
            <div class="max-w-6xl mx-auto px-6 lg:px-10">
                <div class="reveal flex items-end justify-between flex-wrap gap-4">
                    <h2 class="text-5xl sm:text-6xl font-bold uppercase tracking-tight"><span
                            class="text-outline-light">/</span>Pengalaman</h2>
                    <p class="text-neutral-400 text-sm">Pengelolaan proyek, pengembangan sistem, dan kepemimpinan teknis.
                    </p>
                </div>
                <div class="mt-12 divide-y divide-white/10 border-t border-b border-white/10">
                    @foreach ($experiences as $exp)
                        <div class="reveal grid md:grid-cols-[2fr_2fr_1fr] gap-2 md:gap-8 py-7">
                            <p class="font-semibold text-lg">{{ $exp['company'] }}</p>
                            <div>
                                <p class="text-white">{{ $exp['role'] }}</p>
                                <p class="text-sm text-neutral-500 mt-1">{{ $exp['scope'] }}</p>
                            </div>
                            <p class="text-neutral-400 text-sm md:text-right">{{ $exp['period'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="contact" class="py-28">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <span
                    class="reveal inline-flex items-center gap-2 text-xs font-medium border border-neutral-200 rounded-full px-4 py-2 bg-white/80 backdrop-blur-sm shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    Terbuka untuk Proyek Baru
                </span>
                <h2 class="reveal text-5xl sm:text-7xl font-bold uppercase tracking-tight mt-8 leading-[0.95]">
                    Punya ide <br> proyek?
                </h2>
                <p class="reveal text-neutral-500 mt-6 max-w-xl mx-auto leading-relaxed">
                    Ceritakan goal-nya — saya bantu susun scope, timeline, dan eksekusinya sampai rilis.
                </p>
                <div class="reveal flex flex-wrap justify-center items-center gap-4 mt-10">
                    <a href="mailto:civrabusiness@gmail.com"
                        class="inline-flex items-center gap-3 bg-neutral-900 text-white px-7 py-4 rounded-full font-semibold hover:bg-neutral-800 transition shadow-md group">
                        <svg class="w-5 h-5 shrink-0 transition-transform group-hover:scale-110" viewBox="0 0 24 24">
                            <path fill="#4285F4"
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                            <path fill="#34A853"
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                            <path fill="#FBBC05"
                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" />
                            <path fill="#EA4335"
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" />
                        </svg>
                        <span>Hubungi Saya</span>
                        <svg class="w-4 h-4 opacity-70 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>
                    </a>
                    <a href="https://wa.me/62895361722121?text=Halo%20Caesar,%20saya%20ingin%20diskusi%20proyek"
                        target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-3 bg-white border border-neutral-300 px-7 py-4 rounded-full font-semibold text-neutral-800 hover:border-emerald-500 hover:shadow-md transition group">
                        <svg class="w-5 h-5 text-[#25D366] shrink-0 transition-transform group-hover:scale-110"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.031 0C5.396 0 .012 5.385.012 12.02c0 2.121.552 4.19 1.602 6.012L0 24l6.147-1.611A11.97 11.97 0 0012.031 24c6.634 0 12.019-5.385 12.019-12.02C24.05 5.385 18.665 0 12.031 0zm0 22.022a9.98 9.98 0 01-5.093-1.393l-.365-.217-3.642.955.972-3.551-.238-.379a9.982 9.982 0 01-1.536-5.417c0-5.529 4.498-10.027 10.028-10.027 5.528 0 10.026 4.498 10.026 10.027 0 5.529-4.498 10.022-10.152 10.022zm5.503-7.525c-.302-.151-1.787-.882-2.064-.983-.277-.101-.479-.151-.68.151-.202.302-.781.983-.957 1.185-.176.201-.353.226-.655.075s-1.277-.47-2.433-1.501c-.9-.803-1.508-1.794-1.684-2.096-.176-.302-.019-.465.132-.615.136-.135.302-.353.453-.529.151-.176.201-.302.302-.504.101-.201.05-.377-.025-.529-.075-.151-.68-1.639-.932-2.243-.245-.589-.494-.509-.68-.518-.176-.008-.377-.008-.578-.008s-.528.075-.805.377c-.277.302-1.057 1.033-1.057 2.52 0 1.486 1.082 2.92 1.233 3.122.151.201 2.129 3.251 5.159 4.558.72.311 1.282.497 1.72.637.723.23 1.38.197 1.9.12.58-.087 1.787-.73 2.039-1.434.252-.704.252-1.308.176-1.434-.075-.126-.277-.202-.579-.353z" />
                        </svg>
                        <span>WhatsApp</span>
                    </a>
                    <a href="https://github.com/CaesarVior" target="_blank" rel="noopener"
                        class="inline-flex items-center gap-3 bg-white border border-neutral-300 px-7 py-4 rounded-full font-semibold text-neutral-800 hover:border-neutral-900 hover:shadow-md transition group">
                        <svg class="w-5 h-5 text-[#181717] shrink-0 transition-transform group-hover:scale-110"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                        </svg>
                        <span>GitHub</span>
                        <svg class="w-4 h-4 text-neutral-400 group-hover:text-neutral-900 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                        </svg>
                    </a>
                </div>
                <div class="reveal flex flex-wrap justify-center gap-3 mt-12 text-sm text-neutral-600">
                    <span
                        class="border border-neutral-200 bg-white/60 backdrop-blur-sm rounded-full px-4 py-2 font-medium">Caesar
                        Vior Byrnanda</span>
                    <span
                        class="border border-neutral-200 bg-white/60 backdrop-blur-sm rounded-full px-4 py-2 font-medium">Project
                        Manager</span>
                    <span
                        class="border border-neutral-200 bg-white/60 backdrop-blur-sm rounded-full px-4 py-2 font-medium">Laravel
                        · DevOps</span>
                </div>
            </div>
        </section>
    </article>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const navbar = document.getElementById('navbar-sticky');
                if (navbar) {
                    window.addEventListener('scroll', () => {
                        if (window.scrollY > 80) {
                            navbar.classList.remove('-translate-y-full');
                            navbar.classList.add('translate-y-0');
                        } else {
                            navbar.classList.remove('translate-y-0');
                            navbar.classList.add('-translate-y-full');
                        }
                    });
                }

                document.querySelectorAll('[data-project-modal]').forEach((trigger) => {
                    trigger.addEventListener('click', (e) => {
                        e.preventDefault();
                        const targetId = trigger.getAttribute('data-project-modal');
                        const modal = document.getElementById(targetId);

                        if (modal) {
                            const modalCard = modal.querySelector('.modal-card');
                            modal.classList.remove('hidden');
                            document.body.classList.add('overflow-hidden');
                            requestAnimationFrame(() => {
                                modal.classList.remove('opacity-0');
                                if (modalCard) {
                                    modalCard.classList.remove('scale-95', 'opacity-0');
                                    modalCard.classList.add('scale-100', 'opacity-100');
                                }
                            });
                        }
                    });
                });
                document.querySelectorAll('.fixed[id^="project-"]').forEach((modal) => {
                    modal.addEventListener('click', (event) => {
                        if (event.target === modal) {
                            closeModalWithAnimation(modal);
                        }
                    });
                    const closeButtons = modal.querySelectorAll('[data-project-close]');
                    closeButtons.forEach((btn) => {
                        btn.addEventListener('click', () => {
                            closeModalWithAnimation(modal);
                        });
                    });
                });

                function closeModalWithAnimation(modal) {
                    const modalCard = modal.querySelector('.modal-card');
                    modal.classList.add('opacity-0');
                    if (modalCard) {
                        modalCard.classList.remove('scale-100', 'opacity-100');
                        modalCard.classList.add('scale-95', 'opacity-0');
                    }
                    setTimeout(() => {
                        modal.classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                    }, 300);
                }

                const revealObserver = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) entry.target.classList.add('active');
                    });
                }, {
                    threshold: 0.12,
                    rootMargin: '0px 0px -60px 0px'
                });

                document.querySelectorAll('.reveal').forEach((el) => revealObserver.observe(el));
                if (typeof gsap !== 'undefined') {
                    gsap.registerPlugin(ScrollTrigger);
                    const tlIn = gsap.timeline({
                        defaults: {
                            ease: "power3.out",
                            duration: 0.8
                        },
                        onComplete: () => {
                            gsap.set(
                                ".hero-top-bar, .hero-title span, .hero-image, .hero-footer, .hero-socials a", {
                                    clearProps: "transform,opacity"
                                });

                            gsap.to("#hero-content", {
                                scrollTrigger: {
                                    trigger: "#hero-section",
                                    start: "bottom 40%",
                                    end: "bottom top",
                                    scrub: true,
                                    invalidateOnRefresh: true
                                },
                                yPercent: -10,
                                opacity: 0,
                                ease: "none"
                            });
                        }
                    });

                    tlIn.from(".hero-top-bar", {
                            y: -20,
                            opacity: 0
                        })
                        .from(".hero-title span", {
                            y: 40,
                            opacity: 0,
                            stagger: 0.1
                        }, "-=0.4")
                        .from(".hero-image", {
                            y: 40,
                            opacity: 0
                        }, "-=0.6")
                        .from(".hero-footer", {
                            y: 20,
                            opacity: 0
                        }, "-=0.5")
                        .from(".hero-socials a", {
                            opacity: 0,
                            y: 15,
                            stagger: 0.08
                        }, "-=0.4");
                }
            });
        </script>
    @endpush
@endsection
