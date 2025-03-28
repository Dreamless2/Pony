<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FilmesController::class, 'index'])->name('index');
Route::get('/obterfilme', [FilmesController::class, 'ObterFilme'])->name('obterfilme');
Route::get('/primeiro', [FilmesController::class, 'Primeiro'])->name('primeiro');
Route::get('/ultimo',  [FilmesController::class, 'Ultimo'])->name('ultimo');
