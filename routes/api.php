<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('usuarios',[App\Http\Controllers\RegistroController::class,'index'])->name('usuario.index');

Route::post('usuarios',[App\Http\Controllers\RegistroController::class,'store'])->name('usuario.store');

Route::put('usuario/{id}',[App\Http\Controllers\RegistroController::class,'edit'])->name('usuario.edit');

Route::patch('usuario/{id}',[App\Http\Controllers\RegistroController::class,'update'])->name('usuario.update');

Route::delete('usuario/{id}',[App\Http\Controllers\RegistroController::class,'destroy'])->name('usuario.destroy');