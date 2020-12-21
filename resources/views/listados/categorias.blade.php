@extends('plantilla_listados')
@section('TextoModif','Listado Categorias')
@section('tabla')
    <div class="col-2" id="columna_id_0">ID</div>
    <div class="col-2" id="columna_id_1">Categoria</div>
    <div class="col-2" id="columna_id_2">Tipo de categoria</div>
    <div class="col-2" id="columna_id_3">Categoria padre</div>
    <div class="col-2" id="columna_id_4">Modificar</div>
    <div class="col-2" id="columna_id_5">Borrar</div>



    <div class="row">
        <div class="col-2"></div>

        <div class="col-md-6"><button>Nueva Categoria</button></div>
        <div class="col-4"></div>

    </div>
@endsection
