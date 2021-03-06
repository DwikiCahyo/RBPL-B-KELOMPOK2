<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src=>
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ __('RECCAPE') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            {{-- <li class="{{ $elementActive == 'user' || $elementActive == 'profile' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                <i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>
                    <p>
                            {{ __('USER') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini-icon">{{ __('UP') }}</span>
                                <span class="sidebar-normal">{{ __(' User Profile ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' User Management ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            <li class="{{ $elementActive == 'icons' ? 'active' : '' }}">
                <!-- <a href="{{ route('page.index', 'icons') }}"> -->
                    @if(Auth::user()->role == "admin")
                        <a href="/listresepadmin">
                    @else
                        <a href="/listreseppengguna">
                    @endif
                <i class="fa fa-cutlery fa-4x" aria-hidden="true"></i>
                    <p>{{ __('RESEP') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'map' ? 'active' : '' }}">
                <!-- <a href="{{ route('page.index', 'map') }}"> -->
                @if(Auth::user()->role == "admin")
                    <a href="/listartikeladmin">
                @else
                    <a href="/listartikel">
                @endif
                <i class="fa fa-sticky-note fa-4x" aria-hidden="true"></i>
                    <p>{{ __('ARTIKEL') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'notifications' ? 'active' : '' }}">
                <!-- <a href="{{ route('page.index', 'notifications') }}"> -->
                @if(Auth::user()->role == "admin")
                    <a href="/listtempatadmin">
                @else
                    <a href="/listtempat">
                @endif
                <i class="fa fa-map-marker fa-4x" aria-hidden="true"></i>
                    <p>{{ __('TEMPAT') }}</p>
                </a>
            </li>
            <!-- <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'typography' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a> -->
            <!-- </li>
            <li class="active-pro {{ $elementActive == 'upgrade' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'upgrade') }}" class="bg-danger">
                    <i class="nc-icon nc-spaceship text-white"></i>
                    <p class="text-white">{{ __('Upgrade to PRO') }}</p>
                </a>
            </li> -->
        </ul>
    </div>
</div>
