<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{


    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        //0 -> servicio
        //1 -> Contenido multimedia
        //2 - ???
        'tipo_comentario',
        'id_padre',
        'id_usuario',
        'texto',
        //0-> No
        //1-> Si
        //
        'privado',
        'deleted_at',
    ];
    public function getUsuario(){
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
