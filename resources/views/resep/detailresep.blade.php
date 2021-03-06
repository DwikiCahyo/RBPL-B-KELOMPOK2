{{-- Lacsita Devi Oktaviana / 05211940000028 --}}
@extends('layouts.receppe')
@section('title','Resep')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 mx-auto">
        {{method_field('delete')}}
        <div class="card card-resep my-5">

          <div class="card-body">
            <h3 class="card-title text-center" ><b>{{$reseps->NamaResep}}</b></h3>
            <br>
            <img class="card-img-top" src="{{ asset('paper') }}/image/{{ $reseps->FotoResep }}" style='height: 100%; width: 100%; object-fit: contain'/>
            <br>
            <br>

            <h5  ><b>Deskripsi</b></h5>
            <p>{!!$reseps->DeskripsiResep!!}</p>
            <hr>

            <h5 ><b>Bahan</b></h5>
            <ul>{!!nl2br(e($reseps->Bahan))!!}</ul>
            <hr>

            <h5 ><b>Langkah-Langkah</b></h5>
            <ul>{!!nl2br(e($reseps->LangkahLangkah))!!}</ul>
            <hr>

            <p><b>Waktu Makan </b> : {{$reseps->WaktuMakan}}</p>
            <hr>
            <p><b>Rasa Masakan </b> : {{$reseps->Rasa}}</p>



        </form>
          </div>

          <div class="row mr-5 ml-1">
            <div class="col-md-12">
               <div class="float-left">
                  <a class="btn btn-primary btn-md" href="{{ config('app.url')}}/">Kembali</a>
               </div>
            </div>
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
