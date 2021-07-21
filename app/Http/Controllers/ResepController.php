<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResepController extends Controller
{
    //
    public function viewlistresepadmin(){
        $resep = Resep::all();
        return view ('resep.listresepadmin',['reseps'=>$resep]);

     }
     public function viewlistreseppengguna(){
        $resep = Resep::all();
        return view ('resep.listreseppengguna',['reseps'=>$resep]);

     }
    public function viewlistresep(){
       $resep = Resep::all();
       return view ('resep.listresep',['reseps'=>$resep]);

    }

    public function tambahresep(){
        $this->middleware('auth');
        return view('resep.tambahresep');
    }
    public function store(Request $request){

        //Validate
        $request->validate([
            'namaresep'=>'required|min:5|max:200',
            'deskripsi'=>'required|max:500',
            'bahan'=>'required|max:5000',
            'langkahLangkah'=>'required|max:5000',
        ]);
        // $resep = new Resep([
        //     'NamaResep' => $request->get('namaresep'),
        //     'DeskripsiResep' =>$request->get('deskripsi'),
        //     'LangkahLangkah'=> $request->get('langkahLangkah'),
        //     'Bahan'=> $request->get('bahan'),
        //     'Rasa'=> $request->get('rasa'),
        //     'WaktuMakan'=> $request->get('waktuMakan'),
        //     'FotoResep' => $request->get('FotoResep')
        //  ]);

        //  $resep->save();
        //  $reseps =  Resep::all();
        //  return view('pages.viewlistresep',['reseps' =>$reseps]);


            //Menyimpan file gambar
        $FotoResep = $request->file('FotoResep');

        $nama_foto = time()."_".$FotoResep->getClientOriginalName();

        //foto upload
        $file_upload = 'paper/image';
        $FotoResep->move($file_upload,$nama_foto);

        //membuat request dari database
        Resep::create([
            'FotoResep' =>$nama_foto,
            'NamaResep'=>$request->namaresep,
            'DeskripsiResep' =>$request->deskripsi,
            'LangkahLangkah'=> $request->langkahLangkah,
            'Bahan'=> $request->bahan,
            'Rasa'=> $request->rasa,
            'WaktuMakan'=> $request->waktuMakan,
          ]);

          $request->session()->flash('alert-success', 'Resep Berhasil Ditambahkan :)');

          return redirect('listreseppengguna');



    }
    public function detailresep($id)
    {
        return view('resep.detailresep', ['reseps' => Resep::findOrFail($id)]);
    }

    public function detailreseppengguna($id)
    {
        return view('resep.detailreseppengguna', ['reseps' => Resep::findOrFail($id)]);
    }

    public function HalamanEditResep($id)
    {
    $resep = Resep::find($id);
    return view('resep.editresep',['reseps' => $resep]);

    }

    Public function updateResep(Request $request ,$id)
  {

    $resep = Resep::find($id);
    $resep->NamaResep=$request->NamaResep;
    $resep->DeskripsiResep=$request->DeskripsiResep;
    $resep->Bahan=$request->Bahan;
    $resep->LangkahLangkah=$request->LangkahLangkah;
    $resep->Rasa=$request->Rasa;
    $resep->WaktuMakan=$request->WaktuMakan;

    $resep->save();
    $request->session()->flash('alert-success', 'Resep Berhasil di Ubah!');

    return redirect('/listreseppengguna');

  }


  public function hapusResep($id)
  {
   $resep= Resep::find($id);
   $resep->delete();

   return redirect('/');
  }

  public function searchResep(Request $request){

    $search = $request->search;

    $reseps = DB::table('reseps')
    ->where('NamaResep','like',"%".$search."%")
        ->orWhere('Rasa', 'like', '%' . $search . '%')
        ->orWhere('WaktuMakan', 'like', '%' . $search . '%')
		->paginate();

        return view('resep.listresep',['reseps' => $reseps]);


  }

}
