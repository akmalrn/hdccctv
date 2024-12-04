<?php

namespace Database\Seeders;

use App\Models\admin\Configuration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Configuration::create([
            'path' => 'uploads/configuration/logo cctv.png',
            'path_logo' => 'uploads/configuration/logo cctv.png',
            'website_name' => 'Website HDCCTV',
            'title' => 'Website HDCCTV',
            'meta_keywords' => 'Instalasi CCTV Profesional, Jasa Pemasangan CCTV, Sistem Keamanan CCTV, Jasa CCTV Rumah, Pemasangan CCTV Perusahaan, CCTV untuk Keamanan 24 Jam, Jasa Pemasangan CCTV Jakarta, Keamanan CCTV dengan Akses Online, CCTV Outdoor dan Indoor, Pemeliharaan CCTV, CCTV untuk Kantor dan Gedung, CCTV Mobil, Pemasangan CCTV untuk Toko, Kamera CCTV dengan Perekaman HD, CCTV Kamera Night Vision, Layanan CCTV Berkualitas, Solusi Keamanan CCTV, Harga Pemasangan CCTV Terjangkau',
            'meta_descriptions' => 'Instalasi CCTV Profesional untuk Rumah dan Kantor
"Tingkatkan keamanan dengan layanan pemasangan CCTV profesional. Kami menyediakan sistem CCTV berkualitas tinggi dengan akses online dan perekaman HD. Dapatkan harga terjangkau dan pemasangan cepat di rumah, kantor, atau perusahaan Anda."',
            'footer' => '© All Copyright 2024 - HD CCTV | By WAN Teknologi Internasional',
        ]);
    }
}
