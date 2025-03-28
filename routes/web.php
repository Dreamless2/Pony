<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

Route::get('/primeiro', [FilmesController::class, 'Primeiro'])->name('primeiro');
Route::get('/ultimo',  [FilmesController::class, 'Ultimo'])->name('ultimo');
Route::post('/filmes', [FilmesController::class, 'store']);
