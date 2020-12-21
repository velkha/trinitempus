@extends('plantilla_formularios')

@section('titulo')

@section('modificacion_1', 'Nombre')

@section('modificacion_2')
    <p>Ciudad</p>
    <select name="Ciudad">
        <option value="null"></option>
        <option value="cat1">1</option>
        <option value="cat2">2</option>
        <option value="cat3">3</option>
        <option value="cat4">4</option>
        <option value="cat5">5</option>
        <option value="cat6">6</option>
    </select>
@endsection

@section('modificacion_3', '')

@section('modificacion_4', 'Datos de contacto')

@section('modificacion_5', 'descripcion')
