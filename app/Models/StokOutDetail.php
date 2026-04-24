<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokOutDetail extends Model
{
    use HasFactory;
    // table
    protected $table = 'stok_out_detail';
    // primary key
    protected $primaryKey = 'id_stok_out_detail';
    // fields
    protected $fillable = [
        'id_stok_out',
        'id_barang',
        'qty',
    ];

    // relasi ke tabel stok_out
    public function toStokOut()
    {
        return $this->belongsTo(StokOut::class, 'id_stok_out', 'id_stok_out');
    }

    // relasi ke tabel barang
    public function toBarang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
