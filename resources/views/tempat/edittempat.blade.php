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
                        <textarea id="" name="Kota" placeholder="" class="form-control " value="{{$tempats['Kota']}}"
                           rows="3"></textarea>
                     </div>
                     <!-- content -->
                     <div class="form-group">
                        <label for="" class="font-weight-bold">
                           kecamatan
                        </label>
                        <textarea id="inputlangkah" name="Kecamatan" placeholder="" class="form-control " value="{{$tempats['Kecamatan']}}"
                           rows="20"></textarea>
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
