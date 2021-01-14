@if( Auth::check() && Auth::user()->isAdmin())
    <!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>

@extends('footer-nav.nav')
@section('TextoModif','Modificar Categoria')
<section>

    <form action="{{url("/modificarCategoria/add/".$categoria->id)}}" method="post">
        @csrf
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 withBackground">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-4">Nombre Categoria
                        <br>
                        <input type="text" name="nombre" value="{{$categoria->nombre}}"></div>

                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-4">
                        <select name="id_categoria_padre">
                            <option value="0">Principal</option>
                            @foreach(\App\Models\Categoria::all() as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <input type="submit" value="Crear/Modificar" class="standard">
                    </div>
                </div>


            </div>
        </div>
    </form>
</section>
@include('footer-nav.footer')

</body>
</html>
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif

