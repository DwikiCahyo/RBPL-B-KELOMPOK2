@extends('layouts.receppe')
@section('title','List Resep')

@section('content')
<div class="row">
   <div class="col-md-12">
    <form method="POST" action="/tambahresep/store" >
        {{ csrf_field() }}
         <div class="card mr-5 ml-5" >
            <div class="card-body">
               <div class="row d-flex align-items-stretch">
                  <div class="col-md-8">
                     <!-- title -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Judul
                        </label>
                        <input id="" value="" name="namaresep" type="text" class="form-control"
                           placeholder="" />
                     </div>
                     <!-- description -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Deskripsi
                        </label>
                        <textarea id="" name="deskripsi" placeholder="" class="form-control "
                         style="width: 100"></textarea>
                     </div>
                     <!-- description -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Bahan
                        </label>
                        <textarea id="" name="bahan" placeholder="" class="form-control "
                           rows="3"></textarea>
                     </div>
                     <!-- content -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Langkah-langkah
                        </label>
                        <textarea id="inputlangkah" name="langkahLangkah" placeholder="" class="form-control "
                           rows="20"></textarea>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <!-- catgeory -->
               <div class="row">
                  <div class="col-md-12">
                     <!-- tag -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Waktu Makan
                        </label>
                        <select id="" name="waktuMakan" class="custom-select">
                           <option value="pagi">Pagi</option>
                           <option value="siang">Siang</option>
                           <option value="malam">Malam</option>
                        </select>
                     </div>
                  </div>
               </div>

                     <!-- status -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Rasa
                        </label>
                        <select id="" name="rasa" class="custom-select">
                           <option value="manis">Manis</option>
                           <option value="pedas">Pedas</option>
                           <option value="asin">Asin</option>
                        </select>
                     </div>

                     <div class="input-group">
                        <div class="custom-file">
                           <label for="">Pilih Gambar </label>
                           <input type="file" id="gambar" name="FotoResep" style="display: none;" />
                           <input type="button" value="Browse..." onclick="document.getElementById('gambar').click();" />
                          
                        </div>
                     </div>
                  </div>
                  <div class="row mr-5">
                     <div class="col-md-12">
                        <div class="float-right">
                           <a class="btn btn-warning px-4" href="{{ config('app.url')}}/listresep">Kembali</a>
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
