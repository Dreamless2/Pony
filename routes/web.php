<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

Route::get('/obterfilme', [FilmesController::class, 'ObterFilme']);
Route::get('/primeiro', [FilmesController::class, 'Primeiro']);
Route::get('/ultimo',  [FilmesController::class, 'Ultimo']);
