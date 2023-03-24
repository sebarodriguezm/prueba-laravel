<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\RubroController;
use App\Http\Controllers\TextoController;
use App\Http\Controllers\LogoController;

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

Route::post('foto',[FileController::class,'upload']);
Route::get('tipo', [TipoController::class,'index']);
Route::get('rubro', [RubroController::class,'index']);
Route::post('logo',[LogoController::class, 'create']);
Route::apiResource('texto',TextoController::class);