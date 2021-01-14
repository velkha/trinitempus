<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contenido_multimedia extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'uid_owner',
        'contenido',
        'deleted_at',
    ];
    public function getUsuario(){
        return $this->belongsTo(User::class, 'uid_owner');
    }
}
