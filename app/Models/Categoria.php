<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nombre',
        'descripcion',
        //fk
        'id_categoria_padre',
        'deleted_at',
    ];
    public function getServicio(){
        return $this->hasMany(Servicio::class, 'categoria');
    }
    public function getSubcategorias(){
        return $this->hasMany(Subcategoria::class, 'id_categoria_padre');;
    }
}
