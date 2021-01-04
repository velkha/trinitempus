<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServicioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Servicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->jobTitle,
            'duracion'=>$this->faker->randomNumber(8, false),
            'descripcion'=>$this->faker->paragraph,
            'precio_decimal'=>$this->faker->randomFloat(2, 0, 5000),
            'id_contenidos_multimedia'=>"{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};",
            'rango_fechas'=>'AAAAMMDD-AAAAMMDD',
            'public_state'=>$this->faker->randomNumber(1),
            'ndenuncias'=>$this->faker->randomNumber(1),
            'n_usos'=>$this->faker->randomNumber(1),
            'puntuacion'=>$this->faker->randomFloat(2, 0, 10),
            'id_comentarios_servicio'=>"{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};",
        ];
    }
}
