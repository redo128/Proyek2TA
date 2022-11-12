<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;
    protected $table = 'inventaris';
    protected $primarykey = 'id';

    protected $fillable = [
        'barang_id',
        'label_id',
    ];
    public function label(){
        return $this->belongsTo(Label::class);
    }
    public function barang(){
        return $this->belongsTo(Barang::class);
    }
}