<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Caesar Vior Byrnanda | Project Manager')</title>
    <meta name="description" content="@yield('meta_description', 'Portfolio Caesar Vior Byrnanda — Project Manager, Fullstack Developer, dan DevOps fokus pada delivery yang jelas dan sistem yang stabil.')">
    <meta name="keywords" content="Caesar Vior Byrnanda, Project Manager, Laravel, DevOps, Portfolio">
    <meta name="author" content="Caesar Vior Byrnanda">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('civra-icon.png') }}" type="image/png">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Caesar Vior Byrnanda | Project Manager')">
    <meta property="og:description" content="@yield('meta_description', 'Project Manager, Fullstack Developer, dan DevOps.')">
    <meta property="og:site_name" content="Caesar Portfolio">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f4f4f2] text-neutral-900 antialiased font-sans min-h-screen flex flex-col">
    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-neutral-950 text-neutral-400 py-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 flex flex-wrap items-center justify-between gap-4 text-sm">
            <p class="font-semibold text-white">Caesar Vior Byrnanda</p>
            <p>&copy; {{ date('Y') }} — Project Manager · Laravel · DevOps</p>
        </div>
    </footer>

    @stack('scripts')
</body>

</html>
