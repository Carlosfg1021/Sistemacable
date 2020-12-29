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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clienteNuevo', function () {
    return view('cliente/create');
});

Route::get('/clienteIndex', function () {
    return view('cliente/index');
});

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

Route::get('/servicioNuevo',function(){
    return view('servicio/create');
});

Route::get('/servicioIndex',function (){
   
    return view('servicio/index');
});

Route::resource('shows', 'ShowController');
