{{-- Alfado Rafly Hermawan/05211940000090 --}}
@extends('layouts.receppe')
@section('title','List Tempat')
@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <h6 class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></h6>
            @endif
            @endforeach
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
<!--Button Search-->
<div class="container">
    <form class="form" action="{{ route('searchTempat') }}" method = "GET" >
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Cari Berdasarkan Nama Tempat , Kecamatan Dan Jenis Kategoris" aria-label="Search" value="{{ old('search') }}">
        <button class="btn btn-warning btn-sm" type="submit">Cari</button>
      </form>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="Container mt-5">
          @foreach ($tempats as $t)
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                    <img src="{{ asset('paper') }}/image/{{ $t->FotoTempat }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                    <h2>{{$t->NamaTempat}}</h2>
                    <p>{{$t->DeskripsiTempat}}</p>
                    <a href="{{ route('detailTempatAdmin',$t->id) }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
    <div class="col-md-2"></div>
    <div class="text-right fixed-bottom mt-5 mr-5 ml-5">
    <a href="/tambahtempat"> <i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i></a>
    </div>
@endsection
