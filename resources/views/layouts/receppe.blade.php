<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<!-- CSS Files -->
<link href="{{ asset('paper') }}/css/bootstrap.min.css" rel="stylesheet" />
<link href="{{ asset('paper') }}/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
    <title> @yield('title')</title>

    <style>
        body {
            background-image: url("https://www.hdnicewallpapers.com/Walls/Big/Food%20and%20Drinks/Fruit_and_Egg_Foods_4K_Wallpaper.jpg");
            /* background-color: #cccccc; */
            background-size: 100%;
            padding-top: 100px;
            padding-bottom: 200px;
        }
        .card-img-top{
            width: 100%;
            height: 20vh;
            object-fit: cover;
            box-shadow: 1vh;
        }

    </style>
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="/listresep" class="nav-link">Resep</a>
                    </li>
                    <li class="nav-item">
                        <a href="/listartikeladmin" class="nav-link">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a href="/listtempatadmin" class="nav-link">Tempat</a>
                    </li>
                </ul>

                <form class="form-inline ml-auto">
                    <div class="form-group no-border">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-neutral btn-icon btn-round">
                        <i class="nc-icon nc-zoom-split"></i>
                    </button>
                </form>
                <!-- Example single danger button -->
    <div class="btn-group ml-5">
    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Setting
    </button>
    <div class="dropdown-menu">
        <form class="dropdown-item" action="{{ route('logout') }}" id="formLogOut" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="dropdown-item" onclick="document.getElementById('formLogOut').submit();">{{ __('Log out') }}</a>
        <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('My profile') }}</a>
    </div>
  </div>

        </div>
    </nav> --}}


    {{-- NavBar Update --}}
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Receppe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a class="nav-link" href="/listresep">Resep <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/listtempat">Tempat</a>
            </li>
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link " href="/listartikel">Artikel</a>
            </li>
          </ul>
          <div class="btn-group mr-5">
            <button type="button" class="btn btn-success dropdown-toggle btn-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profile
            </button>
            <div class="dropdown-menu">
                <form class="dropdown-item" action="{{ route('logout') }}" id="formLogOut" method="POST" style="display: none;">
                    @csrf
                </form>
                <a class="dropdown-item" onclick="document.getElementById('formLogOut').submit();">{{ __('Log out') }}</a>
                <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('My profile') }}</a>
            </div>
          </div>
          {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning" type="submit">Search</button>
          </form> --}}
        </div>
    </nav>


    @yield('content')



   <script src="{{ asset('paper') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('paper') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('paper') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('paper') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('paper') }}/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('paper') }}/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('paper') }}/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->

    <!-- Sharrre libray -->
    <script src="../assets/demo/jquery.sharrre.js"></script>

    @stack('scripts')


</body>
</html>
