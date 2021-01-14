<?php

namespace App\Http\Controllers;

use App\Models\Subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
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
    public static function listAllAvailableSubCategories(){
        $categorias=SubCategoria::where('habilitado', true)->get();
        return $categorias;
    }
    public static function listAllDisableSubCategories(){
        $categorias=SubCategoria::where('habilitado', false)->get();
        return $categorias;
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
     *
     */
    public static function store(Request $request)
    {
        $subcategoria= new Subcategoria;
        $subcategoria->id_categoria_padre=$request->get('id_categoria_padre');
        $subcategoria->nombre=$request->get('nombre');
        $subcategoria->descripcion="hola"/*$request->descripcion*/;
        $subcategoria->save();
        return redirect('nuevaCategoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function show($id)
    {
        $categoria= Subcategoria::find($id);
        return $categoria;
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
     *'nombre',
    'descripcion',
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public static function update(Request $request, $id)
    {
        if($request->get('id_categoria_padre')!=0){
        $categoria= Subcategoria::find($id);
        $categoria->id_categoria_padre=$request->get('id_categoria_padre');
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion="hola"/*$request->descripcion*/;
        $categoria->save();
    }else{
    CategoriaController::store($request);
    SubcategoriaController::destroy($id);
}
return redirect('/listaCategoria');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id

     */
    public static function destroy($id)
    {
        $categoria=SubCategoria::find($id);
        $categoria->delete();
        return redirect("/listaCategoria");
    }
    public static function getAllCategorias(){
        $categorias = Subcategoria::all();
        return $categorias;
    }
}

