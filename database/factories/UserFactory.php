<?php

namespace Database\Factories;

use App\Models\Ciudad;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'id_ciudad'=>$this->faker->randomElement(Ciudad::all()),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'telefono'=> $this->faker->phoneNumber,
            'about_me' => $this->faker->text(200),
            'datos_contacto'=> $this->faker->text(20),
            'saldo'=> $this->faker->randomFloat(2, 0, 5000),
            'nivel_de_usuario'=> $this->faker->randomNumber(0),
        ];
    }
}
