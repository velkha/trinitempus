@if( Auth::check())
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css') }}" />
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>


</head>
<body>
<nav>
    @extends('footer-nav.nav')
    @section('TextoModif','Servicios')
</nav>
<section>
    <div class="row">
        <form action="{{url("/servicios")}}" method="get">
        <div class="col-3">

        </div>

        <div class="col-2 withBackground">
            <label>ELIGE UNA CIUDAD</label>
        </div>
        <div class="col-2 withBackground">
            <select id="ciudad" name="ciudad">
                <option value="-1">NINGUNA</option>
                @foreach(\App\Models\Ciudad::all() as $ciudadObj)
                    <option value="{{$ciudadObj->id}}">{{$ciudadObj->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <button type="submit" class="btnCamuflado">FILTRAR</button>
        </div>
        <div class="col-3">

        </div>
        </form>
    </div>
    @if($ciudad==-1)
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 gallery">
                @foreach(\App\Models\Servicio::all() as $servicio)
                    <a href="{{url("servicio/".$servicio->id)}}">
                        <figure class="gallery__item">
                            <img  alt="img1" class="gallery__img" src="{{\App\Http\Controllers\Contenido_multimediaController::getContenido($servicio->foto_principal)}}">
                            <p class="img__description">{{$servicio->descripcion}}</p>

                        </figure>
                    </a>
                @endforeach
            </div>
        </div>
    @else

        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 gallery">
                @foreach(\App\Models\Servicio::where('id_ciudad', $ciudad)->get() as $servicio)
                    <a href="{{url("servicio/".$servicio->id)}}">
                        <figure class="gallery__item">
                            <img  alt="img1" class="gallery__img" src="{{\App\Http\Controllers\Contenido_multimediaController::getContenido($servicio->foto_principal)}}">
                            <p class="img__description">{{$servicio->descripcion}}</p>
                        </figure>
                    </a>
                @endforeach
            </div>
        </div>
    @endif

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
