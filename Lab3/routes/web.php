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

//ROUTES DE EJERCICIO 1
Route::get('/ej1/index','Ejercicio1Controller@index');

Route::post('/ej1/vender','Ejercicio1Controller@vender');

//ROUTES DE EJERCICIO 2
Route::get('/ej2/index','Ejercicio2Controller@index');
Route::post('/ej2/vender','Ejercicio2Controller@vender');

//ROUTES DE EJERCICIO 3
Route::get('/ej3/index','Ejercicio3Controller@index');
Route::post('/ej3/vender','Ejercicio3Controller@vender');
