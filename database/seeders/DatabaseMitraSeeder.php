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
            'path' => 'uploads/partners/mitra4.png',
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
    }
}
