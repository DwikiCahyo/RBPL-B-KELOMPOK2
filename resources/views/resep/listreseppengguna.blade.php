@extends('layouts.receppe',['backgroundImagePath' => 'img/bg/receppe.jpg'
])
@section('title','List Resep')

@section('content')
<div class="content mt-5 mr-5 ml-5">

    <!-- Alert Success-->
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
          <h6 class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></h6>
          @endif
        @endforeach
      </div>
    <!--Button Search-->
    <div class="container">
        <form class="form" action="{{ route('seacrhResep') }}" method = "GET" >
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Cari Berdasarkan Nama Resep , Rasa Dan Waktu Makan" aria-label="Search" value="{{ old('search') }}">
            <button class="btn btn-warning btn-sm" type="submit">Cari</button>
          </form>
        </div>

        <!-- Content List-->
    <div class="row mt-5">
        @foreach ($reseps as $r)


        <div class="col-lg-3 col-md-6 col-sm-6  d-flex align-items-stretch">
            <div class="card Resep">
                <img class="card-img-top" src="{{ asset('paper') }}/image/{{ $r->FotoResep }}" width="100px">
                    <div class="card-body">
                      <h4 class="card-title"><b>{{$r->NamaResep}}</b></h4>
                      <p class="card-text">{{$r->DeskripsiResep}}</p>
                      <a href="{{ route('detailResepPengguna',$r->id) }}" class="btn btn-primary">Lihat selengkapnya</a>
                    </div>
                 </div>
        </div>
        @endforeach
      </div>
        <div class="text-right fixed-bottom mt-5 mr-5 ml-5">
        <a href="/tambahresep"> <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i></a>
        </div>
@endsection
