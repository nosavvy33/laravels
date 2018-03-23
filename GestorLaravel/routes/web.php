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

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/home','HomeController@index');

Route::get('cine','CineController@index');
Route::post('cine/ventaEntrada','CineController@vender');

Route::get('/productos','ProductoController@index');


Route::get('/persona','PersonaController@index');
Route::get('/persona/{id}','PersonaController@show');
Route::get('/persona/{nombre}/{paterno}/{direccion}','PersonaController@create');
Route::get('/persona/save','PersonaController@create');




Route::get('/auto/show','AutoController@index');
Route::get('/auto/nuevo','AutoController@create');
Route::post('/auto/guardar','AutoController@store');
Route::get('/auto/editar/{id}','AutoController@edit');
Route::get('/auto/eliminar/{id}','AutoController@destroy');
Route::post('/auto/update','AutoController@update');

