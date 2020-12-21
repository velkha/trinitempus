<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
    </head>
    <body>
    @include('footer-nav.nav')
    @section('TextoModif', 'Comprar Servicio')
        <section>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 withBackground">
                    SALDO
                    <div>

                    </div>
                    INFO
                    <div >

                    </div>
                    FECHA Y HORA
                    <div>

                    </div>
                    BOTONES
                    <div>

                    </div>
                </div>
                <div class="col-3"></div>
            </div>

        </section>
    @include('footer-nav.footer')
    </body>
</html>
