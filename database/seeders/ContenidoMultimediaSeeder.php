<?php

namespace Database\Seeders;

use App\Models\Contenido_multimedia;
use App\Models\User;
use Illuminate\Database\Seeder;

class ContenidoMultimediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<5;$i++){
            Contenido_multimedia::factory()->for(User::all()->random)->times(5)->create;
        }
    }
}
