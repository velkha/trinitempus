@extends('plantillas.plantilla_perfiles')

@section('imagenPrincipal')
    {{asset('assets/local/foca.jpg')}}
@endsection
@section('campo_datos_1', $data->nombre)

@section('campo_datos_2', $data->duracion)

@section('campo_datos_3', $data->precio_decimal.' tempus')

@section('campo_central', $data->rango_fechas)

@section('descripcion')
    <p>{{$data->descripcion}}</p>
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
            @foreach(\App\Http\Controllers\ComentarioController::getComentariosFromServicio($data->id) as $comentario)
                <div class="row withBackground">
                    <div class="col-3">
                        <img src="{{asset('assets/local/foca.jpg')}}" class="imageCenter" alt="Imagen con referencia al contenido de la seccion  ">
                    </div>
                    <div class="col-9">
                        <h2>{{$comentario->getUsuario->name}}</h2>
                        <p>
                            {{$comentario->texto}}
                        </p>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
