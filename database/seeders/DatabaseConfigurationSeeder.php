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
            'path' => 'uploads/configuration/logoareum.png',
            'path_logo' => 'uploads/configuration/logoareum.png',
            'website_name' => 'Areum Parc',
            'title' => 'Areum Parc Bogor - Korean Dreams Sanctuary',
            'meta_keywords' => 'Areum Parc Bogor, Korean Dreams Sanctuary, wisata Korea di Bogor, taman Korea di Bogor, destinasi wisata unik Bogor, tempat wisata ala Korea, pengalaman budaya Korea, taman hanok Bogor, Korean village Bogor, spot foto ala Korea, wisata keluarga Bogor, budaya tradisional Korea, Korean lifestyle experience, tempat romantis di Bogor, wisata populer Bogor.',
            'meta_descriptions' => 'Areum Parc Bogor - Korean Dreams Sanctuary, destinasi wisata unik yang menghadirkan nuansa Korea di Bogor. Nikmati keindahan taman bergaya hanok, pengalaman budaya tradisional Korea, dan spot foto Instagramable. Temukan keajaiban Korea di tengah Bogor!',
            'footer' => '© All Copyright 2024 - Areum Parc | By WAN Teknologi Internasional',
            'path_building' => 'uploads/configuration/path_building.jpg',
            'path_building_2' => 'uploads/configuration/path_building_2.jpeg',
            'title_building' => 'Areum Parc Bogor - Pesona Korean Dreams Sanctuary di Tengah Kota',
            'overview_building' => 'Areum Parc Bogor merupakan destinasi wisata ikonik yang mengusung konsep Korean Dreams Sanctuary, menghadirkan atmosfer khas Korea di tengah kota Bogor.',
            'description' => '<li>Desain Arsitektur Tradisional Korea</li><li>Keterpaduan dengan Alam</li><li>Paviliun untuk Pengalaman Budaya</li>',
            'areas_building' => '100',
            'parkings_building' => '100',
            'units_building' => '100',
            'bedrooms_building' => '100',
            'features_building' => '100',
            'youtube_superiority' => 'https://www.youtube.com/watch?v=NwSCItPhX4I',
        ]);
    }
}
