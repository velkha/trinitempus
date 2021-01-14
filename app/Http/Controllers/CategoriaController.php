<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
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
    public static function listAllAvailableCategories(){
        $categorias=Categoria::where('habilitado', true)->get();
        return $categorias;
    }
    public static function listAllDisableCategories(){
        $categorias=Categoria::where('habilitado', false)->get();
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
        if ($request->get('id_categoria_padre')==0){
            $categoria= new Categoria;
            $categoria->nombre=$request->get('nombre');
            $categoria->descripcion=$request->get('descripcion');
            $categoria->save();
        }else{
            SubcategoriaController::store($request);

        }
        return redirect('/listaCategoria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function show($id)
    {
        $categoria= Categoria::find($id);
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
        if($request->get('id_categoria_padre')==0) {
            $categoria = Categoria::find($id);
            $categoria->nombre=$request->get('nombre');
            $categoria->descripcion=$request->get('descripcion');
            $categoria->save();

        }else{
            SubcategoriaController::store($request);
            CategoriaController::destroy($id);
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
        $categoria=Categoria::find($id);
        $categoria->delete();
        return redirect("/listaCategoria");
    }
    public static function getAllCategorias(){
        $categorias = Categoria::all();
        return $categorias;
    }
}
