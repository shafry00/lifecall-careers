<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokInDetail extends Model
{
    use HasFactory;
    // table
    protected $table = 'stok_in_detail';
    // primary key
    protected $primaryKey = 'id_stok_in_detail';
    // fields
    protected $fillable = [
        'id_stok_in',
        'id_barang',
        'qty',
    ];

    // relasi ke tabel stok_in
    public function toStokIn()
    {
        return $this->belongsTo(StokIn::class, 'id_stok_in', 'id_stok_in');
    }

    // relasi ke tabel barang
    public function toBarang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
