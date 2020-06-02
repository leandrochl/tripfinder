<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ url(mix('site/css/style.css')) }}" rel="stylesheet">
    <link href="{{ url(mix('css/custom.css')) }}" rel="stylesheet">

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
    <script src="{{ url(mix('js/jquery.js')) }}"></script>
    <script src="{{ url(mix('js/bootstrap.js')) }}"></script>

    @yield('js')

</body>

</html>
