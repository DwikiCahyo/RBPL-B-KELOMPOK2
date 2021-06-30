@extends('layouts.receppe')
@section('title','List Resep')

@section('content')
<div class="row">
   <div class="col-md-12">
    <form method="POST" action="/tambahtempat/store" >
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
                           placeholder="" />
                     </div>
                     <!-- description -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Deskripsi
                        </label>
                        <textarea id="" name="deskripsitempat" placeholder="" class="form-control "
                         style="width: 100"></textarea>
                     </div>
                     <!-- description -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Kota
                        </label>
                        <input id="" value="" name="kota" type="text" class="form-control"
                           placeholder="" />
                     </div>
                     <!-- content -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                            Kecamatan
                        </label>
                        <input id="" value="" name="kecamatan" type="text" class="form-control"
                           placeholder="" />
                     </div>
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                            Lokasi
                        </label>
                        <input id="" value="" name="lokasi" type="text" class="form-control"
                           placeholder="" />
                     </div>
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                            Link Lokasi
                        </label>
                        <input id="" value="" name="linklokasi" type="text" class="form-control"
                           placeholder="" />
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <!-- tag -->
                           <div class="form-group">
                              <label for="" class="font-weight-bold">
                                 Kategori
                              </label>
                              <select id="" name="jenisKategori" class="custom-select">
                                 <option value="pagi">Pasar</option>
                                 <option value="siang">Toko</option>
                                 <option value="malam">Supermarket</option>
                              </select>
                           </div>
                        </div>
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
                  <div class="row mr-5">
                     <div class="col-md-12">
                        <div class="float-right">
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
   </div>
 </div>
@endsection
