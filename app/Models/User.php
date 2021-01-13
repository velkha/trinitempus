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
        /* 0- Error 1-Confirmado 9- Admin*/
        'nivel_de_usuario',
        //fk
        'id_usuario',
        'id_emisor',
        'uid_cliente',
        'id_receptor',
        'uid_owner',
        'deleted_at',
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

    public function getServicios(){
        return $this->hasMany(Servicio::class, 'uid_owner');
    }
    public function getPedidos(){
        return $this->hasManyThrough(Pedido::class, Servicio::class, 'uid_owner', 'id_servicio');
    }
    public function getComentarios(){
        return $this->hasMany(Comentario::class, 'id_usuario');
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
    public function getCompras(){
        return $this->hasMany(Pedido::class, 'uid_cliente');
    }
    /**
     * Retorna true si el usuario correspondiente a la id es admin, false si no
     *
     */
    public function isAdmin(){
        $nivel = $this->nivel_de_usuario;
        return $nivel==9;
    }
}
