<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public static function allPedidosToArray(){

    }
    public static function getPedidosById(){

    }
    public static function save(Request $req){
        $pedido = new Pedido;
        $servicio= Servicio::find($req->id_servicio);
        $usuario= User::find($req->id_user);
        if($usuario->saldo-$servicio->precio_decimal>0){
            $pedido->id_servicio=$servicio->id;
            $pedido->uid_cliente=$usuario->id;
            $pedido->estado=0;
            $pedido->save();
            return redirect(url("home"));
        }
        else{
            return redirect(url("home"));
        }
    }
    public static function show($id)
    {
        $pedidos= Pedido::find($id);

        return $pedidos;
    }

    public static function listarTodosPedidos(){
        $pedidos=Pedido::all();
        return $pedidos;
    }
    /**
     * Devuelve un array de objetos con los diferentes pedidos y el servicio al que hacen referencia
     */
    public static function getPedidoByServicio($id){
        $pedidos= Servicio::find($id)->with('getPedidos')->get();

        return $pedidos;
    }
    public static function getPedidoByCliente(){

    }
    public static function getPedidoByOwner($id){
        $pedidos= User::find($id)->getPedidos;
        /*foreach ($pedidos as $pedido) {
            echo $pedido->uid_cliente;
            echo $pedido->comentarios_pedido;
        }*/
        return $pedidos;
    }
    public static function destroy($id)
    {
        $pedido=Pedido::find($id);
        $pedido->delete();

    }
}
