@extends('layouts.receppe')
@section('title','List Tempat')
@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="Container mt-5">
            <div class="card">
                <div class="row">
                    @foreach ($tempats as $t)
                    <div class="col-md-4">
                    <img src="https://th.bing.com/th/id/OIP.fYga__wywybMq81k0cGrJwHaE8?pid=ImgDet&rs=1" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                    <h2>{{$t->NamaTempat}}</h2>
                    <p>{{$t->DeskripsiTempat}}</p>
                    <a href="#" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-md-2"></div>
</div>
@endsection
