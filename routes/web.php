<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;



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

Auth::routes();

Route::get('/home', [Controllers\HomeController::class, 'index'])->name('home');

Route::resource('persona', Controllers\PersonaController::class);

//Route::resource('compe/perfil', Controllers\PerfilController::class);

//Route::resource('gerenciag', Controllers\GerenciagController::class);

//Route::resource('gerencial', Controllers\GerencialController::class);

//Route::resource('coord', Controllers\CoordinacionController::class);

Route::get('/competencia', [Controllers\CompetenciaController::class, 'index'])->name('competencia');

Route::resource('competencia/compenvl1', Controllers\Compenvl1Controller::class)->except('index');
Route::resource('competencia/compenvl2', Controllers\Compenvl2Controller::class)->except('index');
Route::resource('competencia/compenvl3', Controllers\Compenvl3Controller::class)->except('index');
//Route::resource('compe/asignar', Controllers\PersonaController::class);

//Route::resource('competencia', Controllers\PersonaController::class);


