<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'uid_owner',
        'nombre',
        'categoria',
        'subcategoria',
        'duracion',
        'descripcion',
        'id_ciudad',
        'precio_decimal',
        'foto_principal',
        'id_contenidos_multimedia',
        'rango_fechas',
        'public_state',
        'ndenuncias',
        'n_usos',
        'puntuacion',
        'id_comentarios_servicio',
        'deleted_at',
        //fk
        'id_servicio'

    ];
    public function getOwner(){
        return $this->belongsTo(User::class, 'uid_owner');
    }
    public function getPedidos(){
        return $this->hasMany(Pedido::class, 'id_servicio');
    }

    public function getCategoria(){
        return $this->belongsTo(Categoria::class, 'categoria');
    }

    public function getCiudad(){
        return $this->belongsTo(Categoria::class, 'id_ciudad');
    }

    public function getSubCategoria(){
        return $this->belongsTo(Subcategoria::class, 'subcategoria');
    }

    public function getFotoPrincipal(){
        return $this->belongsTo(Contenido_multimedia::class, 'foto_principal');
    }

}
