<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
<<<<<<< HEAD:resources/views/plantilla_info.blade.php
@include('nav')
<section>
=======
@include('footer-nav.nav')
<section class="">
>>>>>>> 4c9b2e8ca6aa45aa96f70950aa10b536a4c8ee43:resources/views/plantillas/plantilla_info.blade.php
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 withBackground">
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-4 img-logo-circular"><img src="{{asset('assets/local/fulllogocircular.png')}}" class="infoimg"> </div>
                <div class="col-4">
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    Trinitempus S.L
                </div>
                <div class="col-4"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    @section('texto')
                    @show
                </div>
                <div class="col-2"></div>


            </div>
        </div>
    </div>

</section>




@include('footer-nav.footer')
</body>
</html>

