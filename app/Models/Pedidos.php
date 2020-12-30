<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_servicio',
        'uid_cliente',
        'contenido_multimedia_pedido',
        'comentarios_pedido',

    ];
}
