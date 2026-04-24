<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    // table
    protected $table = 'pegawai';
    // primary key
    protected $primaryKey = 'id_pegawai';
    // fields
    protected $fillable = [
        'name',
    ];
}
