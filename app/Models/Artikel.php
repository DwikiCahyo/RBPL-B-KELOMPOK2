<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillabel = [
        'id',
        'idAdmin',
        'JudulArtikel',
        'DeskripsiArtikel',
        'FotoArtikel',

    ];
    protected $fillable = ['id','idAdmin','JudulArtikel','DeskripsiArtikel','FotoArtikel'];
    protected $table = 'artikels';
    public $timestamps = false;
}
