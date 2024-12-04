<?php

namespace Database\Seeders;

use App\Models\admin\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseAboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::Create([
            'path' => 'uploads/aboutus/about.jpg',
            'description' => 'HD CCTV toko yang bergerak dibidang pengadaan barang dan jasa yang berfokus pada security system dan telah berdiri sejak tahun 2018 menjadi modal kami untuk membantu memenuhi kebutuhan perlengkapan security system khususnya cctv dengan kualitas terbaik',
        ]);
    }
}
