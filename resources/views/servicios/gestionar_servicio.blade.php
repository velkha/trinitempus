@extends('plantillas.plantilla_formularios')

@section('titulo')

@section('modificacion_1', 'Nombre Servicio')

@section('modificacion_2')
    <p>Categoria</p>
    <select name="Categoria">
        <option value="null"></option>
        <option value="cat1">1</option>
        <option value="cat2">2</option>
        <option value="cat3">3</option>
        <option value="cat4">4</option>
        <option value="cat5">5</option>
        <option value="cat6">6</option>
    </select>
    <br>
    <p>Subcategoria</p>
    <select name="subcategoria">
        <option value="null"></option>
        <option value="sub1">1</option>
        <option value="sub2">2</option>
        <option value="sub3">3</option>
        <option value="sub4">4</option>
        <option value="sub5">5</option>
        <option value="sub6">6</option>
    </select>
@endsection

@section('modificacion_3', 'algo')

@section('modificacion_4', 'patatass')

@section('modificacion_5', 'descripcion')
