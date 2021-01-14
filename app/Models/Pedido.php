<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id_servicio',
        'uid_cliente',
        'contenido_multimedia_pedido',
        'comentarios_pedido',
        // 0 - Falta Confirmar
        // 1 - Confirmado
        // 2 - En Progreso
        // 3 - Completado
        // 4 - Error
        // 9 - Test
        'estado',
        'deleted_at',
    ];

    public function getServicio(){
        return $this->belongsTo(Servicio::class, 'id_servicio');
    }

    public function getCliente(){
        return $this->belongsTo(User::class, 'uid_cliente');
    }

}
