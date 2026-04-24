<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TStokOut extends Model
{
    use HasFactory;
    // table
    protected $table = 't_stok_out';
    // primary key
    public $primaryKey = 'id_t_stok_out';
    // fields
    protected $fillable = [
        'id_barang',
        'qty',
    ];

    // relasi ke tabel barang
    public function toBarang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
