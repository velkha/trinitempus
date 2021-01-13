@if( Auth::check())
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
                <div class="col-4">
                    <select name="filter">
                        <option value="0">filtrar</option>
                        <option >Estado</option>
                        <option >Categoria</option>
                        <option >Fecha</option>
                    </select>
                </div>
                <div class="col-4">
                    <input type="text" name="TextSearcher">
                </div>
                <div class="col-4">
                    <input type="button" name="Search" value="search" class="">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @section('tabla')
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
