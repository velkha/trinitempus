@if( Auth::check() && Auth::user()->isAdmin())
@extends('plantillas.plantilla_listados')
@section('TextoModif','Listado Ciudades')

@section('tabla')
    <div class="row" id="lista_ciudades">
        <div class="col-3">ID</div>
        <div class="col-3">Ciudad</div>
        <div class="col-3">Modificar</div>
        <div class="col-3">Borrar</div>
    </div>
    @foreach(\App\Models\Ciudad::all() as $ciudad)
<div class="row">
    <div class="col-3">{{$ciudad->id}}</div>
    <div class="col-3">{{$ciudad->nombre}}</div>
    <div class="col-3">Modificar</div>
    <form method="post" action="{{url("/listaCiudad/".$ciudad->id)}}">
    <div class="col-3">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btnCamuflado">Borrar</button>

    </div>
    </form>
</div>
    @endforeach
@endsection
@section('zonaExtra')
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"><button class="standard" role="link" onclick="window.location='/trinitempus/public/nuevaCiudad'">Nueva Ciudad</button></div>
        <div class="col-4"></div>

    </div>

@endsection
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
