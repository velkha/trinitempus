<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mensaje extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id_emisor',
        'id_receptor',
        'mensaje',
        'id_contenido_multimedia',
        /*
         * 0-No Enviado
         * 1-No Leido
         * 2-Leido
         * 3-Borrado
         * 4-Bloqueado
         */
        'estado',
        'deleted_at'
    ];
    public function getEmisor(){
        return $this->belongsTo(User::class, 'id_emisor');
    }
    public function getReceptor(){
        return $this->belongsTo(User::class, 'id_receptor');
    }
}
