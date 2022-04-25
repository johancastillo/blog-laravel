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
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Mostrar todos los registros
Route::get('/articles', 'App\Http\Controllers\ArticleController@index');

// Crear un registro
Route::post('/articles/new', 'App\Http\Controllers\ArticleController@store');

// Editar un registro
Route::put('/articles/{id}', 'App\Http\Controllers\ArticleController@update');

// Eliminar un registro
Route::delete('/articles/{id}', 'App\Http\Controllers\ArticleController@destroy');
