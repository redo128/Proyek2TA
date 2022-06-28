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
            ['jenis_mobil' => 'Sedan',
                'varian' =>'Putih',
                'nomor_plat' =>'P 1 AC',
                'featured_image'=>'images/Sedan 1.jpeg',
                'Tarif'=>100000,
                'merk_id'=>1  ],
            ['jenis_mobil' => 'Jeep',
                'varian' =>'Hitam',
                'nomor_plat' =>'P 2 AC',
                'featured_image'=>'images/Jeep.jpeg',
                'Tarif'=>200000,
                'merk_id'=>2  ],
            ['jenis_mobil' => 'Matic',
                'varian' =>'Biru',
                'nomor_plat' =>'P 3 AC',
                'featured_image'=>'images/Matic.jpeg',
                'Tarif'=>300000,
                'merk_id'=>3  ],
        ];

        DB::table('mobil')->insert($mobil);
    }
}
