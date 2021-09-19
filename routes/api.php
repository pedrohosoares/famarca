<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\ColaboratorResource;
use App\Models\Colaborator;


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

use App\Http\Controllers\ColaboratorController;
use App\Http\Controllers\WageController;

Route::get('colaboradores',[ColaboratorController::class,'index']);
Route::get('colaborador/{id}',[ColaboratorController::class,'show']);
Route::post('colaborador',[ColaboratorController::class,'insert']);
Route::put('colaborador/{id}',[ColaboratorController::class,'update']);
Route::delete('colaborador/{id}',[ColaboratorController::class,'delete']);



Route::post('salario',[WageController::class,'insert']);
Route::delete('salario/{id}',[WageController::class,'delete']);
