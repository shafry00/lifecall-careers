<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TStokIn extends Model
{
    use HasFactory;
    // table
    protected $table = 't_stok_in';
    // primaty key
    protected $primaryKey = 'id_t_stok_in';
    // fields
    protected $fillable = [
        'id_barang',
        'qty'
    ];

    // relasi ke tabel barang
    public function toBarang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
