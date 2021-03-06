<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    use HasFactory;
    protected $fillabel = [
        'id',
        'NamaTempat',
        'DeskripsiTempat',
        'Kota',
        'Kecamatan',
        'LokasiTempat',
        'JenisKategori',
        'FotoTempat',

    ];
    protected $fillable = ['id','NamaTempat','DeskripsiTempat','Kota','Kecamatan','LokasiTempat','LinkLokasi','JenisKategori','FotoTempat'];
    protected $table = 'tempats';
    public $timestamps = false;
}
