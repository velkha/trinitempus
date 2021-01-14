@if( Auth::check())
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
@extends('footer-nav.nav')
<section>
    <div class="row">
    <form action="/perfil" method="get">
        <div class="col-3"></div>
        <div class="col-6 withBackground">
            <div class="row">

                <div class="col-9">
                    <div class="row">
                        @section('modificacion_1')

                        @show
                    </div>
                    <br>
                    <div class="row">
                        @section('modificacion_2')

                        @show
                    </div>
                    <br>
                    <div class="row">
                        @section('modificacion_3')

                        @show
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col3"></div>
                <div class="col-6">
                    @section('modificacion_4')

                    @show
                </div>
                <div class="col3"></div>
            </div>
            <div class="row">
                <div class="col3"></div>
                <div class="col-6">
                    @section('modificacion_5')

                    @show
                </div>
                <div class="col3"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    @section('modificacion_6')

                    @show
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
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
