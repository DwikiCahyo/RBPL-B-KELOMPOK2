{{-- Ramadhani Galuh/05211940000037 --}}
@extends('layouts.receppe')
@section('title','detail artikel')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 mx-auto">
        <div class="card card-resep my-5">
          <div class="card-body">
            <h3 class="card-title text-center" ><b>{{$artikels->JudulArtikel}}</b></h3>
            <br>
            <img src="{{ asset('paper') }}/image/{{ $artikels->FotoArtikel }}" style="margin-left: auto; margin-right: auto; width: 50%; display: block;">
            <br>
            <br>
            <p>{{$artikels->DeskripsiArtikel}}</p>
            <a href="{{ route('editArtikel',$artikels->id) }}">
                <button class="btn btn-warning btn-lg" type="button">Edit</button>
            </a>
            <form action="{{ route('hapusArtikel',$artikels->id) }}" class="d-inline" onsubmit="return confirm('Apakah anda ingin menghapus Artikel')" method ="POST">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-lg ">
                    <i class="fa fa-trash"></i>
                </button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection
