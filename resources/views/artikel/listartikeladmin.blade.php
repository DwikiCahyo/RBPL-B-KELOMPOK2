@extends('layouts.receppe')
@section('title','List Artikel')
@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="Container mt-5">
          @foreach ($artikels as $a)
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                    <img src="{{ asset('paper') }}/image/{{ $a->FotoArtikel }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                    <h2>{{$t->JudulArtikel}}</h2>
                    <p>{{$t->DeskripsiArtikel}}</p>
                    <a href="{{ route('detailArtikel',$a->id) }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
    <div class="col-md-2"></div>
    <div class="text-right fixed-bottom mt-5 mr-5 ml-5">
        <a href="/tambahartikel"  class="btn btn-primary btn-lg btn-icon btn-round"></a>
</div>
@endsection
