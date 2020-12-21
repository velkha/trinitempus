<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>

@extends('nav')
@section('TextoModif','Nueva Categoria')
<section>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 withBackground">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-4">Nombre Categoria
                    <br>
                    <input type="text" id="NCiudad"></div>

            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-4">
                    <select name="Categorias">
                        <option value="0">Principal</option>
                        <option>Categoria1</option>
                        <option>Categoria2</option>
                        <option>Categoria3</option>
                    </select>

            </div>
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
@include('footer')

</body>
</html>
