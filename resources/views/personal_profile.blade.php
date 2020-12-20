@extends('plantilla_perfiles')

@section('imagenPrincipal')
    {{asset('assets/local/foca.jpg')}}
@endsection

@section('campos_datos')

    <div class="row" >
        <div class="col-6 center">
            <p>DATOS:</p>
        </div>

    </div>
    <div class="row center" >
        <div class="col-6">
            <p>DATOS:</p>
        </div>

    </div>
    <div class="row center" >
        <div class="col-6">
            <p>DATOS:</p>
        </div>

    </div>
@endsection

@section('campo_central')
    <div class="col-12 center">
        <p>datos de contacto</p>
    </div>
@endsection

@section('descripcion')
    <p>mENUDA GRANDIOSA DESCRIPCION</p>
    <p>mENUDA GRANDIOSA DESCRIPCION</p>
    <p>mENUDA GRANDIOSA DESCRIPCION</p>
    <p>mENUDA GRANDIOSA DESCRIPCION</p>
@endsection

@section('zonaExtra')
    <div class="row" >
        <div class="col-3" >

        </div>
        <div class="col-4 ">
            <a href="/" class="standard">Volver al innicio</a>
        </div>
        <div class="col-4 center">
            <a href="#" class="standard">Mis Servicios</a>
        </div>
    </div>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6 center">
            <span ><a href="#" class="standard">Ver contenido multimedia</a></span>
        </div>
    </div>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6 center">
            <p>MI SALDO: SALDOUSER </p>
        </div>
    </div>
@endsection
