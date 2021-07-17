@extends('layouts.receppe')
@section('title','Edit Tempat')

@section('content')
<div class="row">
   <div class="col-md-12">
    <form action="{{ route('updateArtikel',$artikels->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("patch")
         <div class="card mr-5 ml-5" >
            <div class="card-body">
               <div class="row d-flex align-items-stretch">
                  <div class="col-md-12">
                     <!-- title -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Judul Artikel
                        </label>
                        <input id="" name="JudulArtikel" type="text" class="form-control"
                           placeholder="" value="{{$artikels['JudulArtikel']}}"/>
                     </div>
                     <!-- description -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Deskripsi
                        </label>
                        <textarea id="" name="DeskripsiArtikel" placeholder="" class="form-control "
                         style="width: 100">{{$artikels['DeskripsiArtikel']}}</textarea>
                     </div>
                  </div>
                           <a class="btn btn-warning px-4" href="{{ config('app.url')}}/listartikel">Kembali</a>
                           <button type="submit" class="btn btn-primary px-4">
                              Simpan
                           </button>
                        </div>
                     </div>
                  </div>
      </form>
   </div>
 </div>
@endsection
