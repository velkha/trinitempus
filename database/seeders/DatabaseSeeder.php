<?php

namespace Database\Seeders;

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
            CiudadSeeder::class,


            ServiciosSeeder::class
    ]);
    }
}
