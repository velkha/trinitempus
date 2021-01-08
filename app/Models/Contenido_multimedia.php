<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenido_multimedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'uid_owner',
        'contenido',
    ];
}
