<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokOut extends Model
{
    use HasFactory;
    // table
    protected $table = 'stok_out';
    // primary key
    protected $primaryKey = 'id_stok_out';
    // fields
    protected $fillable = [
        'id_pegawai',
        'no_stok_out',
        'by',
        'date',
        'objective',
    ];

    // relasi ke tabel pegawai
    public function toPegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id_pegawai');
    }
}
