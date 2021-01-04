<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::all();
        return $servicios;
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
        uid_owner
        nombre
        categoria
        subcategoria
        duracion
        descripcion
        id_ciudad
        precio_decimal
        foto_principal
        id_contenidos_multimedia
        rango_fechas
        public_state
        ndenuncias
        n_usos
        puntuacion
        id_comentarios_servicio
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = new Servicio;
        $servicio->uid_owner = $request->uid_owner;
        $servicio->nombre = $request->nombre;
        $servicio->categoria = $request->categoria;
        $servicio->subcategoria = $request->subcategoria;
        $servicio->duracion = $request->duracion;
        $servicio->descripcion = $request->descripcion;
        $servicio->id_ciudad = $request->id_ciudad;
        $servicio->precio_decimal = $request->precio_decimal;
        $servicio->foto_principal = $request->foto_principal;
        $servicio->id_contenidos_multimedia = $request->id_contenidos_multimedia;
        $servicio->rango_fechas = $request->rango_fechas;
        $servicio->public_state = $request->public_state;
        $servicio->ndenuncias = $request->ndenuncias;
        $servicio->n_usos = $request->n_usos;
        $servicio->puntuacion = $request->puntuacion;
        $servicio->id_comentarios_servicio = $request->id_comentarios_servicio;
        $servicio->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicios= Servicio::find($id)->get();
        return $servicios;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
    public static function getServiceByUserId($id){
        $servicios= Servicio::where('uid_owner', $id)->get();
        return $servicios;
    }
    public static function getServiceByCityId($id){
        $servicios= Servicio::where('id_ciudad', $id)->get();
        return $servicios;
    }
    public static function addNewComentario($idServicio, $idComentario){
        $servicio= Servicio::find($idServicio);
        $servicio->id_comentarios_servicio=$servicio->id_comentarios_servicio.$idComentario.";";
    }
    public static function addNewContenidoMultimedia($idServicio, $idContenido){
        $servicio= Servicio::find($idServicio);
        $servicio->id_contenidos_multimedia=$servicio->id_comentarios_servicio.$idContenido.";";
    }
}
