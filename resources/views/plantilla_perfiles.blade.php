<!DOCTYPE html>
<html>
<head>
    <title>User: @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
<nav>

</nav>
<section>

    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-3">
            <img src="@yield('imagenPrincipal')" class="imageCenter" alt="Imagen con referencia al contenido de la seccion  ">
        </div>

        <div class="col-6">
            @section('campos_datos')

            @show
        </div>
    </div>
    <div class="row">
        @section('campo_central')

        @show
    </div>
    <div class="row">
        <div class="col-12 center">
            @section('descripcion')

            @show
        </div>
    </div>
    @section('zonaExtra')

    @show
</section>
@extends('footer')
</body>
</html>
