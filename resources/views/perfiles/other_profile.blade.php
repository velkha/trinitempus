@extends('plantillas.plantilla_perfiles')
@section('imagenPrincipal')
    {{asset('assets/local/foca.jpg')}}
@endsection


@section('campo_datos_2', 'NOMBRE')


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
            <a href="/" class="standard">Volver al innicio</a>
        </div>
        <div class="col-4 center">
            <a href="#" class="standard">Sus Servicios</a>
        </div>
    </div>
@endsection
