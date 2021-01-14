@if( Auth::check())
@extends('plantillas.plantilla_listados')
@section('TextoModif','Listado Compras')
@section('tabla')
    <div class="row" id="lista_compras">
        <div class="col-3">Nombre Servicio</div>
        <div class="col-3">ID Servicio</div>
        <div class="col-3">Precio</div>
        <div class="col-3">Ciudad</div>
    </div>

    @foreach(\App\Http\Controllers\ServiceController::getServiceByUserId(Auth::user()->id) as $servicios)
        <div class="row">
            <div class="col-3">{{$servicios->nombre}}</div>
            <div class="col-3">{{$servicios->id}}</div>
            <div class="col-3">{{$servicios->precio_decimal}}</div>
            <div class="col-3">{{$servicios->getCiudad->nombre}}</div>
            </form>
        </div>
    @endforeach
@endsection
@else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
