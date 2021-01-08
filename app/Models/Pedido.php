<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_servicio',
        'uid_cliente',
        'contenido_multimedia_pedido',
        'comentarios_pedido',

    ];

    public function getServicio(){
        return $this->belongsTo(Servicio::class, 'id_servicio');
    }

    public function getCliente(){
        return $this->belongsTo(User::class, 'uid_cliente');
    }

}
