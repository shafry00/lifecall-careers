<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;
    // table
    protected $table = 'satuan';
    // primary key
    protected $primaryKey = 'id_satuan';
    // fields
    protected $fillable = [
        'name',
    ];
}
