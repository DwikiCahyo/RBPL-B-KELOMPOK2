<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;

class TempatController extends Controller
{
    public function viewlisttempatadmin(){
        $tempat = Tempat::all();
        return view ('tempat.listtempatadmin',['tempats'=>$tempat]);

     }
     public function tambahtempat(){
        $this->middleware('auth');
        return view('tempat.tambahtempat');
     }
     public function store(Request $request){
        $tempat = new Tempat([
            'idTempat' => $request->get('idtempat'),
            'idAdmin' =>$request->get('idadmin'),
            'NamaTempat'=> $request->get('namatempat'),
            'DeskripsiTempat'=> $request->get('deskripsitempat'),
            'Kota'=> $request->get('kota'),
            'Kecamatan'=> $request->get('kecamatan'),
            'LokasiTempat'=> $request->get('lokasi'),
            'JenisKategori'=> $request->get('jenisKategori'),
            'LinkLokasi'=> $request->get('linklokasi'),
            'FotoTempat'=> $request->get('fototempat')
         ]);

         $tempat->save();
         $tempat =  Tempat::all();
         return view('tempat.listtempatadmin',['tempats' =>$tempat]);
    }

    //EDIT TEMPAT
    public function edittempat($id)
    {
        $tempat = Tempat::findOrFail($id);
        return view('tempat.edittempat');
    }

    public function update(Request $request, $id)
    {
        $tempat = Tempat::findOrFail($id) -> update([
            'idTempat' => $request->get('idtempat'),
            'idAdmin' =>$request->get('idadmin'),
            'NamaTempat'=> $request->get('namatempat'),
            'DeskripsiTempat'=> $request->get('deskripsitempat'),
            'Kota'=> $request->get('kota'),
            'Kecamatan'=> $request->get('kecamatan'),
            'LokasiTempat'=> $request->get('lokasitempat'),
            'JenisKategori'=> $request->get('jeniskategori'),
            'LinkLokasi'=> $request->get('linklokasi'),
            'FotoTempat'=> $request->get('fototempat')
         ]);

         return redirect('/tempatadmin');
    }
    Public function read($idTempat){
        return view('tempat.detailtempat', ['Tempats' => Tempat::findOrFail($idTempat)]);
    }
}
