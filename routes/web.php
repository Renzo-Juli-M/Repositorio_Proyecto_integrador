<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenciaController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OfferController;
<<<<<<< HEAD
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ApartadoController;
use App\Http\Controllers\OfertaController;

Route::get('/ofertas', [OfertaController::class, 'index'])->name('ofertas.index');

Route::post('/apartar', [ApartadoController::class, 'apartar'])->name('apartar');

Route::post('/reservar', [ReservaController::class, 'reservar'])->name('reservar');
=======
>>>>>>> 94bf8d612bf3bc773a1569486983efb722cd191e

Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('index')->middleware('auth');
Route::get('/asistencias/reportes', [AsistenciaController::class, 'reportes'])->name('reportes')->middleware('auth');
Route::get('/asistencias/pdf', [AsistenciaController::class, 'pdf'])->name('pdf')->middleware('auth');
Route::get('/asistencias/pdf_fechas', [AsistenciaController::class, 'pdf_fechas'])->name('pdf_fechas')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes(['register' => true]);

Route::resource('/miembros', \App\Http\Controllers\MiembroController::class)->middleware('can:miembros');
Route::resource('/ministerios', \App\Http\Controllers\MinisterioController::class)->middleware('can:ministerios');
Route::resource('/usuarios', \App\Http\Controllers\UserController::class)->middleware('can:usuarios');
Route::resource('/asistencias', \App\Http\Controllers\AsistenciaController::class)->middleware('auth');

// Ruta pública para ver ofertas
Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');

// Rutas protegidas para el CRUD de ofertas
Route::middleware(['auth'])->group(function () {
    Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
    Route::post('/offers', [OfferController::class, 'store'])->name('offers.store');
    Route::get('/offers/{offer}/edit', [OfferController::class, 'edit'])->name('offers.edit');
    Route::put('/offers/{offer}', [OfferController::class, 'update'])->name('offers.update');
    Route::delete('/offers/{offer}', [OfferController::class, 'destroy'])->name('offers.destroy');
});
