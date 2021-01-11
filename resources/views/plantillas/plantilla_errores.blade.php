<!DOCTYPE html>
<html>
<head>
    <title>Error: @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>

    @extends('footer-nav.nav')


<section class="error">

    <div class="row">

        <div class="col-3">
            <h1>ERROR @yield('codigo_error')</h1>
            <p> Disculpe las molestias ocasionadas nuestros ingenieros estan trabajando en ello</p>
        </div>

        <div class="col-6">
            <img src="{{asset('assets/local/monkey_engineer.png')}}" alt="error code">
        </div>


    </div>
    <div class="row">
        <div class="col-12">
            <a href={{url("/")}}>
                <button class="errorButton">Volver Al Inicio</button>
            </a>

        </div>
    </div>
    @extends('footer-nav.footer')
</section>
</body>
</html>

