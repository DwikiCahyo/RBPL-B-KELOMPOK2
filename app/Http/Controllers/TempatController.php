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
}
