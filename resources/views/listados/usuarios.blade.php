@if( Auth::check() && Auth::user()->isAdmin())
@extends('plantillas.plantilla_listados')
@section('TextoModif','Listado Usuarios')
@section('tabla')
    <div class="row" id="lista_usuarios">
        <div class="col-1">UID</div>
        <div class="col-2">Nombre</div>
        <div class="col-6">Mail</div>
        <div class="col-2">Modificar</div>
        <div class="col-1">Borrar</div>
    </div>
    @foreach(\App\Models\User::all() as $usuarios)
        <div class="row">
            <div class="col-1">{{$usuarios->id}}</div>
            <div class="col-2">{{$usuarios->name}}</div>
            <div class="col-6">{{$usuarios->email}}</div>
            <div class="col-2">Modificar</div>
            <form method="post" action="{{url("/listaUsuario/".$usuarios->id)}}">
                <div class="col-1">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btnCamuflado">Borrar</button>

                </div>
            </form>
        </div>
    @endforeach
@endsection
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
