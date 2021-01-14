@if( Auth::check())
@extends('plantillas.plantilla_perfiles')
@section('TextoModif','Mi Perfil')
@section('imagenPrincipal')
    {{asset('assets/local/foca.jpg')}}
@endsection

@section('campo_datos_1', $data->name)

@section('campo_datos_2', $data->email)

@section('campo_datos_3', $data->getCiudad->nombre)

@section('campo_central', $data->datos_contacto)

@section('descripcion')
    <p>{{$data->about_me}}</p>
@endsection

@section('zonaExtra')
    <div class="row" >
        <div class="col-2" >

        </div>
        <div class="col-4 ">
            <a href="{{url("/pedidos")}}" class="standard">Mis Pedidos</a>
        </div>
        <div class="col-4 ">
            <a href="{{url("/misServicios")}}" class="standard">Mis Servicios</a>
        </div>
    </div>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6 ">
            <span ><a href="{{url("/miMultimedia")}}" class="standard">Ver contenido multimedia</a></span>
        </div>
    </div>
    <div class="row" >
        <div class="col-2" >

        </div>
        <div class="col-4 ">
            <a href="{{url("/")}}" class="standard">Volver al inicio</a>
        </div>
        <div class="col-4 ">
            <a href="{{url('/modificarPerfil/'.Auth::user()->id)}}" class="standard">Modificar Perfil</a>
        </div>
    </div>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6 center">
            <p>MI SALDO: {{Auth::user()->saldo}} </p>
        </div>
    </div>
@endsection
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
