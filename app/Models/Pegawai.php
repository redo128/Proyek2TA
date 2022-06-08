<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';

    protected $fillable = [
        'foto_pegawai',
        'nama_pegawai',
        'jenis_kelamin',
        'jabatan',
        'alamat',
        'telepon',
    ];
}
