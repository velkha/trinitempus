<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public static function getComentariosFromServicio($id){
        $comentario= Comentario::with('getUsuario')->where('id_padre', $id)->where('tipo_comentario', 0)->get();
        $comentario=$comentario->reverse();
        return $comentario;
    }

    function save(Request $req){
        $comentario= new Comentario;
        $comentario->tipo_comentario=$req->tipo_comentario;
        $comentario->id_padre=$req->id_padre;
        $comentario->id_usuario=$req->id_usuario;
        $comentario->texto=$req->texto_comentario;
        if($req->has('privado')){
            $comentario->privado=0;
        }
        else{
            $comentario->privado=1;
        }
        $comentario->save();
        if($req->tipo_comentario==0)
        return redirect(url("/servicio/$req->id_padre"));
        else if($req->tipo_comentario==1){
            //
        }
        else{
            return redirect(url("/home"));
        }
    }
    public static function destroy($id)
    {
        $comentario=Comentario::find($id);
        $comentario->delete();

    }
}
