<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merk = [
            ['nama_merk' => 'Toyota',],
            ['nama_merk' => 'Daihatsu',],
            ['nama_merk' => 'Mitsubishi',],
            ['nama_merk' => 'Honda',],
            ['nama_merk' => 'Suzuki',],
            ['nama_merk' => 'Nissan',],
            ['nama_merk' => 'Chevrolet',],
            ['nama_merk' => 'Mercendes-Benz',],
            ['nama_merk' => 'Wuling',],
            ['nama_merk' => 'Mazda',],
            ['nama_merk' => 'Datsun',],
            ['nama_merk' => 'Isuzu',],
            ['nama_merk' => 'Hyundai',],
        ];

        DB::table('merk')->insert($merk);
    }
}
