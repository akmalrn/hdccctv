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
            'path' => 'uploads/sliders/slider1.jpeg',
            'title' => 'Temukan Pesona Desa Korea',
            'overview' => 'Temukan Pesona Desa Korea',
            'description' => 'Temukan Pesona Desa Korea',
        ]);

        Slider::create([
            'path' => 'uploads/sliders/slider2.jpeg',
            'title' => 'Merasakan Keindahan Tradisi Korea',
            'overview' => 'Merasakan Keindahan Tradisi Korea',
            'description' => 'Merasakan Keindahan Tradisi Korea',
        ]);
    }
}
