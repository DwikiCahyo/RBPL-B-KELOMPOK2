<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Answer;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    //Menampilkan view list artikel admin
    public function viewlistartikel(){
        $artikel = Artikel::all();
        return view ('artikel.listartikel',['artikels'=>$artikel]);
    }
    public function viewlistartikeladmin(){
        $artikel = Artikel::all();
        return view ('artikel.listartikeladmin',['artikels'=>$artikel]);
    }
     //Menampilkan view tambah artikel
    public function tambahartikel(){
        $this->middleware('auth');
        return view('artikel.tambahartikel');
     }
     //Menyimpan file form tambah artikel
    public function store(Request $request){
        $request->validate([
            'JudulArtikel'=>'required|min:5|max:255',
            'DeskripsiArtikel'=>'required|max:20000',
            'FotoArtikel'=>'required',
        ]);
         //Menyimpan file gambar
        $FotoArtikel = $request->file('FotoArtikel');
        $nama_foto_artikel = time()."_".$FotoArtikel->getClientOriginalName();
        //upload foto
        $file_upload = 'paper/image';
        $FotoArtikel->move($file_upload,$nama_foto_artikel);
        //Menyimpan form ke dalam model artikel
        Artikel::create([
            'FotoArtikel' =>$nama_foto_artikel,
            'JudulArtikel'=>$request->JudulArtikel,
            'DeskripsiArtikel' =>$request->DeskripsiArtikel,
          ]);
        $request->session()->flash('alert-success', 'Artikel Berhasil ditambahkan!');
        return redirect('listartikeladmin');
    }
    //menampilkan view detail artikel
    public function viewdetailartikel($id){
        return view('artikel.detailartikel', ['artikels' => Artikel::find($id)]);
    }
    public function viewdetailartikeladmin($id){
        return view('artikel.detailartikeladmin', ['artikels' => Artikel::find($id)]);
    }
    //menampilkan view edit artikel
    public function vieweditartikel($id){
    $artikels = Artikel::find($id);
    return view('artikel.editartikel',['artikels' => $artikels]);
    }
    //menyimpan form edit artikel ke dalam model ARTIKEL
    public function update(Request $request ,$id){
    $artikels = Artikel::find($id);
    $artikels->JudulArtikel=$request->JudulArtikel;
    $artikels->DeskripsiArtikel=$request->DeskripsiArtikel;

    $artikels->save();
    $request->session()->flash('alert-success', 'Artikel Berhasil di Ubah!');
    return redirect('listartikeladmin');
    }

    public function hapusArtikel($id)
    {
     $artikels= Artikel::find($id);
     $artikels->delete();

     return redirect('listartikeladmin');
    }

    public function searchArtikel(Request $request){

        $search = $request->search;

        $artikels = DB::table('artikels')
        ->where('JudulArtikel','like',"%".$search."%")
            ->paginate();

            return view('artikel.listartikel',['artikels' => $artikels]);
    }
}
