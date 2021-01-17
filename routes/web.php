<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//con este linea de codigo se crean todas las rutas necesarias del crud
//para ver las rutas ejecutamos el comando:
//php artisan route:list
Route::resource('cliente', 'ClienteController');

Route::resource('servicio', 'ServicioController');

Route::get('/empleadoNuevo',function (){
  
    return view('empleado/create');

});

Route::get('/empleadoIndex', function (){

    return view('empleado/index');

});

Route::get('/reparacionIndex', function (){

    return view('reparacion/index');

});

Route::get('/reparacionNuevo',function (){
    return view('reparacion/create');
});

Route::get('/cajaNueva',function(){
    return view('caja/create');
});

Route::resource('shows', 'ShowController');

