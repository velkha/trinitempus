<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Contenido_multimedia;
use App\Models\Mensaje;
use App\Models\Pedido;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_ciudad = $request->id_ciudad;
        $user->telefono = $request->telefono;
        $user->about_me = $request->about_me;
        $user->datos_contacto = $request->datos_contacto;
        $user->saldo = $request->saldo;
        $user->id_foto_perfil = $request->id_foto_perfil;
        $user->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function show($id)
    {
        $user= User::find($id);

        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_ciudad = $request->id_ciudad;
        $user->telefono = $request->telefono;
        $user->about_me = $request->about_me;
        $user->datos_contacto = $request->datos_contacto;
        $user->saldo = $request->saldo;
        $user->id_foto_perfil = $request->id_foto_perfil;
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id

     */
    public static function destroy($id)
    {
        $usuario=User::find($id);
        $usuario->delete();

    }
    /*
    public static function destroySupremo($id)
    {
        $usuario=User::find($id);
        $usuario->delete();

        $servicio=Servicio->getOwner->id;
        $servicio->delete();

        $pedido=Pedido::find($id);
        $pedido->delete();

        $mensaje=Mensaje::find($id);
        $mensaje->delete();

        $multimedia=Contenido_multimedia::find($id);
        $multimedia->delete();

        $comentario=Comentario::find($id);
        $comentario->delete();

    }
    */
    public static function getAllUsuarios(){
        $usuarios = User::all();
        return $usuarios;
    }

}
