<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public static function allServicesToArray(){
        $servicios = Servicio::all();
        foreach ($servicios as $servicio){
            echo $servicio;
        }
        return 'end';
    }
    public static function getServiceById($id){
        $servicios= Servicio::where('id', $id)->get();
        foreach ($servicios as $servicio){
            echo $servicio->id;
        }
        return $servicios;
    }
    public static function getServiceByUserId($id){
        $servicios= Servicio::where('uid_owner', $id)->get();

        return $servicios;
    }
    public static function getServiceByCityId($id){
        $servicios= Servicio::where('id_ciudad', $id)->get();

        return $servicios;
    }
}
