<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\ubicacionController;

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
    return view('welcome');
});


// Rutas para fines de prueba
Route::get('/usuarios/{id}', 'usuariosController@show');
Route::get('/usuarios', 'usuariosController@index');


/*
|--------------------------------------------------------------------------
| Se definen las rutas para realizar
|--------------------------------------------------------------------------
|
| El GET para la ubicacion de un usuario en especifico
| El post para resgistrar los usuarios
| El POST para registrar la ubicacion de un usuario
|
*/

Route::get('/ubicaciones/{id}', 'ubicacionController@show');
Route::post('/usuarios', 'usuariosController@store');
Route::post('/ubicaciones', 'ubicacionController@store');
