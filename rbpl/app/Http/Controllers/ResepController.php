<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function viewlistresep(){
       $resep = Resep::all();
       return view ('pages.viewlistresep',['reseps'=>$resep]);

    }

}
