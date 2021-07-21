@extends('layouts.receppe')
@section('title','Edit Resep')

@section('content')
<div class="row">
   <div class="col-md-12">
   {{-- <form action="/resep/editresep" method="POST"></form> --}}
      <form action="{{ route('updateResep',$reseps->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("patch")
         <div class="card mr-5 ml-5" >
            <H3>Edit Resep</H3>
            <div class="card-body">
               <div class="row d-flex align-items-stretch">
                  <div class="col-md-8">
                     <!-- title -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Judul
                        </label>
                        <input id="" value="{{$reseps['NamaResep']}}" name="NamaResep" type="text" class="form-control"
                           placeholder="" />
                     </div>

                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Deskripsi
                        </label>
                        <textarea id="" name="DeskripsiResep" placeholder="" class="form-control "
                         style="width: 100" value=> {{$reseps['DeskripsiResep']}}</textarea>
                     </div>

                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Bahan
                        </label>
                        <textarea id="" name="Bahan" placeholder="" class="form-control "
                           rows="3">{{$reseps['Bahan']}}</textarea>
                     </div>
                     <!-- content -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Langkah-langkah
                        </label>
                        <textarea id="inputlangkah" name="LangkahLangkah" placeholder="" class="form-control "
                           rows="20">{{$reseps['LangkahLangkah']}}</textarea>

                     </div>
                  </div>

                <div class="row">
                  <div class="col-md-12">
                     <!-- tag -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Waktu Makan
                        </label>
                        <select id="" name="WaktuMakan" class="custom-select">
                           <option value="pagi">Pagi</option>
                           <option value="siang">Siang</option>
                           <option value="malam">Malam</option>
                        </select>
                     </div>
                  </div>
               </div>

                     <!-- status -->
                     <div class="form-group ml-3">
                        <label for="" class="font-weight-bold">
                           Rasa
                        </label>
                        <select id="" name="Rasa" class="custom-select">

                           <option value="manis">Manis</option>
                           <option value="pedas">Pedas</option>
                           <option value="asin">Asin</option>
                        </select>
                     </div>
                  </div>
                {{-- <div class="input-group">
                     <div class="custom-file">
                        <label for="">Pilih Gambar </label>
                        <input type="file" id="gambar" name="FotoResep" style="display:block;" />

                     </div>
                  </div> --}}



                  <div class="row mr-5 ml-5">
                     <div class="col-md-12">
                        <div class="float-right">
                           <a class="btn btn-warning px-4" href="{{ config('app.url')}}/listreseppengguna">Kembali</a>
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










