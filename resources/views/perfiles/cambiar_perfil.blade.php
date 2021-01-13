@extends('plantillas.plantilla_formularios')

@section('titulo')

@section('modificacion_1', 'Nombre')

@section('modificacion_2')
    <p>Ciudad</p>
    <select id="ciudad" name="ciudad">
        @foreach(\App\Models\Ciudad::all() as $ciudad)
            <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
        @endforeach
        </select>
@endsection

@section('modificacion_3', '')

@section('modificacion_4', 'Datos de contacto')

@section('modificacion_5', 'descripcion')
