@if( Auth::check())
@extends('plantillas.plantilla_formularios')
@section('TextoModif','Modificar Perfil')
@section('titulo')

@section('modificacion_1')
    <p>Nombre</p>
    <input type="text" name="nombre" value="{{$data->name}}">
@endsection

@section('modificacion_2')
    <p>Ciudad</p>
    <select id="ciudad" name="ciudad">
        @foreach(\App\Models\Ciudad::all() as $ciudad)
            <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
        @endforeach
        </select>
@endsection

@section('modificacion_3')
    <p>Correo</p>
    <input type="text" name="correo" value="{{$data->email}}">
@endsection

@section('modificacion_4')
    <p>Telefono</p>
    <input type="text" name="telefono" value="{{$data->telefono}}">
@endsection

@section('modificacion_5')
    <p>Datos de contacto</p>
    <input type="text" name="datosContacto" value="{{$data->datos_contacto}}">
@endsection

@section('modificacion_6')
    <p>Descripcion</p>
    <textarea name="descripcion" cols="40" rows="5">{{$data->about_me}}</textarea>
@endsection
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
