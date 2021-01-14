@extends('servicios.mostrar_contenido_multimedia_servicio')

@section('comentarios')
    <div class="row">
        <div class="col-12">
            <p>SECCION DE COMENTARIOS</p>
            <form method="post" action="{{url("sendComentario")}}">
                @csrf
                <input type="hidden" name="id_usuario" value="{{Auth::user()->id}}">
                <input type="hidden" name="tipo_comentario" value="1">
                <input type="hidden" name="id_padre" value="{{$id_contenido}}">
                <input type="hidden" name="id_servicio" value="{{$dataServicio->id}}">
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
            @foreach(\App\Http\Controllers\ComentarioController::getComentariosFromContenido($id_contenido) as $comentario)
                @if($comentario->privado==0||$comentario->id_usuario==Auth::user()->id||$dataServicio->getOwner->id==Auth::user()->id)
                    <div class="row withBackground">
                        <div class="col-3">
                            <img src="{{\App\Http\Controllers\Contenido_multimediaController::getContenido($comentario->getUsuario->id_foto_perfil)}}" class="imageCenter" alt="Imagen con referencia al contenido de la seccion  ">
                        </div>
                        <div class="col-9">
                            <a href="{{url("/perfil/".$comentario->getUsuario->id)}}"><h2>{{$comentario->getUsuario->name}}</h2></a>
                            <p>
                                {{$comentario->texto}}
                            </p>

                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
@endsection
