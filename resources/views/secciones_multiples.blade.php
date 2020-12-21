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
    @include('nav')
</nav>
<section>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 gallery" id="section_gallery">

        </div>
    </div>
</section>
@include('footer')
</body>
</html>
