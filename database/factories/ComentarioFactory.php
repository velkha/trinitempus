<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Comentario;
use App\Models\Contenido_multimedia;
use App\Models\Servicio;
use App\Models\User;
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
        $tipo=rand(0,1);
        switch ($tipo){
            case 0:
                $id_padre=$this->faker->randomElement(Servicio::all());
                break;
            case 1:
                $id_padre=$this->faker->randomElement(Contenido_multimedia::all());
                break;
            case 2:
                //$id_padre=$this->faker->randomElement(????::all());
                break;
        }



        return [
            //0 -> servicio
            //1 -> Contenido multimedia
            //2 - ???
            'tipo_comentario'=>$tipo,
            'id_padre'=>$id_padre,
            'id_usuario'=>$this->faker->randomElement(User::all()),
            'texto'=>$this->faker->text,
            'privado'=>rand(0,2),
        ];

    }
}
