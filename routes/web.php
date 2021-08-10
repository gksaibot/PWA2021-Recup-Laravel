<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\RubroController;

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

Route::resource('busqueda', BusquedaController::class);
Route::get('busqueda/rubro/{idRubro}',[BusquedaController::class,'busquedaRubro'])->name('busqueda.busquedaRubro');

Route::resource('inscripcion', InscripcionController::class);
Route::get('inscripciones/busqueda/{idBusqueda}',[InscripcionController::class,'inscripcionBusqueda'])->name('inscripcion.inscripcionBusqueda');

Route::resource('rubro', RubroController::class);
