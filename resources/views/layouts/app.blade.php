<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INFODOTA</title>

    <!--
         Fonts 
         -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- 
        Styles
         -->
    <!-- bootstrap.css  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- papper kit  -->
    <link rel="stylesheet" href="{{asset('css/paper-kit.css')}}">
    <!-- nucleo icons  -->
    <link rel="stylesheet" href="{{asset('css/nucleo-icons.css')}}">
    <!-- app.css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- jquery.dataTables.min.css -->
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet"><!-- jquery.dataTables.min.css -->
</head>
<body>
<nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="300">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <i style="font-size:20px" class="fa fa-steam"></i> DOTAINFO  <i style="font-size:30px" class="fa fa-gamepad"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<main class="">
    @yield('content')
</main>
</div>
<footer class="footer" style="background-color:#161616" height="100px">
    <div class="container">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li><a>INFODOTA</a></li>
                </ul>
            </nav>
            <div class="credits ml-auto">
					<span class="copyright">
						©2018- <script>document.write(new Date().getFullYear())</script>, made by <i class="fa fa-code"></i> <a href="http://lucasmanoel.com.br">Lucas Manoel</a>
                        
					</span>
            </div>
        </div>
    </div>
</footer>

<!--
    Scripts
    -->
<!-- jquery.js -->
<script src="{{ asset('js/jquery-3.2.1.js') }}" defer></script>

<script src="{{ asset('js/data-table.min.js') }}" defer></script>

<!-- League.js -->
<script src="{{asset('League/league.js')}}" defer></script>

<!-- jquery ui -->
<script src="{{ asset('js/jquery-ui-1.12.1.custom.min.js') }}" defer></script>

<!-- popper -->
<script src="{{ asset('js/popper.js') }}" defer></script>
<!-- bootstrap js -->
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<!-- papper kit -->
<script src="{{ asset('js/paper-kit.js') }}" defer></script>
<!-- bootstrap-switch.min.js -->
<script src="{{ asset('js/paper-kit.js') }}" defer></script>
<script src="{{ asset('js/request_heroes.js') }}" defer></script>
<script src="{{ asset('js/match.js') }}" defer></script>


</body>
</html>
