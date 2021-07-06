@extends('layouts.receppe')
@section('title','Resep')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 mx-auto">
        <div class="card card-resep my-5">
          <div class="card-body">
            <h3 class="card-title text-center" ><b>{{$reseps->NamaResep}}</b></h3>
            <br>
            <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2020/05/04/3231484237.jpg" >
            <br>
            <br>
            <h5  ><b>Deskripsi</b></h5>
                <p>{{$reseps->DeskripsiResep}}</p>
                <h5 ><b>Bahan</b></h5>
                    <ul>
                        <li>Nasi putih 1 piring</li>
                        <li>Bawang putih 2 siung, cincang halus</li>
                           <li>Kecap manis atau kecap asin sesuai selera</li>
                           <li>Saus sambal sesuai selera</li>
                           <li>Saus tiram sesuai selera</li>
                           <li>Garam secukupnya</li>
                           <li>Kaldu bubuk rasa ayam atau sapi sesuai selera</li>
                           <li> Daun bawang 1 batang, cincang halus</li>
                           <li>Telur ayam 1 butir</li>
                           <li>Sosis ayam 1 buah, iris tipis</li>
                          <li>Margarin atau minyak goreng 3 sdm</li>
                    </ul>
                    <h5 ><b>Langkah-Langkah</b></h5>
                        <ul>
                            <li>Siapkan penggorengan dengan api sedang, tuang margarin atau minyak goreng.</li>
                            <li>Masukkan bawang putih dan daun bawang yang sudah dicincang halus. Tumis hingga berbau harum atau hingga warnanya keemasan.</li>
                            <li>Masukkan sosis dan 1 butir telur ayam. Tumis sebentar.</li>
                            <li>Masukkan bumbu halus dan nasi. Aduk hingga tercampur rata</li>
                            <li>Tuang kecap manis, saus sambal, saus tiram, garam, dan kaldu bubuk. Aduk hingga warna nasi berubah secara merata.</li>
                            <li>Nasi goreng biasa yang sederhana, dan enak siap disajikan.</li>
                        </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
