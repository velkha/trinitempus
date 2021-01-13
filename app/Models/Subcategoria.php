<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_categoria_padre',
        'nombre',
        'descripcion',
        'deleted_at',
    ];
    public function getCategoriaPadre(){
        return $this->belongsTo(Categoria::class, 'id_categoria_padre');
    }
    public function getServicio(){
        return $this->hasMany(Servicio::class, 'subcategoria');
    }
}
