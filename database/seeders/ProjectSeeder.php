<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah, dan nilai perkuliahan.',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'project1.jpg',
                'status' => 'Selesai'
            ],
            [
                'title' => 'E-Commerce SEO Optimization',
                'description' => 'Aplikasi untuk mengoptimalkan struktur heading dan indexing halaman web toko online.',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'In Progress'
            ],
            [
                'title' => 'Reading Cover & Branding',
                'description' => 'Perancangan elemen grafis untuk personal branding dan desain sampul buku.',
                'teknologi' => 'Figma & Canva',
                'image' => 'project3.jpg',
                'status' => 'Selesai'
            ],
            [
                'title' => 'Website Portfolio',
                'description' => 'Website portfolio pribadi untuk menampilkan profil, kemampuan, dan hasil proyek.',
                'teknologi' => 'HTML, CSS & JavaScript',
                'image' => 'project4.jpg',
                'status' => 'Selesai'
            ],
            [
                'title' => 'Aplikasi Kasir',
                'description' => 'Aplikasi kasir sederhana untuk mengelola transaksi dan data produk.',
                'teknologi' => 'PHP & MySQL',
                'image' => 'project5.jpg',
                'status' => 'Selesai'
            ],
            [
                'title' => 'Sistem Manajemen Perpustakaan',
                'description' => 'Sistem untuk mengelola data buku, anggota, peminjaman, dan pengembalian buku.',
                'teknologi' => 'Laravel & MySQL',
                'image' => 'project6.jpg',
                'status' => 'In Progress'
            ],
            [
                'title' => 'Aplikasi To-Do List',
                'description' => 'Aplikasi untuk mencatat, mengatur, dan memantau tugas atau kegiatan harian.',
                'teknologi' => 'JavaScript & Bootstrap',
                'image' => 'project7.jpg',
                'status' => 'Selesai'
            ],
            [
                'title' => 'Sistem Informasi Klinik',
                'description' => 'Aplikasi untuk mengelola data pasien, dokter, jadwal pemeriksaan, dan rekam medis.',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'project8.jpg',
                'status' => 'In Progress'
            ],
            [
                'title' => 'Landing Page Produk',
                'description' => 'Website landing page untuk memperkenalkan produk dan meningkatkan promosi secara online.',
                'teknologi' => 'HTML, CSS & JavaScript',
                'image' => 'project9.jpg',
                'status' => 'Selesai'
            ],
            [
                'title' => 'Aplikasi Manajemen Keuangan',
                'description' => 'Aplikasi untuk mencatat pemasukan, pengeluaran, dan laporan keuangan sederhana.',
                'teknologi' => 'Laravel & MySQL',
                'image' => 'project10.jpg',
                'status' => 'In Progress'
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
