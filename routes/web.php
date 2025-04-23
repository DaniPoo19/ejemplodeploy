<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemperaturaController;
use App\Http\Controllers\BisiestoController;

// Página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Grupo de rutas protegidas por autenticación
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // VISTA 1: Conversión de Temperatura
    Route::get('/vista1', [TemperaturaController::class, 'index'])->name('vista1');
    Route::post('/vista1', [TemperaturaController::class, 'convertir'])->name('temperatura.convertir');

    // VISTA 2: Años Bisiestos
    Route::get('/vista2', [BisiestoController::class, 'index'])->name('vista2');
    Route::post('/vista2', [BisiestoController::class, 'calcular'])->name('bisiestos.calcular');
});
