<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public static function getComentariosFromServicio($id){
        $comentario= Comentario::with('getUsuario')->where('id_padre', $id)->where('tipo_comentario', 0)->get();
        return $comentario;
    }
}
