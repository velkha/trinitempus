<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public static function allPedidosToArray(){

    }
    public static function getPedidosById(){

    }

    /**
     * Devuelve un array de objetos con los diferentes pedidos y el servicio al que hacen referencia
     * @param $id
     */
    public static function getPedidoByServicio($id){
        $pedidos= Servicio::find($id)->with('getPedidos')->get();

        return $pedidos;
    }
    public static function getPedidoByCliente(){

    }
    public static function getPedidoByOwner($id){
        $pedidos= User::find($id)->getPedidos;
        foreach ($pedidos as $pedido) {
            echo '<br>';
            echo $pedido;
            echo '<br>';
        }
    }
}
