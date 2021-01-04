<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'id_ciudad',
        'telefono',
        'about_me',
        'datos_contacto',
        'saldo',
        'id_foto_perfil',
        'nivel_de_usuario',
        //fk
        'id_emisor',
        'id_receptor'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getPedidos(){
        return $this->hasManyThrough(Pedido::class, Servicio::class, 'uid_owner', 'id_servicio');
    }
    public function getMensajesEnviados(){
        return $this->hasMany(Mensaje::class, 'id_emisor');
    }
    public function getMensajesRecibidos(){
        return $this->hasMany(Mensaje::class, 'id_receptor');
    }
    public function getCiudad(){
        return $this->belongsTo(Ciudad::class, 'id_ciudad');
    }
}
