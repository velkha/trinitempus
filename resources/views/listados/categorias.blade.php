@if( Auth::check() && Auth::user()->isAdmin())
@extends('plantillas.plantilla_listados')
@section('TextoModif','Listado Categoria')
@section('listType', 'categorias')
@section('tabla')
    <div class="row" id="lista_categorias">
        <div class="col-2">ID</div>
        <div class="col-2">Categoria</div>
        <div class="col-2">Tipo de categoria</div>
        <div class="col-2">Categoria padre</div>
        <div class="col-2">Modificar</div>
        <div class="col-2">Borrar</div>
    </div>
@endsection
@section('zonaExtra')
    <div class="row">
        <div class="col-4"></div>

        <div class="col-4"><button class="standard" role="link" onclick="window.location='/trinitempus/public/nuevaCategoria'">Nueva Categoria</button></div>
        <div class="col-4"></div>

    </div>
@endsection
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif

