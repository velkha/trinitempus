<html>
<head>
    <title></title>
</head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
<body>
<nav>
    @extends('nav')
</nav>
<section class="list_templates">
    <div>
         <select name="filter" >
            <option value="0">filtrar</option>
            <option >Estado</option>
            <option >Categoria</option>
            <option >Fecha</option>
         </select>


            <input type="text" name="TextSearcher">


        <input type="button" name="Search" value="Buscar">
    </div>
    <div>
        @section('tabla')
        @show
    </div>
</section>

@extends('footer')
</body>
</html>

