<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    </head>
    <body>
    @extends('footer-nav.nav')
    @section('TextoModif', 'Comprar Servicio')
        <section>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 withBackground divs-vista-servicios">
                    <div>
                        <label class="form-check-label">
                            {{'Tu Saldo es: x mins'}}
                        </label>
                    </div>
                    <div>
                        <label class="form-check-label">
                            <p>{{'Nombre del servicio: '}}</p>
                            <p>{{'Información del sedido: '}}</p>
                            <p>{{'Descripción: '}}</p>
                            <p>{{'Persona que realiza el servicio: '}}</p>
                            <p>{{'Precio: '}}</p>
                            <p>{{'Duración aproximada: '}}</p>
                        </label>
                    </div>
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
                </div>
                <div class="col-3"></div>
            </div>

        </section>
    @include('footer-nav.footer')
    </body>
</html>
