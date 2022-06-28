<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalian';
    protected $primarykey = 'id';
    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }
    
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
