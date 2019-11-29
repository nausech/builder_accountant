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
Route::group(['prefix' => 'v1', 'middleware' => ['cors']], function() {

	//Rutas si autenticar   
    Route::post('login', 'Api\AuthController@login');

    Route::group(['middleware' => 'auth:api'], function() {

    	Route::get('logout', 'Api\AuthController@logout');

    });

});


    