<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
    @extends('footer-nav.nav')
    @section('TextoModif','Home')
<section>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 withBackground">
            <div class="row imageCenter">
                <div class="col-9">
                    <div class="col-12">
                        <h2>Trinitempus, el pago del futuro</h2>
                        <p>Hay un dicho muy famoso "el tiempo es oro", pero, aun cuando tantas personas coinciden en esto, nuestro tiempo siempre lo acabamos cambiando por dinero...</p>
                        <p>Asi que nosotros te proponemos otra posibilidad, ¿que te pareceria cambiar tu tiempo por mas tiempo?, si alguna vez lo has pensado, Trinitempus es tu sitio</p>
                        <p>Ven y explora las infinitas posibilidades que tienes cambiando tu tiempo por el de otros</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="aside">
                        <h2>¿Quien?</h2>
                        <p>Un pequeño grupo de alumnos de DAM</p>
                        <h2>¿Porque?</h2>
                        <p>Creemos en la posibilidad de el uso de una nueva moneda el tiempo</p>
                        <h2>¿Como?</h2>
                        <p>Mediante esfuerzo y dedicacion</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="gallery">
                    @foreach(\App\Models\Servicio::all()->random(9) as $servicio)
                        <a href="{{url("servicio/".$servicio->id)}}">
                            <figure class="gallery__item">
                                <img  alt="img1" class="gallery__img" src="{{\App\Http\Controllers\Contenido_multimediaController::getContenido($servicio->foto_principal)}}">
                                <p class="img__description">{{$servicio->descripcion}}</p>

                            </figure>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer-nav.footer')
</body>
</html>
