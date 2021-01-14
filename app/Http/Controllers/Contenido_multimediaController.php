<?php

namespace App\Http\Controllers;

use App\Models\Contenido_multimedia;

class Contenido_multimediaController extends Controller
{
    public static function getContenido($id){

        if($id==null){
            return asset("assets/local/foca.jpg");
        }
        else{
            try{
                $contenido = Contenido_multimedia::find($id);
                if(file_exists(asset("assets/users/".$contenido->uid_owner."/".$contenido->contenido))){
                    return asset("assets/users/".$contenido->uid_owner."/".$contenido->contenido);
                }
                else{
                    return asset("assets/local/foca.jpg");
                }
            }
            catch (\Exception $e){
                    return asset("assets/local/foca.jpg");
                }
            }
    }
    public static function destroy($id)
    {
        $multimedia=Contenido_multimedia::find($id);
        $multimedia->delete();

    }

    public static function getContenidoFromUser($id){
        $multimedia= \App\Models\User::find(4)->getContenido_multimedia;

        return $multimedia;
    }
}
