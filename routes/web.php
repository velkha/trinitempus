<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('personal_profile');
});
Route::get('/servicios', function () {
    return view('servicios/servicios_listado');
});
Route::get('/testController/{id}', [App\Http\Controllers\PedidoController::class,'getPedidoByOwner'])
    ->name('servicebyid');

Auth::routes();

Route::get('/contact',function () {
    return view('infos/contact');
});
Route::get('/about',function () {
    return view('infos/about');
});
Route::get('admin',function () {
    return view('admin/opciones');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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



