<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class TempatController extends Controller
{
    //Menampilkan view list tempat admin
    public function viewlisttempat(){
        $tempat = Tempat::all();
        return view ('tempat.listtempat',['tempats'=>$tempat]);
     }
     public function viewlisttempatadmin(){
        $tempat = Tempat::all();
        return view ('tempat.listtempatadmin',['tempats'=>$tempat]);
     }
     //Menampilkan view tambah tempat
    public function tambahtempat(){
        $this->middleware('auth');
        return view('tempat.tambahtempat');
     }
     //Menyimpan file form tambah tempat
    public function store(Request $request){
         //Menyimpan file gambar
         $request->validate([
            'NamaTempat'=>'required|min:5|max:200',
            'DeskripsiTempat'=>'required|max:3000',
            'Kota'=>'required|max:10',
            'Kecamatan'=>'required|max:30',
            'LokasiTempat'=>'required|max:1000',
            'JenisKategori'=>'required|max:10',
            'FotoTempat'=>'required',
        ]);
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
        $request->session()->flash('alert-success', 'Tempat Berhasil Ditambahkan :)');
        return redirect('listtempatadmin');
    }
    //menampilkan view detail tempat
    public function viewdetailtempat($id){
        return view('tempat.detailtempat', ['tempats' => Tempat::find($id)]);
    }
    public function viewdetailtempatadmin($id){
        return view('tempat.detailtempatadmin', ['tempats' => Tempat::find($id)]);
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
    $request->session()->flash('alert-success', 'Tempat Berhasil di Ubah!');
    return redirect('listtempatadmin');
    }
    public function hapusTempat($id)
    {
     $tempats= Tempat::find($id);
     $tempats->delete();

     return redirect('listtempatadmin');
    }

    public function searchTempat(Request $request){

        $search = $request->search;

        $tempats = DB::table('tempats')
        ->where('NamaTempat','like',"%".$search."%")
            ->orWhere('JenisKategori', 'like', '%' . $search . '%')
            ->orWhere('Kecamatan', 'like', '%' . $search . '%')
            ->paginate();

            return view('tempat.listtempat',['tempats' => $tempats]);


    }

}
