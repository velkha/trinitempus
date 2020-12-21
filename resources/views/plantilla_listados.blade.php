<html>
<head>
    <title></title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
<body>

    @include('nav')

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
                @section('tabla')
                @show
            </div>
        </div>
    </div>

</section>
    @include('footer')
</body>

</html>

