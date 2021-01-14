@if( Auth::check())
@extends('plantillas.plantilla_listados')
@section('TextoModif','Listado Pedido')
@section('tabla')
    <div class="row" id="lista_pedidos">
        <div class="col-3">Nombre Pedido</div>
        <div class="col-3">ID pedido</div>
        <div class="col-3">Nombre Solicitante</div>
        <div class="col-3">Estado</div>
    </div>

    @foreach(\App\Http\Controllers\PedidoController::getPedidoByOwner(Auth::user()->id) as $pedidos)
        <div class="row">
            <div class="col-3">{{$pedidos->getServicio->nombre}}</div>
            <div class="col-3">{{$pedidos->id}}</div>
            <div class="col-3">{{$pedidos->getCliente->name}}</div>
            <div class="col-3">{{$pedidos->estado}}</div>
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
