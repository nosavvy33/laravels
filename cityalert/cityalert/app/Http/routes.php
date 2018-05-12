<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/usuario/ver','UsuarioController@index');

//va al android
Route::get('/usuario/crear/{dni}/{celular}/{imei}','UsuarioController@create');
Route::post('/denuncia/crear/','DenunciaController@create');


Route::get('/usuario/borrar/{id}','UsuarioController@destroy');


Route::get('/', function () {
    return view('welcome');
});
