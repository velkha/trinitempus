<?php

namespace Database\Seeders;

use App\Models\Comentario;
use Illuminate\Database\Seeder;
class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comentario::factory()
            ->times(500)
            ->create();
    }
}
