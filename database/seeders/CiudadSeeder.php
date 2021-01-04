<?php

namespace Database\Seeders;

use Database\Factories\CiudadFactory;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::factory()->times(20)->create();
    }
}
