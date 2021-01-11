<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Ciudad;
use App\Models\Servicio;
use App\Models\Subcategoria;
use App\Models\User;
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
            'uid_owner'=>$this->faker->randomElement(User::all()),
            'nombre'=>$this->faker->jobTitle,
            'categoria'=>$this->faker->randomElement(Categoria::all()),
            'subcategoria'=>$this->faker->randomElement(Subcategoria::all()),
            //la duracion la trabajamos en segundo
            'duracion'=>$this->faker->randomNumber(8, false),
            'descripcion'=>$this->faker->paragraph,
            'id_ciudad'=>$this->faker->randomElement(Ciudad::all()),
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
