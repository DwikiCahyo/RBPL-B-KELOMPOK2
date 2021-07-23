{{-- Ika Rahma A/05211940000044 --}}
@extends('layouts.receppe')
@section('title','Tambah Artikel')

@section('content')
<div class="row">
   <div class="col-md-12">
    <form method="POST" action="/tambahartikel/store"  enctype="multipart/form-data" >
        {{ csrf_field() }}
         <div class="card mr-5 ml-5" >
            <div class="card-body">
               <div class="row d-flex align-items-stretch">
                  <div class="col-md-12">
                     <!-- title -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Judul Artikel
                        </label>
                        <input id="" value="{{old('JudulArtikel')}}" name="JudulArtikel" type="text" class="form-control  @error('JudulArtikel') is-invalid @enderror"
                           placeholder="" />
                        @error('JudulArtikel')
                           <div class="invalid-feedback" >{{$message}}</div>
                        @enderror
                     </div>

                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Deskripsi
                        </label>
                        <textarea id="" value="" name="DeskripsiArtikel" placeholder="" class="form-control  @error('DeskripsiArtikel') is-invalid @enderror"
                         style="width: 100">{{old('DeskripsiArtikel')}}</textarea>
                         @error('DeskripsiArtikel')
                         <div class="invalid-feedback" >{{$message}}</div>
                         @enderror
                     </div>
                     <div class="input-group">
                        <div class="custom-file">
                           <label for="">Pilih Gambar </label>
                           <input type="file" id="gambar" name="FotoArtikel" style="display:block;" />
                           @error('FotoArtikel')
                            <div class="invalid-feedback" style="display: block">{{$message}}</div>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="row mr-5 ml-5">
                     <div class="col-md-12">
                        <div class="float-right">
                           <a class="btn btn-warning px-4" href="{{ config('app.url')}}/listartikel">Kembali</a>
                           <button type="submit" class="btn btn-primary px-4">
                              Simpan
                           </button>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </form>
   </div>
 </div>
@endsection










