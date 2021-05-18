<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $fillable = [
        'namaResep',
        'deskripsi',
        'bahan',
        'langkahLangkah',
     ];
     protected $table = "reseps";
     public $timestamps = false;
}

