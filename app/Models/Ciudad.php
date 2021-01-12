<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;
    protected $table = "ciudades";
    protected $fillable = [
        'nombre',
        'latitud',
        'longitud',
        'habilitado',
        //fk
        'id_ciudad'
    ];

    public function getServicios(){
        return $this->hasMany(Servicio::class, 'id_ciudad');
    }
    public function getUsuarios(){
        return $this->hasMany(User::class, 'id_ciudad');
    }
}
