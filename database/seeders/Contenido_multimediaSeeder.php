<?php

namespace Database\Seeders;

use App\Models\Contenido_multimedia;
use App\Models\User;
use Illuminate\Database\Seeder;

class Contenido_multimediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contenido_multimedia::factory()
            ->times(100)
            ->create();
    }
}
