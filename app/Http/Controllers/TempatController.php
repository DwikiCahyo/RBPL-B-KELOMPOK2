<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Comment;

class TempatController extends Controller
{
    //Menampilkan view list tempat admin
    public function viewlisttempat(){
        $tempat = Tempat::all();
        return view ('tempat.listtempat',['tempats'=>$tempat]);
     }
     //Menampilkan view tambah tempat
    public function tambahtempat(){
        $this->middleware('auth');
        return view('tempat.tambahtempat');
     }
     //Menyimpan file form tambah tempat
    public function store(Request $request){
         //Menyimpan file gambar
        $FotoTempat = $request->file('FotoTempat');
        $nama_foto_tempat = time()."_".$FotoTempat->getClientOriginalName();
        //upload foto
        $file_upload = 'paper/image';
        $FotoTempat->move($file_upload,$nama_foto_tempat);
        //Menyimpan form ke dalam model tempat
        Tempat::create([
            'FotoTempat' =>$nama_foto_tempat,
            'NamaTempat'=>$request->NamaTempat,
            'DeskripsiTempat' =>$request->DeskripsiTempat,
            'Kota'=> $request->Kota,
            'Kecamatan'=> $request->Kecamatan,
            'LokasiTempat'=> $request->LokasiTempat,
            'JenisKategori'=> $request->JenisKategori,
          ]);
        return redirect('listtempat');
    }
    //menampilkan view detail tempat
    public function viewdetailtempat($id){
        return view('tempat.detailtempat', ['tempats' => Tempat::find($id)]);
    }
    //menampilkan view edit tempat
    public function viewedittempat($id){
    $tempats = Tempat::find($id);
    return view('tempat.edittempat',['tempats' => $tempats]);
    }
    //menyimpan form edit tempat ke dalam model tempat
    public function update(Request $request ,$id){
    $tempats = Tempat::find($id);
    $tempats->NamaTempat=$request->NamaTempat;
    $tempats->DeskripsiTempat=$request->DeskripsiTempat;
    $tempats->Kota=$request->Kota;
    $tempats->Kecamatan=$request->Kecamatan;
    $tempats->LokasiTempat=$request->LokasiTempat;
    $tempats->JenisKategori=$request->JenisKategori;


    $tempats->save();

    return redirect('listtempat');
    }
    public function hapusTempat($id)
    {
     $tempats= Tempat::find($id);
     $tempats->delete();

     return redirect('listtempat');
    }
}
