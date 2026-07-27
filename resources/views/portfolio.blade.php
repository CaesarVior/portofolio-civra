@extends('layouts.app')

@section('title', 'Caesar Vior Byrnanda | Fullstack Web Developer & DevOps')
@section('content')
    @php
        $projects = [
            'decidepro' => [
                'title' => 'DecidePro - Sistem Pendukung Keputusan Teaching Factory',
                'category' => 'Decision Support System & Web App',
                'banner_image' => '/images/projects/decidepro-banner.png',
                'desc' =>
                    'Sistem Penunjang Keputusan berbasis metode Analytical Hierarchy Process (AHP) yang dirancang untuk membantu penyeleksian siswa pada program Teaching Factory di SMK Negeri 6 Malang.',
                'features' => [
                    'Penerapan algoritma Analytical Hierarchy Process (AHP) untuk kalkulasi pembobotan kriteria secara akurat.',
                    'Penilaian obyektif berbasis 3 kriteria utama: Nilai Psikologis, Nilai Semester, dan Nilai Hasil Wawancara Industri.',
                    'Manajemen data siswa dan rekapitulasi hasil seleksi secara otomatis untuk mempermudah pihak sekolah.',
                    'Antarmuka web interaktif untuk mempermudah penginputan dan visualisasi peringkat kelayakan siswa.',
                ],
                'tags' => ['Laravel', 'AHP Algorithm', 'MySQL', 'TailwindCSS'],
                'link' => 'https://github.com/',
            ],
            'adiloka' => [
                'title' => 'Adiloka Language Website & Admin Platform',
                'category' => 'Client Project & Web Platform',
                'banner_image' => '/images/projects/adiloka-banner.png',
                'desc' =>
                    'Pengembangan platform web profesional untuk client (adiloka-language.com) yang mencakup landing page publik serta admin dashboard komprehensif dengan arsitektur terpisah domain.',
                'features' => [
                    'Pemisahan arsitektur domain antara portal publik (landing page) dan admin dashboard untuk keamanan ekstra.',
                    'Sistem admin dashboard kaya fitur mencakup CRUD Multi-language, Team Management, serta Generate & Export PDF.',
                    'Otomatisasi deployment pipeline CI/CD yang terintegrasi dari lingkungan local ke VPS/Hosting.',
                    'Antarmuka yang dioptimalkan untuk performa tinggi, kemudahan navigasi, serta skalabilitas pengelolaan konten.',
                ],
                'tags' => ['Laravel', 'Multi-Language', 'CI/CD', 'VPS Hosting', 'TailwindCSS'],
                'link' => 'https://adiloka-language.com/',
            ],
            'bintaro' => [
                'title' => 'Bintaro Living Landing Page & High-SEO Platform',
                'category' => 'Client Project & SEO Optimization',
                // SEKARANG: Ganti dengan path gambar
                'banner_image' => '/images/projects/bintaro-banner.png', // Contoh path
                'desc' =>
                    'Pengembangan website landing page responsif untuk client (bintaroliving.com) yang dirancang khusus untuk performa tinggi, optimasi SEO kompleks, serta pemantauan visibilitas pencarian terpadu.',
                'features' => [
                    'Desain landing page modern dan responsif yang berfokus pada conversion rate dan user experience.',
                    'Penerapan struktur SEO kompleks (Meta Tags, Schema Markup, Dynamic Sitemap, dan Open Graph) untuk peringkat maksimal di Google.',
                    'Integrasi penuh dengan Google Search Console guna memantau kineja pencarian, indexing, dan analitik lalu lintas web.',
                    'Alur kerja CI/CD otomatis untuk efisiensi deployment berkelanjutan dari lingkungan local ke VPS/Hosting.',
                ],
                'tags' => ['SEO Optimization', 'Google Search Console', 'CI/CD', 'VPS Hosting', 'TailwindCSS'],
                'link' => 'https://bintaroliving.com/',
            ],
        ];
    @endphp
    <header
        class="relative min-h-[calc(100vh-4rem)] flex items-center bg-gradient-to-br from-slate-950 via-slate-900 to-indigo-950/40 overflow-hidden">
        <div
            class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center py-12">

            <!-- Kolom Kiri: Deskripsi & Informasi Utama -->
            <div class="lg:col-span-7 space-y-6 z-10 text-center lg:text-left">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1.5 bg-indigo-500/10 text-indigo-400 rounded-full text-xs font-semibold tracking-wide uppercase border border-indigo-500/20">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Available for Hire
                </div>

                <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight leading-tight text-white">
                    Caesar Vior Byrnanda
                </h1>

                <p class="text-lg sm:text-2xl text-indigo-200/90 font-light leading-relaxed">
                    Fullstack Web Developer <span class="text-indigo-500 font-semibold">+</span> DevOps Engineer
                </p>

                <p class="text-sm sm:text-base text-slate-400 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    Saya berfokus pada pembuatan aplikasi web modular yang responsif menggunakan ekosistem Laravel modern
                    serta mengelola otomatisasi infrastruktur server cloud (CI/CD, Docker) yang siap menangani trafik skala
                    besar.
                </p>

                <!-- Tombol CTA -->
                <div class="pt-4 flex flex-wrap justify-center lg:justify-start gap-4">
                    <a href="#portfolio"
                        class="px-6 py-3.5 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold rounded-xl shadow-lg shadow-indigo-600/30 transition-all duration-200 text-sm sm:text-base">
                        Lihat Project <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </a>
                    <a href="#kontak"
                        class="px-6 py-3.5 bg-slate-900 hover:bg-slate-800 text-slate-200 font-semibold rounded-xl border border-slate-800 transition-all duration-200 text-sm sm:text-base">
                        Hubungi Saya
                    </a>
                </div>
            </div>

            <!-- Kolom Kanan: Foto Profil (Responsive) -->
            <div class="lg:col-span-5 relative flex justify-center lg:justify-end">
                <div
                    class="relative w-72 h-72 sm:w-[420px] sm:h-[420px] lg:w-full lg:h-[550px] rounded-3xl overflow-hidden shadow-2xl border border-slate-800/50 bg-slate-900 group">
                    <!-- Efek Glow Gradient Belakang Foto -->
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-3xl blur opacity-30 group-hover:opacity-45 transition duration-1000">
                    </div>

                    <!-- Tag Gambar dengan Fallback URL jika asset belum terisi -->
                    <img src="{{ asset('images/civra-photo.png') }}" onerror="this.src='civra-photo.png'"
                        alt="Caesar Vior Byrnanda - Profile Photo"
                        class="relative  object-cover object-center transition-transform duration-500 group-hover:scale-[1.02]">
                </div>
            </div>
        </div>
    </header>

    <section id="tentang" class="py-24 bg-slate-900/20 border-y border-slate-900/60 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Deskripsi Tentang Saya -->
                <div class="space-y-6 scroll-reveal">
                    <span class="text-sm font-semibold text-indigo-500 tracking-wider uppercase">Tentang Saya</span>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-reveal">Keseimbangan Antara Kode &
                        Infrastruktur</h2>
                    <p class="text-slate-400 leading-relaxed">
                        Sebagai seorang Fullstack Developer yang juga menguasai DevOps, saya sangat mengerti alur pembuatan
                        aplikasi mulai dari analisis kebutuhan sistem, merancang database yang optimal, menyusun backend dan
                        frontend yang rapi, hingga mengotomasi deployment-nya agar performa aplikasi tetap stabil dan aman
                        saat digunakan di server produksi.
                    </p>
                    <div class="grid grid-cols-2 gap-4 pt-4">
                        <div class="p-4 bg-slate-950/80 rounded-xl border border-slate-900">
                            <div class="text-indigo-500 font-bold text-2xl mb-1">99.9%</div>
                            <div class="text-xs text-slate-400 uppercase tracking-wider">Uptime Server Target</div>
                        </div>
                        <div class="p-4 bg-slate-950/80 rounded-xl border border-slate-900">
                            <div class="text-indigo-500 font-bold text-2xl mb-1">Laravel + Docker</div>
                            <div class="text-xs text-slate-400 uppercase tracking-wider">Main Tech Stack</div>
                        </div>
                    </div>
                </div>

                <!-- Grid Keahlian -->
                <div class="space-y-6 scroll-reveal">
                    <h3 class="text-xl font-bold text-white">Teknologi yang Biasa Digunakan</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        @php
                            $skills = [
                                'Laravel' => 'fa-laravel text-red-500',
                                'PHP 8+' => 'fa-php text-indigo-400',
                                'Tailwind CSS' => 'fa-css3-alt text-sky-400',
                                'Docker' => 'fa-docker text-blue-400',
                                'Git & CI/CD' => 'fa-github text-white',
                                'Linux VPS' => 'fa-server text-emerald-400',
                            ];
                        @endphp
                        @foreach ($skills as $skill => $icon)
                            <div
                                class="p-3 bg-slate-950 border border-slate-900 rounded-xl flex items-center gap-2.5 hover:border-indigo-500/50 hover:bg-slate-900/50 transition-all cursor-default">
                                <i class="fa-brands {{ $icon }} text-lg"></i>
                                <span class="text-sm font-medium">{{ $skill }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="pendidikan" class="py-24 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-3 mb-16 scroll-reveal">
            <span class="text-sm font-semibold text-indigo-500 tracking-wider uppercase">Riwayat</span>
            <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-reveal">Pendidikan & Sertifikasi</h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-md mx-auto">Latar belakang akademis dan pembelajaran
                profesional yang saya lalui.</p>
        </div>

        <!-- Container Timeline -->
        <div class="relative border-l-2 border-slate-900 pl-8 ml-4 sm:ml-6 space-y-12">
            <!-- Item Pendidikan 1 -->
            <div class="relative scroll-reveal">
                <div class="absolute -left-[41px] top-1.5 bg-indigo-600 h-5 w-5 rounded-full border-4 border-slate-950">
                </div>
                <div
                    class="bg-slate-900/40 border border-slate-900 p-6 rounded-2xl hover:border-indigo-500/30 transition-all duration-300">
                    <span class="text-xs font-semibold text-indigo-400 uppercase tracking-wider">2025 - Sekarang</span>
                    <h3 class="font-bold text-xl text-white mt-1">S1 Teknik Informatika</h3>
                    <p class="text-sm text-slate-400 mb-2">Politeknik Negeri Malang</p>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Fokus pada rekayasa perangkat lunak, sistem terdistribusi, dan keamanan jaringan. Menyelesaikan
                        tugas akhir tentang otomasi dan optimasi server load balancing.
                    </p>
                </div>
            </div>

            <!-- Item Pendidikan 2 -->
            <div class="relative scroll-reveal">
                <div class="absolute -left-[41px] top-1.5 bg-slate-700 h-5 w-5 rounded-full border-4 border-slate-950">
                </div>
                <div
                    class="bg-slate-900/40 border border-slate-900 p-6 rounded-2xl hover:border-indigo-500/30 transition-all duration-300">
                    <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">2021 - 2025</span>
                    <h3 class="font-bold text-xl text-white mt-1">Sistem Informasi Jaringan Aplikasi (SIJA)</h3>
                    <p class="text-sm text-slate-400 mb-2">SMK Negeri 6 Malang</p>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Fokus pada pengembangan Web Development, integrasi ekosistem IoT, sistem operasi Linux dasar, serta
                        penerapan *team management* dalam pengerjaan proyek.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="py-24 bg-slate-900/10 border-t border-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 scroll-reveal">
                <div class="space-y-3">
                    <span class="text-sm font-semibold text-indigo-500 tracking-wider uppercase">Projek Terkini</span>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-reveal">Karya / Portofolio</h2>
                </div>
                <p class="text-slate-400 text-sm sm:text-base max-w-sm">Klik salah satu projek di bawah ini untuk melihat
                    detail teknis mendalam dan fitur unggulannya.</p>
            </div>

            <!-- Grid Cards Looping dari Array Blade -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $key => $project)
                    <div onclick="openProjectModal('{{ $key }}')"
                        class="bg-slate-950 rounded-2xl shadow-xl border border-slate-900 overflow-hidden flex flex-col group hover:border-indigo-500/50 hover:shadow-indigo-500/5 transition-all duration-300 cursor-pointer scroll-reveal">
                        <div
                            class="h-48 bg-indigo-950/20 relative flex items-center justify-center border-b border-slate-900 overflow-hidden">
                            <img src="{{ asset($project['banner_image']) }}" alt="{{ $project['title'] }}"
                                class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-350 select-none">
                            <div
                                class="absolute inset-0 bg-indigo-600/5 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                            <div class="space-y-2">
                                <h3 class="font-bold text-xl text-white group-hover:text-indigo-400 transition-colors">
                                    {{ $project['title'] }}
                                </h3>
                                <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">
                                    {{ $project['desc'] }}
                                </p>
                            </div>
                            <div class="flex flex-wrap gap-2 text-xs font-semibold text-indigo-400">
                                @foreach ($project['tags'] as $tag)
                                    <span
                                        class="px-2 py-1 bg-slate-900 rounded border border-slate-800">#{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div id="project-modal"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/90 backdrop-blur-md opacity-0 pointer-events-none transition-all duration-300">
        <!-- Modal Card Wrapper -->
        <div id="modal-content"
            class="bg-slate-900 border border-slate-800 rounded-3xl w-full max-w-2xl overflow-hidden shadow-2xl transform scale-95 transition-transform duration-300">
            <!-- Cover Top Modal -->
            <div
                class="h-40 bg-gradient-to-r from-indigo-900 to-indigo-950 relative p-6 flex flex-col justify-end border-b border-slate-800">
                <button onclick="closeProjectModal()"
                    class="absolute top-4 right-4 bg-slate-950/50 hover:bg-slate-950/80 text-slate-300 hover:text-white rounded-full p-2.5 transition">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
                <span id="modal-category"
                    class="text-xs font-bold text-indigo-300 uppercase tracking-widest mb-1">Kategori</span>
                <h3 id="modal-title" class="text-2xl sm:text-3xl font-extrabold text-white">Judul Projek</h3>
            </div>

            <!-- Content Detail Modal -->
            <div class="p-6 sm:p-8 space-y-6">
                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400">Deskripsi Projek</h4>
                    <p id="modal-desc" class="text-sm sm:text-base text-slate-300 leading-relaxed">Penjelasan ringkas
                        projek.</p>
                </div>

                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 font-semibold">Arsitektur &
                        Spesifikasi Teknis</h4>
                    <ul id="modal-features"
                        class="list-disc list-inside text-sm text-slate-400 space-y-1.5 leading-relaxed">
                        <!-- Dinamis via JavaScript -->
                    </ul>
                </div>

                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 font-semibold">Tags / Stack</h4>
                    <div id="modal-tags" class="flex flex-wrap gap-2 text-xs font-medium text-indigo-400"></div>
                </div>

                <!-- Footer Action Buttons -->
                <div class="pt-4 border-t border-slate-800 flex justify-end gap-3">
                    <button onclick="closeProjectModal()"
                        class="px-5 py-2.5 bg-slate-800 hover:bg-slate-700 text-slate-200 text-sm font-semibold rounded-xl transition">
                        Tutup
                    </button>
                    <a id="modal-link" href="#" target="_blank" rel="noopener"
                        class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-500 text-white text-sm font-semibold rounded-xl shadow-md shadow-indigo-600/10 transition">
                        Buka Link Website <i class="fa-solid fa-arrow-up-right-from-square ml-1.5 text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section id="kontak" class="py-24 max-w-4xl mx-auto px-4 text-center space-y-10 overflow-hidden">
        <div class="space-y-3 scroll-reveal">
            <span class="text-sm font-semibold text-indigo-500 tracking-wider uppercase">Hubungi Saya</span>
            <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-reveal">Kembangkan Project Hebat Bersama</h2>
            <p class="text-slate-400 text-sm sm:text-base max-w-lg mx-auto leading-relaxed">
                Butuh pengembang yang andal di sisi backend Laravel sekaligus mampu merancang infrastruktur server Anda
                secara otomatis? Hubungi saya melalui kanal sosial media berikut.
            </p>
        </div>

        <!-- Tombol Kontak / Medsos -->
        <div class="flex flex-wrap justify-center gap-4 pt-4 scroll-reveal">
            <a href="https://github.com/CaesarVior" target="_blank" rel="noopener"
                class="flex items-center gap-3 px-6 py-3.5 bg-slate-900 hover:bg-slate-800 text-white rounded-xl font-semibold text-sm border border-slate-800 hover:border-slate-700 transition-all duration-200">
                <i class="fa-brands fa-github text-white text-lg"></i> GitHub
            </a>
            <a href="mailto:civrabusiness@gmail.com"
                class="flex items-center gap-3 px-6 py-3.5 bg-indigo-600 hover:bg-indigo-500 text-white rounded-xl font-semibold text-sm transition-all duration-200 shadow-lg shadow-indigo-600/25">
                <i class="fa-solid fa-envelope text-lg"></i> Kirim Email
            </a>
        </div>
    </section>

    <script>
        // Parsing array PHP Blade langsung menjadi JSON Object JavaScript
        const projectsData = @json($projects);

        /**
         * Membuka Detail Project di dalam Modal
         * @param {string} key - ID Projek dalam array
         */
        function openProjectModal(key) {
            const data = projectsData[key];
            if (!data) return;

            // Mengisi konten modal secara dinamis
            document.getElementById('modal-title').innerText = data.title;
            document.getElementById('modal-category').innerText = data.category;
            document.getElementById('modal-desc').innerText = data.desc;

            // Mengisi bullet features
            const featuresContainer = document.getElementById('modal-features');
            featuresContainer.innerHTML = '';
            data.features.forEach(feat => {
                const li = document.createElement('li');
                li.className = "flex items-start gap-2 text-slate-400 text-sm";
                li.innerHTML = `<span class="text-indigo-500 font-bold shrink-0">•</span> <span>${feat}</span>`;
                featuresContainer.appendChild(li);
            });

            // Mengisi tags
            const tagsContainer = document.getElementById('modal-tags');
            tagsContainer.innerHTML = '';
            data.tags.forEach(tag => {
                const span = document.createElement('span');
                span.className = "px-2 py-1 bg-slate-950 rounded border border-slate-800";
                span.innerText = `#${tag}`;
                tagsContainer.appendChild(span);
            });

            // Mengisi link repositori
            document.getElementById('modal-link').href = data.link;

            // Memicu animasi modal (Fade In & Scale Up)
            const modal = document.getElementById('project-modal');
            const content = document.getElementById('modal-content');
            modal.classList.remove('opacity-0', 'pointer-events-none');
            content.classList.remove('scale-95');
            content.classList.add('scale-100');

            // Kunci scrolling layar belakang
            document.body.classList.add('overflow-y-hidden');
        }

        /**
         * Menutup Detail Project Modal
         */
        function closeProjectModal() {
            const modal = document.getElementById('project-modal');
            const content = document.getElementById('modal-content');

            // Memicu animasi modal keluar
            modal.classList.add('opacity-0', 'pointer-events-none');
            content.classList.remove('scale-100');
            content.classList.add('scale-95');

            // Mengembalikan scrolling layar belakang
            document.body.classList.remove('overflow-y-hidden');
        }

        // Menutup modal otomatis jika area buram di luar card diklik
        document.getElementById('project-modal').addEventListener('click', function(e) {
            if (e.target === this) closeProjectModal();
        });
    </script>

@endsection
