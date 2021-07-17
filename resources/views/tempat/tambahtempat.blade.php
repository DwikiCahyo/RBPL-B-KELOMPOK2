@extends('layouts.receppe')
@section('title','Tambah Tempat')

@section('content')
<div class="row">
   <div class="col-md-12">
    <form method="POST" action="/tambahtempat/store" enctype="multipart/form-data">
        {{ csrf_field() }}
         <div class="card mr-5 ml-5" >
            <div class="card-body">
               <div class="row d-flex align-items-stretch">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Nama Tempat
                        </label>
                        <input id="" value="" name="NamaTempat" type="text" class="form-control"
                           placeholder="" />
                     </div>
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Deskripsi
                        </label>
                        <textarea id="" name="DeskripsiTempat" placeholder="" class="form-control "
                         style="width: 100"></textarea>
                     </div>
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Kota
                        </label>
                        <input id="" value="" name="Kota" type="text" class="form-control"
                           placeholder="" />
                     </div>
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                            Kecamatan
                        </label>
                        <input id="" value="" name="Kecamatan" type="text" class="form-control"
                           placeholder="" />
                     </div>
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                            Alamat
                        </label>
                        <input id="" value="" name="LokasiTempat" type="text" class="form-control"
                           placeholder="" />
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="" class="font-weight-bold">
                                 Kategori
                              </label>
                              <select id="" name="JenisKategori" class="custom-select">
                                 <option value="Pasar">Pasar</option>
                                 <option value="Toko">Toko</option>
                                 <option value="Supermarket">Supermarket</option>
                              </select>
                           </div>
                           <div class="input-group">
                            <div class="custom-file">
                               <label for="">Pilih Gambar </label>
                               <input type="file" id="gambar" name="FotoTempat" style="display:block;" />
                            </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                  <div class="row mr-5">
                     <div class="col-md-12">
                        <div class="float-right">
                           <a class="btn btn-warning px-4" href="{{ config('app.url')}}/listtempat">Kembali</a>
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
