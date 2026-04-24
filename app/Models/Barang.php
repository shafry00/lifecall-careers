<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    // table
    protected $table = 'barang';
    // primary key
    protected $primaryKey = 'id_barang';
    // fields
    protected $fillable = [
        'id_satuan',
        'kd_barang',
        'name',
        'stock'
    ];

    // relasi ke satuan
    public function toSatuan()
    {
        return $this->belongsTo(Satuan::class, 'id_satuan', 'id_satuan');
    }

    // relasi ke stok in
    public function toStokInDetail()
    {
        return $this->hasMany(StokInDetail::class, 'id_barang', 'id_barang');
    }

    // relasi ke stok out
    public function toStokOutDetail()
    {
        return $this->hasMany(StokOutDetail::class, 'id_barang', 'id_barang');
    }
}
