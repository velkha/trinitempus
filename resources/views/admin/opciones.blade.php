 <!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>

@extends('footer-nav.nav')
@section('TextoModif','Opciones de Admin')
<section>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6 withBackground">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <p><a href="{{ url('/listaCategoria') }}">Gestionar Categorias</a></p>
                <p><a href="{{ url('/listaUsuario') }}">Gestionar Usuarios</a></p>
                <p><a href="{{ url('/listaCiudad') }}">Gestionar Ciudades</a></p>
            </div>

        </div>
    </div>
</div>
</section>
@include('footer-nav.footer')
</body>
</html>
