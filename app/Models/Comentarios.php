<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_comentario',
        'id_padre',
        'id_usuario',
        'texto',
        'privado',
    ];
}
