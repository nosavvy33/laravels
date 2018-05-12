<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//list articles

Route::get('articles','ArticleController@index');

Route::get('article/{id}','ArticleController@show');

Route::post('article','ArticleController@store');


Route::put('article','ArticleController@store');

Route::delete('article/{id}','ArticleController@destroy');

/*
PASSPORT KEYS
Encryption keys generated successfully.
Personal access client created successfully.
Client ID: 1
Client Secret: SK4EP2Y8t0tMI6FFipYzc1uutXveOK0ok6izslas
Password grant client created successfully.
Client ID: 2
Client Secret: Vzitvf24rMzwGM0Oibb1be2MuV2PMJyzG6Jg2hC1

*/

Route::post('login','PassportController@login');
Route::post('register','PassportController@register');
Route::group(['middleware'=>'auth:api'],function(){
		Route::post('get-details','PassportController@getDetails');
});
