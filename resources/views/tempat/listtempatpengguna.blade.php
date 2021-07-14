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
                    <a href="{{ route('detailTempatPengguna',$t->id) }}" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</div>
@endsection
