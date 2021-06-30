@extends('layouts.receppe',['backgroundImagePath' => 'img/bg/receppe.jpg'
])
@section('title','List Resep')

@section('content')
<div class="content mt-5 mr-5 ml-5">
    <div class="row">
        @foreach ($reseps as $r)
            
        
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card Resep">
                 <img class="card-img-top" src="https://asset.kompas.com/crops/cdF6KaI9leY8crhXMhllb2HEwSY=/0x75:1000x741/750x500/data/photo/2021/01/27/601133df644c1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h4 class="card-title">{{$r->NamaResep}}</h4>
                      <p class="card-text">{{$r->DeskripsiResep}}</p>
                      <a href="/resep/{idResep}" class="btn btn-primary">Lihat selengkapnya</a>
                    </div>
                 </div>         
        </div>
        @endforeach
      </div>
    <div class="text-right fixed-bottom mt-5 mr-5 ml-5">
  <a href="/tambahresep"  class="btn btn-primary btn-lg btn-icon btn-round"></a>
</div>
    
      
     
    
@endsection