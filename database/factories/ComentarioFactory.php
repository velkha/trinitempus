<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Comentario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comentario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //0 -> servicio
            //1 -> Contenido multimedia
            //2 - ???
            'tipo_comentario'=>rand(0,2),
            'texto'=>$this->faker->text,
            'privado'=>rand(0,2),
        ];

    }
}
