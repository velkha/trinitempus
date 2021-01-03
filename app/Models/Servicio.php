<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'uid_owner',
        'nombre',
        'categoria',
        'subcategoria',
        'duracion',
        'descripcion',
        'id_ciudad',
        'precio_decimal',
        'foto_principal',
        'id_contenidos_multimedia',
        'rango_fechas',
        'public_state',
        'ndenuncias',
        'n_usos',
        'puntuacion',
        'id_comentarios_servicio',
        'id_servicio'
    ];

    public function getPedidos(){
        return $this->hasMany(Pedido::class, 'id_servicio');
    }
}
