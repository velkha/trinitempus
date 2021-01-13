@if( Auth::check() && Auth::user()->isAdmin())
@extends('plantillas.plantilla_listados')
@section('TextoModif','Listado Categoria')
@section('listType', 'categorias')
@section('tabla')
    <div class="row" id="lista_categorias">
        <div class="col-2">ID</div>
        <div class="col-2">Categoria</div>
        <div class="col-2">Tipo de categoria</div>
        <div class="col-2">Categoria padre</div>
        <div class="col-2">Modificar</div>
        <div class="col-2">Borrar</div>
    </div>
    @foreach(\App\Models\Categoria::all() as $categoria)
        <div class="row">
            <div class="col-2">{{$categoria->id}}</div>
            <div class="col-2">{{$categoria->nombre}}</div>
            <div class="col-2">PRINCIPAL</div>
            <div class="col-2"></div>
            <div class="col-2">Modificar</div>
            <form method="post" action="{{url("/listaCategoria/".$categoria->id)}}">
                <div class="col-2">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btnCamuflado">Borrar</button>

                </div>
            </form>
        </div>
    @endforeach
    @foreach(\App\Models\Subcategoria::all() as $categoria)
        <div class="row">
            <div class="col-2">{{$categoria->id}}</div>
            <div class="col-2">{{$categoria->nombre}}</div>
            <div class="col-2">Secundaria</div>
            <div class="col-2">{{$categoria->id_categoria_padre}}</div>
            <div class="col-2">Modificar</div>
            <form method="post" action="{{url("/listaSubCategoria/".$categoria->id)}}">
                <div class="col-2">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btnCamuflado">Borrar</button>

                </div>
            </form>
        </div>
    @endforeach
@endsection
@section('zonaExtra')
    <div class="row">
        <div class="col-4"></div>

        <div class="col-4"><button class="standard" role="link" onclick="window.location='/trinitempus/public/nuevaCategoria'">Nueva Categoria</button></div>
        <div class="col-4"></div>

    </div>
@endsection
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif

