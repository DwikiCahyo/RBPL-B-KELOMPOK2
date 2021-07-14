@extends('layouts.receppe')
@section('title','detail tempat')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 mx-auto">
        <div class="card card-resep my-5">
          <div class="card-body">
            <h3 class="card-title text-center" ><b>{{$tempats->NamaTempat}}</b></h3>
            <br>
            <img src="{{ asset('paper') }}/image/{{ $tempats->FotoTempat }}" style="margin-left: auto; margin-right: auto; width: 50%; display: block;">
            <br>
            <br>
            <h5><b>Jenis Kategori : {{$tempats->JenisKategori}}</b></h5>
            <h5><b>Deskripsi</b></h5>
                <p>{{$tempats->DeskripsiTempat}}</p>
            <table>
                <tr>
                    <th>Kota</th>
                    <th>Kecamatan</th>
                    <th>Alamat</th>
                </tr>
                <tr>
                    <td>{{$tempats->Kota}}</td>
                    <td>{{$tempats->Kecamatan}}</td>
                    <td>{{$tempats->LokasiTempat}}</td>
                </tr>
            </table>
            <a href="{{ route('editTempat',$tempats->id) }}">
                <button class="btn btn-warning btn-sm" type="button">Edit</button>
            </a>
            <a href="">
              <button class="btn btn-warning btn-sm" type="button">Hapus</button>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
