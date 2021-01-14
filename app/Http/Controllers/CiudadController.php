<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
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
    public static function listAllAvailableCitys(){
        $ciudades=Ciudad::all();
        return $ciudades;
    }
    public static function listAllDisableCitys(){
        $ciudades=Ciudad::where('habilitado', false)->get();
        return $ciudades;
    }
    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        /*
        $ciudad=new Ciudad();
        return View::make('ciudad.save')->with('ciudad',$ciudad);
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param Request $request
     *
     */
    public static function store(Request $request)
    {

        $ciudad=new Ciudad;
        $ciudad->nombre=$request->get('NCiudad');
        $ciudad->latitud=$request->get('latitud');
        $ciudad->longitud=$request->get('longitud');
        $ciudad->save();
        return redirect("/listaCiudad");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function show($id)
    {
        $ciudad= Ciudad::find($id);

        return $ciudad;
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
     *
     */
    public function update(Request $request, $id)
    {

        $ciudad=Ciudad::find($id);
        $ciudad->nombre=$request->get('NCiudad');
        $ciudad->latitud=$request->get('latitud');
        $ciudad->longitud=$request->get('longitud');
        $ciudad->save();
        return redirect("/listaCiudad");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public static function destroy($id)
    {
        $ciudad=Ciudad::find($id);
        $ciudad->delete();

    }

    public function getAllCiudades(){
        $ciudades = Ciudad::all();
        return $ciudades;
    }

}
