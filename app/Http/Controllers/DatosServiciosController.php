<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatosServiciosController extends Controller
{
    public static function getDurationInString($seconds){
        $t = round($seconds);
        return sprintf('%02d horas %02d minutos %02d segundos', ($t/3600),($t/60%60), $t%60);
    }
}
