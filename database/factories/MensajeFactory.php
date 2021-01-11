<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Comentario;
use App\Models\Mensaje;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MensajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mensaje::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id_emisor=$this->faker->randomElement(User::all());
        do{
            $id_receptor=$this->faker->randomElement(User::all());
        }while($id_emisor==$id_receptor);
        return [
            'id_emisor'=>$id_emisor,
            'id_receptor'=>$id_receptor,
            'mensaje'=>$this->faker->text,
            /*
             * 0-No Enviado
             * 1-No Leido
             * 2-Leido
             * 3-Borrado
             * 4-Bloqueado
             */
            'estado'=>rand(0,4),
        ];

    }
}
