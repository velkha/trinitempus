<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Contenido_multimedia;
use Illuminate\Database\Eloquent\Factories\Factory;

class Contenido_multimediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contenido_multimedia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contenido'=>$this->faker->text(5),
        ];
    }
}
