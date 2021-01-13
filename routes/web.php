<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
/*
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
    ->name('servicebyid');

Auth::routes();
Route::get('/servicios', function () {
    return view('servicios/servicios_listado');
});
Route::get('/servicio/{id}', function ($id) {
    $data = \App\Http\Controllers\ServiceController::show($id);
    return view('servicios/mostrar_servicio', ['data' => $data]);
});
Route::get('/perfil/{id}', function ($id) {
    $data = \App\Http\Controllers\UserController::show($id);
    return view('perfiles/personal_profile', ['data' => $data]);
});
Route::get('/modificarPerfil/{id}', function ($id) {
    $data = \App\Http\Controllers\UserController::show($id);
    return view('perfiles/cambiar_perfil', ['data' => $data]);
});

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
