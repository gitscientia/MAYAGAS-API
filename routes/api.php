<?php

use App\Http\Controllers\DriverController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signUp');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');



        
        // Rutas conductor
        Route::get('driver', 'DriverController@index' );
        Route::post('registerDrive','DriverController@store');

        // Rutas Ordenes
        Route::get('order', 'OrderController@index');

        // Rutas Unidad
        Route::get('pipe', 'PipeController@index');

        // Rutas Precios
        Route::get('price', 'PriceController@index');

        // Rutas Historial
        Route::get('record', 'RecordController@index');

        // Rutas Estaciones
        Route::get('station', 'StationsController@index');

        // Rutas Estatus
        Route::get('status', 'StatusController@index');

         // Rutas Tipos
         Route::get('type', 'TypeController@index');
    });
});
