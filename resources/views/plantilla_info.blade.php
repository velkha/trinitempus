<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
</head>
<body>
@include('nav')
<section class="">
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




@include('footer')
</body>
</html>

