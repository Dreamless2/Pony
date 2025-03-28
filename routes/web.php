<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FilmesController::class, 'index']);
Route::get('/primeiro', [FilmesController::class, 'Primeiro']);
Route::get('/ultimo',  [FilmesController::class, 'Ultimo']);
