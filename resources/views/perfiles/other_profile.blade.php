@if( Auth::check())
@extends('plantillas.plantilla_perfiles')
@section('imagenPrincipal')
    {{asset('assets/local/foca.jpg')}}
@endsection


@section('campo_datos_2', $data->name)


@section('campo_central', $data->datos_contacto)

@section('descripcion')
    <p>{{$data->about_me}}</p>
@endsection
@section('zonaExtra')
    <div class="row" >
        <div class="col-3" >

        </div>
        <div class="col-4 ">
            <a href="/" class="standard">Volver al innicio</a>
        </div>
        <div class="col-4 center">
            <a href="{{url("/servicios")}}" class="standard">Sus Servicios</a>
        </div>
    </div>
@endsection
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
