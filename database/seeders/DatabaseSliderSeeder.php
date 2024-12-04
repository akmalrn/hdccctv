<?php

namespace Database\Seeders;

use App\Models\admin\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'path' => 'uploads/sliders/slider1.jpg',
            'title' => 'Pengawasan Cerdas untuk Keamanan Anda',
            'overview' => 'Pengawasan Cerdas untuk Keamanan Anda',
            'description' => 'Pengawasan Cerdas untuk Keamanan Anda',
        ]);

        Slider::create([
            'path' => 'uploads/sliders/slider2.jpg',
            'title' => 'Teknologi HDC CCTV, Pilihan Terbaik untuk Perlindungan',
            'overview' => 'Teknologi HDC CCTV, Pilihan Terbaik untuk Perlindungan',
            'description' => 'Teknologi HDC CCTV, Pilihan Terbaik untuk Perlindungan',
        ]);
    }
}
