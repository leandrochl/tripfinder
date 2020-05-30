<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Fontawesome -->
    {{-- <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet"> --}}

    @yield('css')

    <title>Tripfinder | Descubra seu próximo destino</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">
</head>

<body>
    <div class="header-container">
        <div class="container">
            <div class="nav navbar menu-container">
                <ul class="menu-header">
                    <li class="item item-imagem">
                        <img src="{{ asset('img/logo2.png') }}">
                        <span>tripfinder</span>
                    </li>
                    <li class="item item-menu">
                        <span>Início</span>
                    </li>
                    <li class="item item-menu">
                        <span>Lugares</span>
                    </li>
                    <li class="item item-menu">
                        <a href="{{ route('admin.dashboard') }}"><span>ADMIN</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    @yield('content')




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery.js') }}"></script>    
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Fontawesome -->
    {{-- <script src="{{ asset('fontawesome/js/all.min.js') }}"></script> --}}

    @yield('js')

</body>

</html>
