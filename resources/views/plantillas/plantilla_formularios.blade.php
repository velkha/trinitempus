<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
<nav>

</nav>
<section>
    <div class="row">
    <form action="/perfil" method="get">
        <div class="col-3"></div>
        <div class="col-6 withBackground">
            <div class="row">

                <div class="col-9">
                    <div class="row">
                        <p>@yield('modificacion_1')</p><input type="text" name="@yield('modificacion_1')">
                    </div>
                    <br>
                    <div class="row">
                        @section('modificacion_2')

                        @show
                    </div>
                    <br>
                    <div class="row">
                        <p>@yield('modificacion_3')</p><input type="text" name="@yield('modificacion_3')">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col3"></div>
                <div class="col-6">
                    <p>@yield('modificacion_4')</p><input type="text" name="@yield('modificacion_4')">
                </div>
                <div class="col3"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>@yield('modificacion_5')</p><textarea name="@yield('modificacion_5')" cols="40" rows="5"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" class="standard" value="Modificar">
            </div>
            @section('zonaExtra')

            @show
        </div>
        <div class="col-3"></div>
    </form>
    </div>
</section>
@extends('footer-nav.footer')
</body>
</html>
