@extends('plantilla_perfiles')

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
        <div class="col-2"></div>
        <div class="col-2">
            <a href="#" class="standard">ADQUIRIR SERVICIO</a>
        </div>
        <div class="col-1"></div>
        <div class="col-2">
            <a href="/" class="standard">Denunciar</a>
        </div>
        <div class="col-1"></div>
        <div class="col-2">
            <a href="#" class="standard">Contenido multimedia</a>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>SECCION DE COMENTARIOS</p>
            <div class="row withBackground">
                <div class="col-3">
                    <img src="{{asset('assets/local/foca.jpg')}}" class="imageCenter" alt="Imagen con referencia al contenido de la seccion  ">
                </div>
                <div class="col-9">
                    <h2>Nombre usuario</h2>
                    <p>Contenido comentarioooooo</p>
                    <p>Contenido comentarioooooo</p>
                    <p>Contenido comentarioooooo</p>
                    <p>Contenido comentarioooooo</p>

                </div>
            </div>
            <div class="row withBackground">
                <div class="col-3">
                    <img src="{{asset('assets/local/foca.jpg')}}" class="imageCenter" alt="Imagen con referencia al contenido de la seccion  ">
                </div>
                <div class="col-9">
                    <h2>Nombre usuario</h2>
                    <p>Contenido comentarioooooo</p>
                    <p>Contenido comentarioooooo</p>
                    <p>Contenido comentarioooooo</p>
                    <p>Contenido comentarioooooo</p>

                </div>
            </div>
        </div>
    </div>
@endsection
