<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pegawai = [
            [
                'id_pegawai' => '1987051022',
                'foto_pegawai' => 'adminLTE/dist/img/avatar.png',
                'nama_pegawai' => 'Ahmad Yasir',
                'jenis_kelamin' => '1',
                'jabatan' => 'Manager',
                'alamat' => 'Jl. Semangka, No. 17A',
                'telepon' => '081212515427'
            ],
            [
                'id_pegawai' => '1990012522',
                'foto_pegawai' => 'adminLTE/dist/img/avatar3.png',
                'nama_pegawai' => 'Windi Gunawan',
                'jenis_kelamin' => '0',
                'jabatan' => 'Customer Service',
                'alamat' => 'Jl. Jambu Monyet, No.18',
                'telepon' => '085278246811'
            ]
        ];
        DB::table('pegawai')->insert($pegawai);
    }
}
