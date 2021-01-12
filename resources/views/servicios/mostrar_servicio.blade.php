@extends('plantillas.plantilla_perfiles')

@section('imagenPrincipal')
    {{asset('assets/local/foca.jpg')}}
@endsection
@section('campo_datos_1', $data->nombre)

@section('campo_datos_2',  \App\Http\Controllers\DatosServiciosController::getDurationInString($data->duracion));

@section('campo_datos_3', $data->precio_decimal.' tempus')

@section('campo_datos_central', "Fechas disponibles: ".$data->rango_fechas)

@section('descripcion')
    <div class="row">
        <div class="col-6">
            <p><b>Nombre propietario: </b>{{$data->getOwner->name}}</p>
        </div>
        <div class="col-6">
            <p><b>Puntuacion:</b> {{$data->puntuacion}}</p>
        </div>
    </div>
    <div class="row">
        <p>{{$data->descripcion}}</p>
    </div>

@endsection

@section('zonaExtra')
    <div class="row" >
        <div class="col-2"></div>
        <div class="col-2">
            <a href="#" class="standard">ADQUIRIR SERVICIO</a>
        </div>
        <div class="col-1"></div>
        <div class="col-2">
            <a href="#" class="standard">Denunciar</a>
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
            <form method="post" action="{{url("sendComentario")}}">
                @csrf
                <input type="hidden" name="id_usuario" value="{{Auth::user()->id}}">
                <input type="hidden" name="tipo_comentario" value="0">
                <input type="hidden" name="id_padre" value="{{$data->id}}">

                <div class="row">
                    <textarea name="texto_comentario" rows="10" class="comentariosServicio" placeholder="¿Qué Opinas?"></textarea>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="checkbox" id="cbPrivado" name="privado" value="privado">
                        <label for="cbPrivado">Comentario privado?</label>
                    </div>
                    <div class="col-6">
                        <button type="submit" value="Submit" class="btnCamuflado">Enviar Comentario</button>.
                    </div>
                </div>


            </form>

            @foreach(\App\Http\Controllers\ComentarioController::getComentariosFromServicio($data->id) as $comentario)
                <div class="row withBackground">
                    <div class="col-3">
                        <img src="{{\App\Http\Controllers\Contenido_multimediaController::getContenido($comentario->getUsuario->id_foto_perfil)}}" class="imageCenter" alt="Imagen con referencia al contenido de la seccion  ">
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
