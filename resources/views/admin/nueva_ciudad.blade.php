@if( Auth::check() && Auth::user()->isAdmin())
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>

@extends('footer-nav.nav')
@section('TextoModif','Nueva Ciudad')
<section>
    <form action="{{url("nuevaCiudad/creando")}}" method="post">
        @csrf
    <div class="row">
        <div class="col-3"></div>
            <div class="col-6 withBackground">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-4">Nombre Ciudad
                        <br>
                        <input type="text" name="NCiudad"></div>

                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-4">Latitud
                        <br>
                        <input type="text" name="latitud"></div>

                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-4">Longitud
                        <br>
                        <input type="text" name="longitud"></div>

                </div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <input type="submit" value="Crear/Modificar" class="standard">

                </div>

            </div>

    </div>
    </div>
    </form>
</section>
@include('footer-nav.footer')

</body>
</html>
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
