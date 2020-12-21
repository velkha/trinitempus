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
Route::get('/test', function () {
    return view('secciones_multiples');
});
/*Auth::routes();

<<<<<<< HEAD
Auth::routes();
Route::get('/lista', function () {
    return view('listados/categorias');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
>>>>>>> 58fe59e87909f46019bee5493342f8a6a6321d46
