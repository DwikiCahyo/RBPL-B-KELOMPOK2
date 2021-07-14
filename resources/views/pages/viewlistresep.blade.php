@extends('layouts.receppe',['backgroundImagePath' => 'img/bg/receppe.jpg'
])
@section('title','List Resep')

@section('content')
<div class="content mt-5 mr-5 ml-5">
    <div class="row">
        @foreach ($reseps as $r)


        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card Resep">
                <img class="card-img-top" src="{{ asset('paper') }}/image/{{ $r->FotoResep }}" width="100px">
                    <div class="card-body">
                      <h4 class="card-title">{{$r->NamaResep}}</h4>
                      <p class="card-text">{{$r->DeskripsiResep}}</p>
                      <a href="{{ route('detailResep',$r->id) }}" class="btn btn-primary">Lihat selengkapnya</a>
                    </div>
                 </div>
        </div>
        @endforeach
      </div>
    <div class="text-right fixed-bottom mt-5 mr-5 ml-5">
  <a href="/tambahresep"> <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i></a>
  <p></p>
</div>




@endsection
