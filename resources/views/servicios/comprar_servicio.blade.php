@if( Auth::check())
    @extends('plantillas.plantilla_servicios')
    @section('TextoModif', 'Comprar Servicio')
    @section('topServicios')
    <div class="divs-vista-servicios">
        <label class="form-check-label">
            Tu Saldo es:{{Auth::user()->saldo}}
        </label>
    </div>
    @endsection
    @section('cuadriculaServicios')
    <div class="divs-vista-servicios">
        <label class="form-check-label">
            <p>{{'Nombre del servicio: '.$dataServicio->nombre}}</p>
            <p>{{'Descripción: '.$dataServicio->descripcion}}</p>
            <p>{{'Persona que realiza el servicio: '.$dataServicio->getOwner->name}}</p>
            <p>{{'Precio: '.$dataServicio->precio_decimal}}</p>
            <p>{{'Duración aproximada: '.\App\Http\Controllers\DatosServiciosController::getDurationInString($dataServicio->duracion)}}</p>
        </label>
    </div>
    @endsection
    @section('zonaExtra')
    <div class="row">
            <p>{{'El servivio se realizará entre los dias '.$dataServicio->rango_fechas}}
    </div>
    <div class="row">
        <p>Tu saldo restante sera: {{(Auth::user()->saldo-$dataServicio->precio_decimal)}}</p>

    </div>
    <div class="row">
        @if(Auth::user()->saldo-$dataServicio->precio_decimal<0)
            <p>Por lo que no podras comprar el servicio</p>
        @else
            <div class="col-6">
                <form action="{{url("comprobar_servicio")}}" method="post">
                    @csrf
                    <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                    <input type="hidden" name="id_servicio" value="{{$dataServicio->id}}">
                    <button type="submit" class="standard">
                        Comprar
                    </button>
                </form>
            </div>
        @endif
            <div class="col-6">
                <a href="{{url("home")}}">
                    <button class="standard">
                        Cancelar pedido
                    </button>
                </a>
            </div>

    </div>
    @endsection
    @else
    <?php
    header("Location:./");
    exit;
    ?>
@endif
