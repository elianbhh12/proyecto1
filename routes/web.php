<?php

use App\Http\Controllers\CerrarSesionController;
use App\Http\Controllers\RegistroCotroller;
use App\Http\Controllers\SecureurlController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/layout', function () {
    return view('layoutprincipal');
});

Route::get('/registrarse', [RegistroCotroller::class, 'index']) ->name('registro');
Route::post('/registrarse', [RegistroCotroller::class, 'store']);

Route::get('/vistausuario', [SecureurlController::class, 'index']) ->name("accesoseguro");

Route::get('/sesion', [LoginController::class, 'index']) ->name("login");
Route::post('/sesion', [LoginController::class, 'store']) ;

Route::get('/logout', [CerrarSesionController::class, 'store']) ->name("logout");



