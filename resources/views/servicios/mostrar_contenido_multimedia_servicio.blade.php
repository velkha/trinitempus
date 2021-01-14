@if( Auth::check())
    <!DOCTYPE html>
<html>
<head>
    <title>Multimedia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css') }}" />
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>


</head>
<body>
<nav>
    @extends('footer-nav.nav')
    @section('TextoModif','Contenido Servicio')
</nav>
<section>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 gallery">
            @foreach(\App\Http\Controllers\ServiceController::getContenidoMultimedia($dataServicio->id) as $contenido)

                <form action="{{url("contenido_servicio/".$dataServicio->id."/".$contenido)}}" method="get">
                    <figure class="gallery__item">
                        <input type="image" src="{{\App\Http\Controllers\Contenido_multimediaController::getContenido($contenido)}}"
                               alt="Imagen del contenido"/>
                    </figure>
                </form>
            @endforeach
        </div>
    </div>
</section>
@section('comentarios')

@show
@include('footer-nav.footer')
</body>
</html>
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
