<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudad extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "ciudades";
    protected $fillable = [
        'nombre',
        'latitud',
        'longitud',
        'deleted_at',
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
