{{-- Lacsita Devi Oktaviana / 05211940000028 --}}
@extends('layouts.receppe')
@section('title','Edit Tempat')

@section('content')
<div class="row">
   <div class="col-md-12">
    <form action="{{ route('updateTempat',$tempats->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("patch")
         <div class="card mr-5 ml-5" >
            <div class="card-body">
               <div class="row d-flex align-items-stretch">
                  <div class="col-md-12">
                     <!-- title -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Nama Tempat
                        </label>
                        <input id="" name="NamaTempat" type="text" class="form-control"
                           placeholder="" value="{{$tempats['NamaTempat']}}"/>
                     </div>
                     <!-- description -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           Deskripsi
                        </label>
                        <textarea id="" name="DeskripsiTempat" placeholder="" class="form-control "
                         style="width: 100">{{$tempats['DeskripsiTempat']}}</textarea>
                     </div>
                     <!-- description -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           kota
                        </label>
                        <select id="" name="Kota" class="custom-select">
                            <option value="Surabaya">Surabaya</option>
                        </select>
                     </div>
                     <!-- content -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           kecamatan
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
                        <input id="" value="{{$tempats['LokasiTempat']}}" name="LokasiTempat" type="text" class="form-control"
                           placeholder="" />
                     </div>
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
   </div>
 </div>
@endsection
