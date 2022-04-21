<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;

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

/*
Metodos HTTP
GET: Obtener datos
POST: Enviar datos
PUT
DELETE
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pelicula/{pagina?}', [PeliculaController::class, 'index']);
Route::get('/pelicula/{id}', [PeliculaController::class, 'single']);

Route::get('/', function () {

});

