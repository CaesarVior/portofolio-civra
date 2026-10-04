<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'DecidePro - Sistem Pendukung Keputusan Teaching Factory',
                'category' => 'Decision Support System & Web App',
                'banner_image' => 'images/projects/decidepro-banner.png',
                'description' => 'Sistem penunjang keputusan berbasis metode Analytical Hierarchy Process (AHP) untuk membantu penyeleksian siswa pada program Teaching Factory di SMK Negeri 6 Malang.',
                'features' => [
                    'Penerapan algoritma AHP untuk kalkulasi pembobotan kriteria secara akurat.',
                    'Penilaian berbasis Nilai Psikologis, Nilai Semester, dan Nilai Hasil Wawancara Industri.',
                    'Manajemen data siswa dan rekapitulasi hasil seleksi otomatis.',
                    'Antarmuka web interaktif untuk input dan visualisasi peringkat kelayakan siswa.',
                ],
                'tags' => ['Laravel', 'AHP Algorithm', 'MySQL', 'TailwindCSS'],
                'link' => 'https://github.com/',
                'sort_order' => 1,
            ],
            [
                'title' => 'Adiloka Language Website & Admin Platform',
                'category' => 'Client Project & Web Platform',
                'banner_image' => 'images/projects/adiloka-banner.png',
                'description' => 'Platform web profesional untuk client (adiloka-language.com) mencakup landing page publik serta admin dashboard dengan arsitektur domain terpisah.',
                'features' => [
                    'Pemisahan arsitektur domain antara portal publik dan admin dashboard.',
                    'Admin dashboard: CRUD multi-language, team management, generate & export PDF.',
                    'Otomatisasi deployment pipeline CI/CD dari local ke VPS/hosting.',
                    'Antarmuka yang dioptimalkan untuk performa, navigasi, dan skalabilitas konten.',
                ],
                'tags' => ['Laravel', 'Multi-Language', 'CI/CD', 'VPS Hosting', 'TailwindCSS'],
                'link' => 'https://adiloka-language.com/',
                'sort_order' => 2,
            ],
            [
                'title' => 'Bintaro Living Landing Page & High-SEO Platform',
                'category' => 'Client Project & SEO Optimization',
                'banner_image' => 'images/projects/bintaro-banner.png',
                'description' => 'Landing page responsif untuk client (bintaroliving.com) dirancang untuk performa tinggi, optimasi SEO kompleks, dan pemantauan visibilitas pencarian terpadu.',
                'features' => [
                    'Landing page modern dan responsif dengan fokus conversion rate dan user experience.',
                    'Struktur SEO kompleks: meta tags, schema markup, dynamic sitemap, dan Open Graph.',
                    'Integrasi Google Search Console untuk memantau indexing dan lalu lintas web.',
                    'CI/CD otomatis untuk deployment berkelanjutan ke VPS/hosting.',
                ],
                'tags' => ['SEO Optimization', 'Google Search Console', 'CI/CD', 'VPS Hosting', 'TailwindCSS'],
                'link' => 'https://bintaroliving.com/',
                'sort_order' => 3,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(['title' => $project['title']], $project);
        }
    }
}
