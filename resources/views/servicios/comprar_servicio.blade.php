@if( Auth::check())
    @extends('plantillas.plantilla_servicios')
    @section('TextoModif', 'Comprar Servicio')
    @section('topServicios')
    <div class="divs-vista-servicios">
        <label class="form-check-label">
            {{'Tu Saldo es: x mins'}}
        </label>
    </div>
    @endsection
    @section('cuadriculaServicios')
    <div class="divs-vista-servicios">
        <label class="form-check-label">
            <p>{{'Nombre del servicio: '}}</p>
            <p>{{'Información del sedido: '}}</p>
            <p>{{'Descripción: '}}</p>
            <p>{{'Persona que realiza el servicio: '}}</p>
            <p>{{'Precio: '}}</p>
            <p>{{'Duración aproximada: '}}</p>
        </label>
    </div>
    @endsection
    @section('zonaExtra')
    <div>
        <label class="form-check-label">
            <p>{{'El servivio se realizará el dd-mm-aaaa a las 00:00'}}
        </label>
    </div>
    <div class="col-md-6 row">
        <button type="submit" class="btn-cancelar-pedido">
            {{'Cancelar Pedido'}}
        </button>
        <div class="col-1"></div>
        <button type="submit" class="btn-comprar-pedido">
            {{'Comprar'}}
        </button>
    </div>
    @endsection
    @else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
