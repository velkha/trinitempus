<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Comentario;
use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contenido_multimedia_pedido'=>"{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};",
            'comentarios_pedido'=>"{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};",
        ];

    }
}
