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
    <div class="row">
        <div class="col-3"></div>
            <div class="col-6 withBackground">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-4">Nombre Ciudad
                        <br>
                        <input type="text" id="NCiudad"></div>

                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-4">Latitud
                        <br>
                        <input type="text" id="latitud"></div>

                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-4">Longitud
                        <br>
                        <input type="text" id="longitud"></div>

                </div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <button class="standard">Crear/Modificar</button>

                </div>

            </div>

    </div>
    </div>
</section>
@include('footer-nav.footer')

</body>
</html>
