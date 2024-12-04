<?php

namespace Database\Seeders;

use App\Models\admin\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::Create([
            'name' => '',
            'position' => '',
            'phone_number' => '6289653747644',
            'phone_number_2' => '',
            'email_address' => 'hdcctvplg@gmail.com',
            'email_address_2' => '',
            'address' => 'Palembang',
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15938.198599967135!2d104.75454679009116!3d-2.9913894851212245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75a049dcddef%3A0x3039d80b220de20!2sPalembang%2C%20Kota%20Palembang%2C%20Sumatera%20Selatan!5e0!3m2!1sen!2sid!4v1698782012345!5m2!1sen!2sid',
            'hours' => 'Senin – Jumat, 09.00 – 18.00 WIB',
            'instagram' => 'https://www.instagram.com/hdcctv_/',
            'tiktok' => '',
            'facebook' => 'https://www.facebook.com/public/Hamid-Palembang?locale2=id_ID&_rdr',
        ]);
    }
}
