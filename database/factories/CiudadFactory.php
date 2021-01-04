<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CiudadFactory extends Factory
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

            ];
    }
}
public function get(){
    return $this->hasMany(Pedido::class, 'id_servicio');
}
public function get(){
    return $this->belongsTo(Categoria::class, 'id_ciudad');
}
