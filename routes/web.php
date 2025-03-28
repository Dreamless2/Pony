<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [FilmesController::class, 'index'])->name('home');
Route::get('/', [FilmesController::class, 'ObterFilme']);
Route::get('/primeiro', [FilmesController::class, 'Primeiro'])->name('primeiro');
Route::get('/ultimo',  [FilmesController::class, 'Ultimo'])->name('ultimo');
