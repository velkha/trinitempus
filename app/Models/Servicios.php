<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;
    protected $fillable = [
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
    ];
}
