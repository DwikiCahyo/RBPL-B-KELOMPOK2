@extends('layouts.receppe')
@section('title','Resep')

@section('content')
<div class="container">

    <div class="row">
        @foreach($reseps as $p)
        <div class="col-sm-9 col-8">
                <h1 class = "judul" >Nasi Goreng</h1>
            </div>
                <h1 class="judul">Gambar Masakan</h1>

                <br>
                <h1 class = "judul">Deskripsi</h1>
            </div>
                <h1 class = "judul">Bahan</h1>
                <br>
                <p style="text-align: center; font-size: large;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius quam in mi ultricies, non maximus ante consequat. Aliquam porttitor in dui convallis lacinia. Pellentesque risus metus, laoreet viverra dapibus nec, mattis eu lorem. Praesent elementum orci varius cursus pulvinar. Donec dolor dolor, commodo et lorem rutrum, rutrum vehicula libero. Nulla in sodales lorem. Praesent leo diam, dictum id diam nec, imperdiet luctus massa. Curabitur vel velit risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin eget arcu sit amet magna rhoncus facilisis in ac eros. Duis placerat dictum arcu, in consequat lorem dapibus ut. Duis ultrices malesuada sapien, sed mollis tortor volutpat sit amet. In suscipit, magna non suscipit auctor, eros tellus condimentum lorem, sed laoreet urna dui in enim. Suspendisse turpis ex, luctus non luctus nec, tincidunt in diam.</p>
            </div>
                <h1 class = "judul">Langkah-Langkah</h1>
                <br>
                <p style="text-align: center; font-size: large;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius quam in mi ultricies, non maximus ante consequat. Aliquam porttitor in dui convallis lacinia. Pellentesque risus metus, laoreet viverra dapibus nec, mattis eu lorem. Praesent elementum orci varius cursus pulvinar. Donec dolor dolor, commodo et lorem rutrum, rutrum vehicula libero. Nulla in sodales lorem. Praesent leo diam, dictum id diam nec, imperdiet luctus massa. Curabitur vel velit risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin eget arcu sit amet magna rhoncus facilisis in ac eros. Duis placerat dictum arcu, in consequat lorem dapibus ut. Duis ultrices malesuada sapien, sed mollis tortor volutpat sit amet. In suscipit, magna non suscipit auctor, eros tellus condimentum lorem, sed laoreet urna dui in enim. Suspendisse turpis ex, luctus non luctus nec, tincidunt in diam.</p>
            </div>

            @endforeach
        </div>
    </div>
</div>

@endsection
