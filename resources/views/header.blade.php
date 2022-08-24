{{--<header class="header rounded">--}}
{{--    <div class="row">--}}
{{--        <div class="col-lg-6 col-xxl-8  col-md-4">--}}
{{--            <h3 class="text-light py-4 mx-5 fs-4">OB</h3>--}}
{{--        </div>--}}
{{--        <div class="col-lg-6 col-xxl-4  col-md-8 " >--}}
{{--            <div class="row py-3">--}}
{{--                <div class="col-xl-6 col-md-2 col-lg-3 text-end">--}}
{{--                    <i class=" bi bi-telephone text-light" style="font-size: 30px"></i>--}}
{{--                </div>--}}
{{--                <div class="col-xl-6 col-md-2 col-lg-3 text-end" >--}}
{{--                    <i class=" bi bi-bell text-light" style="font-size: 30px"></i>--}}
{{--                </div>--}}

{{--                <div class="menubar col-md-3 d-lg-none">--}}
{{--                    <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                        <span class="navbar-toggler-icon"></span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}



{{--    </div>--}}
{{--</header>--}}

<nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background: #CB0E00">
    <div class="container">
        <a class="navbar-brand text-white" href="{{ url('/') }}">
{{--            {{ config('app.name', 'Laravel') }}--}}
            Offerbuzz
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
