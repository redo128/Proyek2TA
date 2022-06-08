<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mobil;
class Merk extends Model
{
    use HasFactory;
    protected $table = 'merk';
    protected $primarykey = 'id';

    protected $fillable = [
        'nama_merk',
    ];
    public function mobil(){
        return $this->hasMany(Mobil::Class);
    }
}
