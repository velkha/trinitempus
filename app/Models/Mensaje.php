<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_emisor',
        'id_receptor',
        'mensaje',
        'id_contenido_multimedia',
        'estado'
    ];


}
