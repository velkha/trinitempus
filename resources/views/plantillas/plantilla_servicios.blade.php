<html>
<head>
    <title></title>
</head>

<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
<script type="text/javascript" src="{{ asset('js/app.js') }}">
</script>

<body>
    @include('footer-nav.nav')
<section>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 withBackground">
            <div class="row">
                <div class="col-12">
                    @section('topServicios')
                    @show
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @section('cuadriculaServicios')
                    @show
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @section('zonaExtra')
                    @show
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</section>
    @include('footer-nav.footer')
</body>

</html>
