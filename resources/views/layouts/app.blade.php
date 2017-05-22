<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Simulador de Drones - IAW 2017</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/css/style-app.css" rel="stylesheet">
    
    <!-- Font de Google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
    
    
    <!-- FAVICON RESPONSIVO -->

    <link rel="apple-touch-icon" sizes="57x57" href="imagenes/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="imagenes/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="imagenes/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="imagenes/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="imagenes/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="imagenes/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="imagenes/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="imagenes/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="imagenes/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="imagenes/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagenes/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="imagenes/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagenes/favicon/favicon-16x16.png">
    <link rel="manifest" href="imagenes/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="imagenes/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
    @yield('css')
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/"><img src="/imagenes/logoWhite.png" class="img-responsive" alt="Logo Air Fly"></a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li ><a href="quienes-somos">Quienes somos</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estilos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a id="estilo1">Estilo 1</a>


                                </li>
                                <li><a id="estilo2">Estilo 2</a>

                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Precargados <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a id="precargado1">Precargado 1</a>


                                </li>
                                <li><a id="precargado2">Precargado 2</a>

                                </li>
                                
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/obtenerUrl">Obtener url</a>


                                </li>
                                <li><a href="/comprobante">Descargar PDF</a>

                                </li>
                                
                            </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    
    <div class="container-fluid paddingFooter">
        <div class="row paddingFooter separacionFooter">
            <div class="col-lg-12 paddingFooter">
                <div class="cajaFooter">
                    <img src="/imagenes/footerCity.jpg" class="img-responsive center-block" alt="footer">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid paddingFooter">
        <div class="row paddingFooter">
            <div class="col-lg-12 paddingFooter colorFooter">
                Diseñado y desarrollado por Esteban Canela y Germán Herrou
            </div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
    
    @yield('scripts');
</html>
