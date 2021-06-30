@extends('layouts.receppe')
@section('title','List Resep')

@section('content')
<div class="row">
   <div class="col-md-12">
    @foreach($tempat as $t)
    <form method="POST" action="/tempat/update" >
        {{ csrf_field() }}
         <div class="card mr-5 ml-5" >
            <div class="card-body">
               <div class="row d-flex align-items-stretch">
                  <div class="col-md-8">
                     <!-- title -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Nama Tempat
                        </label>
                        <input id="" value="" name="namatempat" type="text" class="form-control"
                           placeholder="" value="{{ $t->namatempat }}"/>
                     </div>
                     <!-- description -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Deskripsi
                        </label>
                        <textarea id="" name="deskripsitempat" placeholder="" class="form-control " value="{{ $t->deskripsitempat }}"
                         style="width: 100"></textarea>
                     </div>
                     <!-- description -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           kota
                        </label>
                        <textarea id="" name="kota" placeholder="" class="form-control " value="{{ $t->kota }}
                           rows="3"></textarea>
                     </div>
                     <!-- content -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           kecamatan
                        </label>
                        <textarea id="inputlangkah" name="langkahLangkah" placeholder="" class="form-control " value="{{ $t->kecamatan }}
                           rows="20"></textarea>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <!-- catgeory -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Gambar Tempat
                        </label>
                        <div class="form-control overflow-auto" style="height: 400px">

                        </div>
                     </div>
                  </div>
               </div>
                           <a class="btn btn-warning px-4" href="{{ config('app.url')}}/listtempatadmin">Kembali</a>
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
      @endforeach
   </div>
 </div>
@endsection
