@extends('layouts.receppe')
@section('title','List Tempat')
@section('content')
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
                    <a href="{{ route('detailTempat',$t->id) }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
    <div class="col-md-2"></div>
    <div class="text-right fixed-bottom mt-5 mr-5 ml-5">
        <a href="/tambahtempat"  class="btn btn-primary btn-lg btn-icon btn-round"></a>
</div>
@endsection
