<?php

namespace App\Http\Controllers;

use App\Models\Resep;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
    $resep = Resep::all();
    return view ('resep.listresep',['reseps'=>$resep]);
    }
}
