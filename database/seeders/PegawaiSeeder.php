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
                'foto_pegawai' => 'images/avatar.png',
                'nama_pegawai' => 'Ahmad Yasir',
                'jenis_kelamin' => '1',
                'jabatan' => 'Manager',
                'alamat' => 'Jl. Semangka, No. 17A',
                'telepon' => '081212515427'
            ],
            [
                'id_pegawai' => '1987055020',
                'foto_pegawai' => 'images/avatar3.png',
                'nama_pegawai' => 'Aliyya Putri',
                'jenis_kelamin' => '0',
                'jabatan' => 'Admin',
                'alamat' => 'Jl. Cempaka, No. 9C',
                'telepon' => '087627365332'
            ],
            [
                'id_pegawai' => '1990012522',
                'foto_pegawai' => 'images/avatar3.png',
                'nama_pegawai' => 'Windi Gunawan',
                'jenis_kelamin' => '0',
                'jabatan' => 'Accounting',
                'alamat' => 'Jl. Jambu Monyet, No.18',
                'telepon' => '085278246811'
            ],
            [
                'id_pegawai' => '1990012523',
                'foto_pegawai' => 'images/avatar.png',
                'nama_pegawai' => 'Wawan Hendrawan',
                'jenis_kelamin' => '1',
                'jabatan' => 'Marketing',
                'alamat' => 'Jl. Panjaitan, No.21B',
                'telepon' => '081762536431'
            ],
            [
                'id_pegawai' => '1990012524',
                'foto_pegawai' => 'images/avatar3.png',
                'nama_pegawai' => 'Rini Andriani',
                'jenis_kelamin' => '0',
                'jabatan' => 'Advertising',
                'alamat' => 'Jl. Imam Bonjol, No.1C',
                'telepon' => '081627563547'
            ],
            [
                'id_pegawai' => '1990012525',
                'foto_pegawai' => 'images/avatar.png',
                'nama_pegawai' => 'Budi Darmawan',
                'jenis_kelamin' => '1',
                'jabatan' => 'Driver',
                'alamat' => 'Jl. Mawar, No.14',
                'telepon' => '087918726352'
            ],
            [
                'id_pegawai' => '1990012526',
                'foto_pegawai' => 'images/avatar3.png',
                'nama_pegawai' => 'Citra Karisma',
                'jenis_kelamin' => '0',
                'jabatan' => 'Driver',
                'alamat' => 'Jl. Melati Harum, No.25',
                'telepon' => '085278246811'
            ],
            [
                'id_pegawai' => '1990012527',
                'foto_pegawai' => 'images/avatar3.png',
                'nama_pegawai' => 'Adira Putri',
                'jenis_kelamin' => '0',
                'jabatan' => 'Driver',
                'alamat' => 'Jl. Ir Soekarno, No.36',
                'telepon' => '098716736526'
            ],
            [
                'id_pegawai' => '1990012528',
                'foto_pegawai' => 'images/avatar.png',
                'nama_pegawai' => 'Mujianto',
                'jenis_kelamin' => '1',
                'jabatan' => 'Driver',
                'alamat' => 'Jl. Ir Soekarno, No.7',
                'telepon' => '081567287121'
            ],
            [
                'id_pegawai' => '1990012529',
                'foto_pegawai' => 'images/avatar.png',
                'nama_pegawai' => 'Wahyu Putra Pramana',
                'jenis_kelamin' => '1',
                'jabatan' => 'Customer Service',
                'alamat' => 'Jl. Cenderawasih, No.11B',
                'telepon' => '086516718111'
            ],
            [
                'id_pegawai' => '1990012530',
                'foto_pegawai' => 'images/avatar.png',
                'nama_pegawai' => 'Zafran Muhammad',
                'jenis_kelamin' => '1',
                'jabatan' => 'Customer Service',
                'alamat' => 'Jl. Kartini, No.37',
                'telepon' => '081726536888'
            ],
            [
                'id_pegawai' => '1990012531',
                'foto_pegawai' => 'images/avatar3.png',
                'nama_pegawai' => 'Putri Agustin',
                'jenis_kelamin' => '0',
                'jabatan' => 'Customer Service',
                'alamat' => 'Jl. Merdeka, No.16',
                'telepon' => '081524536333'
            ],
            [
                'id_pegawai' => '1990012532',
                'foto_pegawai' => 'images/avatar.png',
                'nama_pegawai' => 'Dionisius Yudha',
                'jenis_kelamin' => '1',
                'jabatan' => 'Technician',
                'alamat' => 'Jl. Muhammad Hatta, No.2G',
                'telepon' => '087627666524'
            ],
            [
                'id_pegawai' => '1990012532',
                'foto_pegawai' => 'images/avatar.png',
                'nama_pegawai' => 'Bagas Satriawan',
                'jenis_kelamin' => '1',
                'jabatan' => 'Technician',
                'alamat' => 'Jl. Kenari Merah, No.22',
                'telepon' => '088777666525'
            ],
        ];
        DB::table('pegawai')->insert($pegawai);
    }
}
