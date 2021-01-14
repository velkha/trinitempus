@if( Auth::check())
    <!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
@extends('footer-nav.nav')
<section>

    <div class="row">
        <form action="{{url("/modificarPerfil")}}" method="post">
            @csrf
            <input type="hidden" name="id_usuario" value="{{$data->id}}">

            <div class="col-3"></div>
            <div class="col-6 withBackground">
                <div class="row">
                    <div class="col-9">
                        <div class="row">
                            <p>Nombre</p>
                            <input type="text" name="name" value="{{$data->name}}">
                        </div>
                        <br>
                        <div class="row">
                            <p>Ciudad</p>
                            <select id="ciudad" name="id_ciudad">
                                @foreach(\App\Models\Ciudad::all() as $ciudad)
                                    <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="row">
                            <p>Correo</p>
                            <input type="text" name="email" value="{{$data->email}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col3"></div>
                    <div class="col-6">
                        <p>Telefono</p>
                        <input type="text" name="telefono" value="{{$data->telefono}}">
                    </div>
                    <div class="col3"></div>
                </div>
                <div class="row">
                    <div class="col3"></div>
                    <div class="col-6">
                        <p>Datos de contacto</p>
                        <input type="text" name="datos_contacto" value="{{$data->datos_contacto}}">
                    </div>
                    <div class="col3"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>Descripcion</p>
                        <textarea name="about_me" cols="40" rows="5">{{$data->about_me}}</textarea>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="standard" value="Modificar">
                </div>
            </div>
            <div class="col-3"></div>
        </form>
    </div>
</section>
@extends('footer-nav.footer')
</body>
</html>
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
