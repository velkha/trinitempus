<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::factory()
        /* En deshuso, se utilizan random element en los factory
            //for para cuando tienes relaciones con keys foraneas
            ->for(Ciudad::all()
                ->random())
            //times para el numero de veces que quieres que se ejecute, importante
            //el times va a cojer para todas sus repeticiones el primer for elegido
            //si quieres diferentes ciudades en este caso hacer esto en un for each
            /*
             *
             * el
                ->has(Categoria::factory()
                ->create();
        */
            ->times(30)
            ->create();
    }
}
