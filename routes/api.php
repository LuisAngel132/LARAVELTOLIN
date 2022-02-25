<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pacientes;

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
//---------------------- PACIENTES --------------------------------------------------
Route::GET('/paciente/traer', [pacientes::class, 'SHOW1', function(Request $request){}]);
Route::GET('/paciente/traert', [pacientes::class, 'SHOW', function(){}]);
Route::POST('/paciente/insertar', [pacientes::class, 'POST', function(Request $request){}]);
Route::DELETE('/paciente/eliminar', [pacientes::class, 'BORRAR', function(Request $request){}]);
Route::PUT('/paciente/actualizar', [pacientes::class, 'EDITAR', function(Request $request){}]);