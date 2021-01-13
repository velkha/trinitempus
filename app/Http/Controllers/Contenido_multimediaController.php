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
                $contenido = Contenido_multimedia::find($id)->get();
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
}
