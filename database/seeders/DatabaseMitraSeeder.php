<?php

namespace Database\Seeders;

use App\Models\admin\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseMitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::Create([
            'path' => 'uploads/partners/mitra1.png',
            'title' => 'Mitra 1',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra2.png',
            'title' => 'Mitra 2',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra3.png',
            'title' => 'Mitra 3',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra4.jpg',
            'title' => 'Mitra 4',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra5.png',
            'title' => 'Mitra 5',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra6.png',
            'title' => 'Mitra 6',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra7.jpg',
            'title' => 'Mitra 6',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra8.jpg',
            'title' => 'Mitra 6',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra9.png',
            'title' => 'Mitra 6',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra10.png',
            'title' => 'Mitra 6',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra11.jpg',
            'title' => 'Mitra 6',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra12.jpg',
            'title' => 'Mitra 6',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra13.png',
            'title' => 'Mitra 6',
        ]);

        Partner::Create([
            'path' => 'uploads/partners/mitra14.png',
            'title' => 'Mitra 6',
        ]);
    }
}
