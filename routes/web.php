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

Route::get('/cliente_create', 'ClienteController@create');
Route::get('/cliente_index', 'ClienteController@index');

Route::get('/empleadoNuevo',function (){
    return view('empleado/create');
});

Route::get('/empleadoIndex', function (){

    return view('empleado/index');

});

Route::resource('shows', 'ShowController');
Route::resource('cliente', 'ClienteController');
