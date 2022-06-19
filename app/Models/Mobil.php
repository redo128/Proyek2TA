<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Merk;
class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $primarykey = 'id';

    protected $fillable = [
        'jenis_mobil',
        'varian',
        'nomor_plat',
        'merek_id',
    ];
    public function merk(){
        return $this->belongsTo(Merk::class);
    }
}
