<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\CiudadController;
/*

use App\Http\Controllers\ComentarioController   ;
use App\Http\Controllers\PedidoController;/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/perfil', function () {
    return view('perfiles/personal_profile');
});
Route::get('/testController/{id}', [PedidoController::class,'getPedidoByOwner'])
    ->name('contentbyservice');

Auth::routes();
//rutas servicios
Route::get('/servicios', function () {
    $ciudad=$_GET['ciudad'];
    return view('servicios/servicios_listado', ['ciudad' => $ciudad]);
});
Route::get('/servicio/{id}', function ($id) {
    $data = \App\Http\Controllers\ServiceController::show($id);
    return view('servicios/mostrar_servicio', ['data' => $data]);
});
Route::post('sendComentario', [ComentarioController::class,'save']);

//-
Route::get('/contenido_servicio/{id}', function($id){
    $dataServicio = \App\Http\Controllers\ServiceController::show($id);
    return view('servicios/mostrar_contenido_multimedia_servicio', ['dataServicio' => $dataServicio]);
});
//Route::post('contenido_servicio/{id}', [\App\Http\Controllers\ServiceController::class,'getContenidoMultimediaServiceView']);
Route::get('/contenido_servicio/{id}/{idcontenido}', function($id, $idcontenido){
    $dataServicio = \App\Http\Controllers\ServiceController::show($id);

    return view('servicios/mostrar_content_con_comentarios',
        ['dataServicio' => $dataServicio], ['id_contenido' => $idcontenido]);

});

Route::get('/perfil/{id}', function ($id) {
    $data = \App\Http\Controllers\UserController::show($id);
    return view('perfiles/personal_profile', ['data' => $data]);
});
Route::get('/modificarPerfil/{id}', function ($id) {
    $data = \App\Http\Controllers\UserController::show($id);
    return view('perfiles/cambiar_perfil', ['data' => $data]);
});

//rutas generales
Route::get('/contact',function () {
    return view('infos/contact');
});
Route::get('/about',function () {
    return view('infos/about');
});
Route::get('/admin',function () {
    return view('admin/opciones');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Rutas solo accesibles para los admins
Route::get('/listaCiudad', function () {
    return view('listados/ciudades');
});
Route::post('/listaCiudad/{id}', function ($id){

   CiudadController::destroy($id);
    return redirect("/listaCiudad");
});
Route::post('/listaCategoria/{id}', function ($id){

    CategoriaController::destroy($id);
    return redirect("/listaCategoria");
});
Route::post('/listaUsuario/{id}', function ($id){

    UserController::destroy($id);
    return redirect("/listaUsuario");
});

Route::post('/listaSubCategoria/{id}', function ($id){

    SubcategoriaController::destroy($id);
    return redirect("/listaCategoria");
});


//Route::post('/listaCiudad/{id}', [CiudadController::class,'destroy($id)']);

Route::get('/listaCategoria', function () {
    return view('listados/categorias');
});
Route::get('/listaUsuario', function () {
    return view('listados/usuarios');
});
Route::get('/nuevaCiudad', function () {
    return view('admin/nueva_ciudad');
});
Route::get('/nuevaCategoria', function () {
    return view('admin/nueva_Categoria');
});

Route::post('/nuevaCiudad/creando','App\Http\Controllers\CiudadController@store');
Route::post('nuevaSubCategoria/crear','App\Http\Controllers\SubcategoriaController@store');
Route::post('nuevaCategoria/crear','App\Http\Controllers\CategoriaController@store');

