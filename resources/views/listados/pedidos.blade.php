@extends('plantillas.plantilla_listados')
@section('TextoModif','Listado Pedido')
@section('tabla')
    <div class="row" id="lista_pedidos">
        <div class="col-3">Nombre Pedido</div>
        <div class="col-3">ID pedido</div>
        <div class="col-3">ID_solicitante</div>
        <div class="col-3">Estado</div>
    </div>

    @foreach(\App\Http\Controllers\PedidoController::listarTodosPedidos() as $pedidos)
        <div class="row">
            <div class="col-3">{{$pedidos->getServicio->nombre}}</div>
            <div class="col-3">{{$pedidos->id}}</div>
            <div class="col-3">{{$pedidos->uid_cliente}}</div>
            <div class="col-3">{{$pedidos->estado}}</div>
            </form>
        </div>
    @endforeach
@endsection
