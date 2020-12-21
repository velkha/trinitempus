@extends('plantilla_listados')
@section('TextoModif','Listado Ciudades')
@section('tabla')
    <div class="row" id="lista_ciudades">
        <div class="col-3">ID</div>
        <div class="col-3">Ciudad</div>
        <div class="col-3">Modificar</div>
        <div class="col-3">Borrar</div>
    </div>




    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"><button class="standard">Nueva Ciudad</button></div>
        <div class="col-4"></div>

    </div>


@endsection
