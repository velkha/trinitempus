<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_categoria_padre',
        'nombre',
        'descripcion',
    ];
}
