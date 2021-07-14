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
                        <input id="" value="" name="JudulArtikel" type="text" class="form-control"
                           placeholder="" />
                     </div>

                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Deskripsi
                        </label>
                        <textarea id="" name="DeskripsiArtikel" placeholder="" class="form-control "
                         style="width: 100"></textarea>
                     </div>
                     <div class="input-group">
                        <div class="custom-file">
                           <label for="">Pilih Gambar </label>
                           <input type="file" id="gambar" name="FotoArtikel" style="display:block;" />

                        </div>
                     </div>
                  </div>
                  <div class="row mr-5 ml-5">
                     <div class="col-md-12">
                        <div class="float-right">
                           <a class="btn btn-warning px-4" href="{{ config('app.url')}}/listartikeladmin">Kembali</a>
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










