{{-- Lacsita Devi Oktaviana / 05211940000028 --}}
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
                        <input id="" value="{{old('NamaTempat')}}" name="NamaTempat" type="text" class="form-control @error('NamaTempat') is-invalid @enderror" placeholder="" />
                        @error('NamaTempat')
                           <div class="invalid-feedback" >{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Deskripsi
                        </label>
                        <textarea value="" id="" name="DeskripsiTempat" placeholder="" class="form-control @error('DeskripsiTempat') is-invalid @enderror"
                         style="width: 100">{{old('DeskripsiTempat')}}</textarea>
                        @error('DeskripsiTempat')
                           <div class="invalid-feedback" >{{$message}}</div>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Kota
                        </label>
                        <select id="" name="Kota" class="custom-select">
                           <option value="Surabaya">Surabaya</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Kecamatan
                        </label>
                        <select id="" name="Kecamatan" class="custom-select">
                        <optgroup label="Surabaya Barat">
                           <option value="Asemrowo">Asemrowo</option>
                           <option value="Benowo">Benowo</option>
                           <option value="Lakarsantri">Lakarsantri</option>
                           <option value="Pakal">Pakal</option>
                           <option value="Sambikerep">Sambikerep</option>
                           <option value="Suko Manunggal">Suko Manunggal</option>
                           <option value="Tandes">Tandes</option>
                        </optgroup>
                        <optgroup label="Surabaya Selatan">
                           <option value="Dukuh Pakis">Dukuh Pakis</option>
                           <option value="Gayungan">Gayungan</option>
                           <option value="Jambangan">Jambangan</option>
                           <option value="Karang Pilang">Karang Pilang</option>
                           <option value="Sawahan">Sawahan</option>
                           <option value="Wiyung">Wiyung</option>
                           <option value="Wonocolo">Wonocolo</option>
                           <option value="Wonokromo">Wonokromo</option>
                        </optgroup>
                        <optgroup label="Surabaya Timur">
                           <option value="Gubeng">Gubeng</option>
                           <option value="Gunung Anyar">Gunung Anyar</option>
                           <option value="Mulyorejo">Mulyorejo</option>
                           <option value="Rungkut">Rungkut</option>
                           <option value="Sukolilo">Sukolilo</option>
                           <option value="Tambaksari">Tambaksari</option>
                           <option value="Tenggilis Mejoyo">Tenggilis Mejoyo</option>
                        </optgroup>
                        <optgroup label="Surabaya Utara">
                           <option value="Bulak">Bulak</option>
                           <option value="Kenjeran">Kenjeran</option>
                           <option value="Krembangan">Krembangan</option>
                           <option value="Pabean Cantian">Pabean Cantian</option>
                           <option value="Semampir">Semampir</option>
                        </optgroup>
                        <optgroup label="Surabaya Pusat">
                           <option value="Bubutan">Bubutan</option>
                           <option value="Genteng">Genteng</option>
                           <option value="Simokerto">Simokerto</option>
                           <option value="Tegalsari">Tegalsari</option>
                        </optgroup>
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                            Alamat
                        </label>
                        <input id="" value="{{old('LokasiTempat')}}" name="LokasiTempat" type="text" class="form-control @error('LokasiTempat') is-invalid @enderror"
                           placeholder="" />
                        @error('LokasiTempat')
                           <div class="invalid-feedback" >{{$message}}</div>
                        @enderror
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
                           <div>
                               <label for="input-group"class="font-weight-bold">Foto Tempat</label>
                           </div>
                           <div class="input-group">
                            <div class="custom-file">
                               <label for="">Pilih Gambar : </label>
                               <input type="file" id="gambar" name="FotoTempat" style="display:block;" />
                               @error('FotoTempat')
                                <div class="invalid-feedback" style="display: block">{{$message}}</div>
                               @enderror
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
