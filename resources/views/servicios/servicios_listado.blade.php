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
        <div class="col-3"></div>
        <div class="col-6 gallery">
            @foreach(\App\Models\Servicio::all() as $servicio)
                <a href="{{url("servicio/".$servicio->id)}}">
                    <figure class="gallery__item">

                        <img  alt="img1" class="gallery__img">
                        <p class="img__description">{{$servicio->descripcion}}</p>

                    </figure>
                </a>
            @endforeach
        </div>
    </div>
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
