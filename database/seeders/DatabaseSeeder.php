<?php

namespace Database\Seeders;

use App\Models\Subcategoria;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //añadir el orden de los seeders para rellenar las tablas
        $this->call([

            CategoriaSeeder::class,
            SubcategoriaSeeder::class,
            CiudadSeeder::class,
            UserSeeder::class,
            MensajesSeeder::class,
            ServiciosSeeder::class,
            PedidosSeeder::class,
            MensajesSeeder::class,
            Contenido_multimediaSeeder::class,
            ComentariosSeeder::class
    ]);
    }
}
