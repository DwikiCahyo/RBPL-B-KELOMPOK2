<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function viewlistartikeladmin(){
        $artikel = Artikel::all();
        return view ('artikel.listartikeladmin',['artikels'=>$artikel]);

     }
     public function tambahartikel(){
        $this->middleware('auth');
     }
     public function store(Request $request){
        $artikel = new Artikel([
            'idArtikel' => $request->get('idartikel'),
            'idAdmin' =>$request->get('idadmin'),
            'JudulArtikel'=> $request->get('judulartikel'),
            'DeskripsiArtikel'=> $request->get('deskripsiartikel'),
            'FotoArtikel'=> $request->get('fotoartikel'),
         ]);

         $artikel->save();
         $artikel =  Artikel::all();
         return view('artikel.listartikeladmin',['artikels' =>$artikel]);
    }

}
