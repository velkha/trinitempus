@if( Auth::check())
<html>
<head>
    <title></title>
</head>

<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
<script type="text/javascript" src="{{ asset('js/app.js') }}">
</script>

<body>

    @extends('footer-nav.nav')
    @section('TextoModif','Mi Contenido Multimedia')

<section>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 withBackground">
            <div class="row">
                <div class="col-12">
                    <div class="row" id="lista_compras">
                        <div class="col-6">Imagen</div>
                        <div class="col-6">URL</div>
                    </div>

                    @foreach(\App\Http\Controllers\Contenido_multimediaController::getContenidoFromUser(Auth::user()->id) as $multimedia)
                        <div class="row">
                            <div class="col-5">
                                <img src="{{\App\Http\Controllers\Contenido_multimediaController::getContenido($multimedia->contenido)}}" alt="imagen con referencia al contenido">
                            </div>
                            <div class="col-6">{{$multimedia->contenido}}</div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
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
