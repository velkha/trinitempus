<html>
<head>
    <title></title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
<body>

    @include('nav')

<section class="list_templates">
    <div class="search">
        <label for="filter">
         <select name="filter" >
            <option value="0">filtrar</option>
            <option >Estado</option>
            <option >Categoria</option>
            <option >Fecha</option>
         </select>
        </label>
        <label for="barSearch">
            <input type="text" name="TextSearcher">
        </label>
        <input type="button" name="Search" value="search">
    </div>
    <div>
        @section('tabla')
        @show
    </div>
</section>
    @include('footer')
</body>

</html>

