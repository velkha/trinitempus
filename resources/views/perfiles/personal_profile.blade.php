@extends('plantillas.plantilla_perfiles')
@section('TextoModif','Mi Perfil')
@section('imagenPrincipal')
    {{asset('assets/local/foca.jpg')}}
@endsection

@section('campo_datos_1', 'DATO1')

@section('campo_datos_2', 'DATO2')

@section('campo_datos_3', 'DATO3')

@section('campo_central', 'datos de contacto del owner')

@section('descripcion')
    <p>mENUDA GRANDIOSA DESCRIPCION mENUDA GRANDIOSA DESCRIPCION mENUDA GRANDIOSA DESCRIPCION
        mENUDA GRANDIOSA DESCRIPCIONmENUDA GRANDIOSA DESCRIPCIONmENUDA GRANDIOSA DESCRIPCION mENUDA GRANDIOSA DESCRIPCION
        mENUDA GRANDIOSA DESCRIPCIONmENUDA GRANDIOSA DESCRIPCIONmENUDA GRANDIOSA DESCRIPCION
        mENUDA GRANDIOSA DESCRIPCION
        mENUDA GRANDIOSA DESCRIPCION</p>
@endsection

@section('zonaExtra')
    <div class="row" >
        <div class="col-3" >

        </div>
        <div class="col-4 ">
            <a href="{{url("/")}}" class="standard">Volver al innicio</a>
        </div>
        <div class="col-4 ">
            <a href="#" class="standard">Mis Servicios</a>
        </div>
    </div>
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-6 ">
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
