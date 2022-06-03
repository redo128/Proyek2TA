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
            ['nama_merk' => 'Mitsubishi',],
            ['nama_merk' => 'Toyota',],
            ['nama_merk' => 'Daihatsu',],
            ['nama_merk' => 'Nissan',],
        ];

        DB::table('merk')->insert($merk);
    }
}
