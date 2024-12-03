<?php

namespace Database\Seeders;

use App\Models\admin\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::Create([
            'path' => 'uploads/gallerys/gallery1.jpg',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery2.jpg',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery3.jpg',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery4.jpg',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery5.jpg',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery6.jpg',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery7.jpg',
        ]);
    }
}
