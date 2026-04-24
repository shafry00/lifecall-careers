<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokIn extends Model
{
    use HasFactory;
    // table
    protected $table = 'stok_in';
    // primary key
    protected $primaryKey = 'id_stok_in';
    // fields
    protected $fillable = [
        'no_stok_in',
        'by',
        'date',
        'description',
        'attachment'
    ];
}
