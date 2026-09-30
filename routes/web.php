<?php

//use <-> import
use App\Http\Controllers\PrimerasRutasController;
use App\Http\Controllers\SegundasRutasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrimerasRutasController::class, 'index']);
Route::get('mensaje', [PrimerasRutasController::class, 'primerMensaje']);
Route::get('segunda/enlaces', [SegundasRutasController::class, 'enlaces']);
Route::get('tercera/destino', [App\Http\Controllers\TercerasRutasController::class, 'notFound']);

//ruta tercera/destino en el controller TercerasRutasController a un método de ese controller

//ejemplo de lo que NO hay que hacer
/*Route::get('/', function () {
    return view('welcome');
});*/

//ejemplo de definición de una ruta
//Route::get('ruta', [NombreControlador::class, 'método']);