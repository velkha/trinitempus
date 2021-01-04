<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        //fk
        'id_categoria_padre'
    ];
    public function getServicio(){
        return $this->hasMany(Servicio::class, 'categoria');
    }
    public function getSubcategorias(){
        return $this->hasMany(Subcategoria::class, 'id_categoria_padre');;
    }
}
