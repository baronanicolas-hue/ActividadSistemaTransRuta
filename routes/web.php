<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaronaPasajerosController;

Route::get('/', function () {
    return view('BaronaBonilla.BaronaPasajero');
});

# Código desarrollado por BaronaNicolas.
Route::get('/BaronaBonilla/BaronaPasajero', [BaronaPasajerosController::class, 'BaronaCreate'])
    ->name('pasajeros.create');

Route::post('/BaronaBonilla/BaronaPasajero', [BaronaPasajerosController::class, 'BaronaStore'])
    ->name('pasajeros.store');