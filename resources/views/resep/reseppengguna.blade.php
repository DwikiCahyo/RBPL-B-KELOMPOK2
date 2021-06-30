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

<!-- <div class="container">

    <div class="row">

                <h1 class = "judul" >Cireng Isi Kejuu</h1>
                <br>
                <h1 class="judul">Gambar Masakan</h1>

                <br>
                <h1 class = "judul" style="text-align: center; font-size: large;">Deskripsi</h1>

                <h1 class = "judul" style="text-align: center; font-size: large;">Bahan</h1>
                <br>
                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius quam in mi ultricies, non maximus ante consequat. Aliquam porttitor in dui convallis lacinia. Pellentesque risus metus, laoreet viverra dapibus nec, mattis eu lorem. Praesent elementum orci varius cursus pulvinar. Donec dolor dolor, commodo et lorem rutrum, rutrum vehicula libero. Nulla in sodales lorem. Praesent leo diam, dictum id diam nec, imperdiet luctus massa. Curabitur vel velit risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin eget arcu sit amet magna rhoncus facilisis in ac eros. Duis placerat dictum arcu, in consequat lorem dapibus ut. Duis ultrices malesuada sapien, sed mollis tortor volutpat sit amet. In suscipit, magna non suscipit auctor, eros tellus condimentum lorem, sed laoreet urna dui in enim. Suspendisse turpis ex, luctus non luctus nec, tincidunt in diam.</p>

                <h1 class = "judul" style="text-align: center; font-size: large;">Langkah-Langkah</h1>
                <br>
                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius quam in mi ultricies, non maximus ante consequat. Aliquam porttitor in dui convallis lacinia. Pellentesque risus metus, laoreet viverra dapibus nec, mattis eu lorem. Praesent elementum orci varius cursus pulvinar. Donec dolor dolor, commodo et lorem rutrum, rutrum vehicula libero. Nulla in sodales lorem. Praesent leo diam, dictum id diam nec, imperdiet luctus massa. Curabitur vel velit risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin eget arcu sit amet magna rhoncus facilisis in ac eros. Duis placerat dictum arcu, in consequat lorem dapibus ut. Duis ultrices malesuada sapien, sed mollis tortor volutpat sit amet. In suscipit, magna non suscipit auctor, eros tellus condimentum lorem, sed laoreet urna dui in enim. Suspendisse turpis ex, luctus non luctus nec, tincidunt in diam.</p>


        </div>
    </div>


@endsection
