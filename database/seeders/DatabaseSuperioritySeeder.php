<?php

namespace Database\Seeders;

use App\Models\admin\Superiority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSuperioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Superiority::Create([
            'path' => 'uploads/superioritys/path1.png',
            'title' => 'Garansi Terjamin dan jelas',
            'description' => 'Kami memberikan garansi terjamin untuk setiap layanan dan produk yang kami tawarkan.',
        ]);

        Superiority::Create([
            'path' => 'uploads/superioritys/path2.png',
            'title' => 'Produk berkualitas',
            'description' => 'Kami hanya menyediakan produk berkualitas terbaik untuk memastikan kepuasan dan keamanan pelanggan.',
        ]);

        Superiority::Create([
            'path' => 'uploads/superioritys/path3.png',
            'title' => 'Harga Termurah',
            'description' => 'Kami menawarkan harga termurah tanpa mengurangi kualitas, memberikan Anda nilai terbaik untuk setiap produk atau layanan yang kami sediakan.',
        ]);

        Superiority::Create([
            'path' => 'uploads/superioritys/path4.png',
            'title' => 'Tersedia seluruh brand cctv SNI',
            'description' => 'Kami menyediakan seluruh brand CCTV SNI dengan kualitas terjamin, memastikan sistem keamanan Anda sesuai dengan standar nasional Indonesia (SNI) untuk keandalan dan performa maksimal.',
        ]);

        Superiority::Create([
            'path' => 'uploads/superioritys/path5.png',
            'title' => 'Melayani Seluruh Wilayah Indonesia',
            'description' => 'Kami melayani seluruh wilayah Indonesia, siap memberikan solusi keamanan terbaik dengan pemasangan CCTV di berbagai kota dan daerah di tanah air.',
        ]);

        Superiority::Create([
            'path' => 'uploads/superioritys/path6.png',
            'title' => 'Kantor Jelas pasti bertanggung jawab tak mungkin lari dari garansi',
            'description' => 'Kami memiliki kantor yang jelas dan pasti bertanggung jawab, sehingga Anda tidak perlu khawatir, karena kami selalu memenuhi garansi dan tidak akan lari dari tanggung jawab yang kami janjikan.',
        ]);
    }
}
