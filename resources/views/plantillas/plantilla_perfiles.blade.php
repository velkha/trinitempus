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

        <div class="col-3"></div>
        <div class="col-6 withBackground">
            <div class="row">
                <div class="col-3">
                    <img src="@yield('imagenPrincipal')" class="imageCenter" alt="Imagen con referencia al contenido de la seccion  ">
                </div>
                <div class="col-9">
                    <div class="row">
                        <h2>@yield('campo_datos_1')</h2>
                    </div>
                    <br>
                    <div class="row">
                        <h2>@yield('campo_datos_2')</h2>
                    </div>
                    <br>
                    <div class="row">
                        <h2>@yield('campo_datos_3')</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col3"></div>
                <div class="col-6">
                    <p>@yield('campo_datos_central')</p>
                </div>
                <div class="col3"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    @section('descripcion')

                    @show
                </div>
            </div>
            @section('zonaExtra')

            @show
        </div>
        <div class="col-3"></div>
    </div>
</section>
@extends('footer-nav.footer')
</body>
</html>
