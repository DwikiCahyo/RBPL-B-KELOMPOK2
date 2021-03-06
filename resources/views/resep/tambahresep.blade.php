{{-- Dwiki Cahyo/05211940000134 --}}
@extends('layouts.receppe')
@section('title','List Resep')

@section('content')
<div class="row">
   <div class="col-md-12">
    <form method="POST" action="/tambahresep/store"  enctype="multipart/form-data" >
        {{ csrf_field() }}
         <div class="card mr-5 ml-5" >
            <div class="card-body">
               <div class="row d-flex align-items-stretch">
                  <div class="col-md-8">

                     <!-- Nama Resep -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Nama Resep
                        </label>
                        <input id="" value="{{old('namaresep')}}" name="namaresep" type="text" class="form-control  @error('namaresep') is-invalid @enderror" placeholder="">
                        @error('namaresep')
                           <div class="invalid-feedback" >{{$message}}</div>
                        @enderror
                     </div>

                     <!--Deskripsi-->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Deskripsi Singkat resep
                        </label>
                        <textarea id="" name="deskripsi" placeholder="" class="form-control @error('deskripsi') is-invalid @enderror " style="width: 100">{{old('deskripsi')}}</textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                     </div>

                     <!--Bahan -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Bahan
                        </label>
                        <textarea id="" name="bahan" placeholder="" class="form-control @error('bahan') is-invalid @enderror" rows="3">{{old('bahan')}}</textarea>
                        @error('bahan')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                     </div>

                     <!--Langkah Langkah-->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Langkah-langkah
                        </label>
                        <textarea id="" name="langkahLangkah" placeholder="" class="form-control @error('langkahLangkah') is-invalid @enderror" rows="20"> {{old('langkahLangkah')}}</textarea>
                        @error('langkahLangkah')
                        <div class="invalid-feedback" >{{$message}}</div>
                        @enderror
                     </div>


                  </div>


                  <div class="col-md-4">
                     <!-- waktu makan -->
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

                     <!-- rasa -->
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

                     <!--Upload Gambar-->
                     <div class="input-group">
                        <div class="custom-file">
                           <label for="">Gambar Masakan</label>
                           <input type="file" id="gambar" name="FotoResep" style="display:block;" class="@error('FotoResep') is-invalid @enderror"/>
                           @error('FotoResep')
                           <div class="invalid-feedback" style="display: block">{{$message}}</div>
                           @enderror

                        </div>
                     </div>

                  </div>
                  <div class="row mr-5 ml-1">
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
