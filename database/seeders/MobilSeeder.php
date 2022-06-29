<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mobil = [
            [
                'merk_id' => 1,
                'jenis_mobil' => 'SUV',
                'varian' => 'Fortuner Hitam',
                'nomor_plat' => 'L 1001 AP',
                'featured_image' => 'images/SUV Fortuner Hitam.png',
                'Tarif' => 500000,
            ],
            [
                'merk_id' => 1,
                'jenis_mobil' => 'SUV',
                'varian' => 'Rush Putih',
                'nomor_plat' => 'L 1002 AP',
                'featured_image' => 'images/SUV Rush Putih.png',
                'Tarif' => 350000,
            ],
            [
                'merk_id' => 1,
                'jenis_mobil' => 'MPV',
                'varian' => 'Avanza Merah',
                'nomor_plat' => 'L 1003 AP',
                'featured_image' => 'images/MPV Avanza Merah.png',
                'Tarif' => 250000,
            ],
            [
                'merk_id' => 1,
                'jenis_mobil' => 'MPV',
                'varian' => 'Innova Silver',
                'nomor_plat' => 'L 1004 AP',
                'featured_image' => 'images/MPV Innova Silver.png',
                'Tarif' => 400000,
            ],
            [
                'merk_id' => 1,
                'jenis_mobil' => 'Hatchback',
                'varian' => 'Yaris Kuning',
                'nomor_plat' => 'L 1005 AP',
                'featured_image' => 'images/Hatchback Yaris Kuning.png',
                'Tarif' => 200000,
            ],
            [
                'merk_id' => 2,
                'jenis_mobil' => 'MPV',
                'varian' => 'Xenia Abu-Abu',
                'nomor_plat' => 'L 2001 AP',
                'featured_image' => 'images/MPV Xenia Abu.png',
                'Tarif' => 250000,
            ],
            [
                'merk_id' => 2,
                'jenis_mobil' => 'SUV',
                'varian' => 'Terios Putih',
                'nomor_plat' => 'L 2002 AP',
                'featured_image' => 'images/SUV Terios Putih.png',
                'Tarif' => 350000,
            ],
            [
                'merk_id' => 2,
                'jenis_mobil' => 'LCGC',
                'varian' => 'Sigra Silver',
                'nomor_plat' => 'L 2003 AP',
                'featured_image' => 'images/LCGC Sigra Silver.png',
                'Tarif' => 200000,
            ],
            [
                'merk_id' => 2,
                'jenis_mobil' => 'MPV',
                'varian' => 'Grand Max Silver',
                'nomor_plat' => 'L 1001 AP',
                'featured_image' => 'images/MPV Grand Max Silver.png',
                'Tarif' => 250000,
            ],
            [
                'merk_id' => 3,
                'jenis_mobil' => 'SUV',
                'varian' => 'Pajero Hitam',
                'nomor_plat' => 'L 3001 AP',
                'featured_image' => 'images/SUV Pajero Hitam.png',
                'Tarif' => 500000,
            ],
            [
                'merk_id' => 3,
                'jenis_mobil' => 'MPV',
                'varian' => 'Xpander Ultimate Hitam',
                'nomor_plat' => 'L 3002 AP',
                'featured_image' => 'images/MPV Xpander Hitam.png',
                'Tarif' => 500000,
            ],
            [
                'merk_id' => 3,
                'jenis_mobil' => 'Crossover',
                'varian' => 'Xpander Cross Putih',
                'nomor_plat' => 'L 3003 AP',
                'featured_image' => 'images/Crossover Xpander Cross Putih.png',
                'Tarif' => 350000,
            ],
            [
                'merk_id' => 4,
                'jenis_mobil' => 'Hatchback',
                'varian' => 'Brio Kuning',
                'nomor_plat' => 'L 4001 AP',
                'featured_image' => 'images/Hatchback Brio Kuning.png',
                'Tarif' => 200000,
            ],
            [
                'merk_id' => 4,
                'jenis_mobil' => 'Hatchback',
                'varian' => 'Jazz Kuning',
                'nomor_plat' => 'L 4002 AP',
                'featured_image' => 'images/Hatchback Jazz Kuning.png',
                'Tarif' => 200000,
            ],
            [
                'merk_id' => 4,
                'jenis_mobil' => 'Hatchback',
                'varian' => 'CR-V Hitam',
                'nomor_plat' => 'L 4003 AP',
                'featured_image' => 'images/Hatchback CRV Hitam.png',
                'Tarif' => 350000,
            ],
            [
                'merk_id' => 5,
                'jenis_mobil' => 'MPV',
                'varian' => 'Ertiga Putih',
                'nomor_plat' => 'L 5001 AP',
                'featured_image' => 'images/MPV Ertiga Putih.png',
                'Tarif' => 300000,
            ],
            [
                'merk_id' => 5,
                'jenis_mobil' => 'SUV',
                'varian' => 'XL7 Merah',
                'nomor_plat' => 'L 5002 AP',
                'featured_image' => 'images/SUV XL7 Merah.png',
                'Tarif' => 350000,
            ],
            [
                'merk_id' => 6,
                'jenis_mobil' => 'Crossover',
                'varian' => 'Livina Putih',
                'nomor_plat' => 'L 6001 AP',
                'featured_image' => 'images/Crossover Livina Putih.png',
                'Tarif' => 300000,
            ],
        ];

        DB::table('mobil')->insert($mobil);
    }
}
