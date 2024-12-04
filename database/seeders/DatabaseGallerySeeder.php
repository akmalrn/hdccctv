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
            'path' => 'uploads/gallerys/gallery1.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery2.jpg',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery3.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery4.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery5.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery6.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery7.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery8.jpg',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery9.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery10.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery11.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery12.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery13.png',
        ]);

        Gallery::Create([
            'path' => 'uploads/gallerys/gallery14.png',
        ]);


    }
}
