<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PersonaController;
use App\Http\Controllers\Api\V1\Compenvl1Controller;
use App\Http\Controllers\Api\V1\Compenvl2Controller;
use App\Http\Controllers\Api\V1\Compenvl3Controller;

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

Route::apiResource('v1/personas', PersonaController::class);
Route::apiResource('v1/compe1', Compenvl1Controller::class);
Route::apiResource('v1/compe2', Compenvl2Controller::class);
Route::apiResource('v1/compe3', Compenvl3Controller::class);