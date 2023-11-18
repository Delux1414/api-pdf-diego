<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Principal*/

Route::get('/', function () {
    return view('welcome');
});

/*Ruta a registro*/

Route::get('/register', [RegistroController::class, 'index'])->name('registrarse');
Route::post('/register', [RegistroController::class, 'store']);



/*Vizualizar datos*/

Route::get('/mostrarDatos', [RegistroController::class, 'mostrarDatos'])->name('mostrarDatos');

/*Actualizar datos*/

Route::get('/users/{id}/update', [RegistroController::class, 'actualizar'])->name('usuario.actualizarDatos');
Route::put('/users/{id}/update', [RegistroController::class, 'actualizarDatos'])->name('usuario.actualidarDatos');

/*Eliminar datos*/

Route::delete('/users/{id}', [RegistroController::class, 'eliminarUsuario'])->name('usuario.eliminarUsuario');

/*Actividad pdf owo*/

Route::get('/user/formatoPDF/{id}',[RegistroController::class, 'formatoPDF'])->name('usuario.formatoPDF');



