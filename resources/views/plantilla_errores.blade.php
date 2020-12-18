<!DOCTYPE html>
<html>
<head>
    <title>Error: @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
    <div class="row">
        <div class="col-6">
            <h1>ERROR @yield('codigo_error')</h1>
        </div>
        <div class="col-6">
            <img src="@yield('imagenPrincipal')" alt="error code">
        </div>


    </div>
    <div class="row">
        <div class="col-12">
            <h2>Ha ocurrido un error</h2>
            <p>Disculpe las molestias nuestros ingenieros estan trabajando en ello</p>
        </div>
    </div>
</body>
</html>
