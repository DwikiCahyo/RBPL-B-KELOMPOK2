<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    //



    public function viewlistresep(){
       $resep = Resep::all();
       return view ('pages.viewlistresep',['reseps'=>$resep]);

    }

    public function tambahresep(){
        $this->middleware('auth');
        return view('resep.tambahresep');
    }
    public function store(Request $request){
        $resep = new Resep([
            'NamaResep' => $request->get('namaresep'),
            'DeskripsiResep' =>$request->get('deskripsi'),
            'LangkahLangkah'=> $request->get('langkahLangkah'),
            'Bahan'=> $request->get('bahan'),
            'Rasa'=> $request->get('rasa'),
            'WaktuMakan'=> $request->get('waktuMakan'),
            'FotoResep' => $request->get('FotoResep')
         ]);

         $resep->save();
         $reseps =  Resep::all();
         return view('pages.viewlistresep',['reseps' =>$reseps]);
    }
    public function detailresep($idResep)
    {
        return view('resep.reseppengguna', ['reseps' => Resep::findOrFail($idResep)]);
    }
}
