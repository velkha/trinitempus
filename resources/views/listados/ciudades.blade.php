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

    @foreach(\App\Http\Controllers\CiudadController::listAllAvailableCitys() as $ciudad)
        <div class="row">
            <div class="col-3">{{$ciudad->id}}</div>
            <div class="col-3">{{$ciudad->nombre}}</div>
            <form method="post" action="{{url("/modificarCiudad/".$ciudad->id)}}">
                <div class="col-3">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btnCamuflado">Modificar</button>

                </div>
            </form>
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
        <div class="col-4"><a href="{{url("/nuevaCiudad")}}"><button class="standard">Nueva Ciudad</button></a></div>
        <div class="col-4"></div>

    </div>

@endsection
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
