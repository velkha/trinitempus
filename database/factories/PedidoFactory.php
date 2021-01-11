<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Comentario;
use App\Models\Pedido;
use App\Models\Servicio;
use App\Models\User;
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
            'id_servicio'=>$this->faker->randomElement(Servicio::all()),
            'uid_cliente'=>$this->faker->randomElement(User::all()),
            'contenido_multimedia_pedido'=>"{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};",
            'comentarios_pedido'=>"{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};{$this->faker->randomNumber(1)};",
            // 0 - Falta Confirmar
            // 1 - Confirmado
            // 2 - En Progreso
            // 3 - Completado
            // 4 - Error
            // 9 - Test
            'estado'=>9
        ];

    }
}
