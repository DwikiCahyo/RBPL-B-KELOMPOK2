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
                    <h2>{{$a->JudulArtikel}}</h2>
                    <p>{{$a->DeskripsiArtikel}}</p>
                    <a href="{{ route('detailArtikelPengguna',$a->id) }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</div>
@endsection