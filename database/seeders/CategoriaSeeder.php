<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::factory()
            ->has(Subcategoria::factory()
                    ->count(2)
            )
            ->times(10)
        ->create();

    }
}
