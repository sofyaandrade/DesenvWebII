<?php

use App\Http\Controllers\SonoController;
use App\Http\Controllers\CombustivelController;
use App\Http\Controllers\ImcController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::get('/avaliar-sono', [SonoController::class, 'sono']);
Route::match(['get', 'post'], '/avaliar-sono/resultado', [SonoController::class, 'resultadoSono']);

Route::get('/gasto-combustivel', [CombustivelController::class, 'combustivel']);
Route::match(['get', 'post'],'/combustivel/resultado', [CombustivelController::class, 'resultadoCombustivel']);

Route::get('/imc', [ImcController::class, 'imc']);
Route::match(['get', 'post'],'/imc/resultado', [ImcController::class, 'resultadoImc']);