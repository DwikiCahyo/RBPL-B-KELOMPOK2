<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    protected $fillabel = [
        'id',
        'NamaResep',
        'DeskripsiResep',
        'Bahan',
        'LangkahLangkah',
        'FotoResep',
        'Rasa',
        'WaktuMakan',
    ];
    protected $fillable = ['id','NamaResep','DeskripsiResep','Bahan','LangkahLangkah','FotoResep','Rasa','WaktuMakan'];
    protected $table = 'reseps';
    public $timestamps = false;
}
