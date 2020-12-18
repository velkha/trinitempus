<!DOCTYPE html>
<html>
<head>
    <title>Error: @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
<section class="error">
    @section('nav')

     @show
    <div class="row">

        <div class="col-3">
            <h1>ERROR @yield('codigo_error')</h1>
            <p> Disculp las molestias ocasionadas nuestros ingenieros estan en ello</p>
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
    @section('footer')

    @show
</section>
</body>
</html>