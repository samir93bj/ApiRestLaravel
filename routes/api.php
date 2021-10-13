<?php

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


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/articulos','App\Http\Controllers\ArticuloController@index'); //MOSTRAMOS TODOS LOS REGISTROS
Route::post('/articulos/create','App\Http\Controllers\ArticuloController@store');    //ALMACENAMOS EL REGISTRO
Route::put('/articulos/{id}','App\Http\Controllers\ArticuloController@update'); //ACTUALIZAMOS EL REGISTRO
Route::delete('/articulos/{id}','App\Http\Controllers\ArticuloController@destroy'); //ELIMINAMOS EL REGISTRO

