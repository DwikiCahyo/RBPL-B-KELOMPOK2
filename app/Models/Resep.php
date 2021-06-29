<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $fillabel = [
        'idResep',
        'idPengguna',
        'NamaResep',
        'DeskripsiResep',
        'Bahan',
        'LangkahLangkah',
        'FotoResep',
        'Rasa',
        'WaktuMakan',
    ];
    protected $fillable = ['idResep','idPengguna','NamaResep','DeskripsiResep','Bahan','LangkahLangkah','FotoResep','Rasa','WaktuMakan'];
    protected $table = 'reseps';
    public $timestamps = false;
}
