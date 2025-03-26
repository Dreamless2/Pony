<?php

use Illuminate\Support\Facades\Route;

Route::get('/primeiro', [FilmesController::class, 'Primeiro']);
Route::get('/ultimo',  [FilmesController::class, 'Ultimo']);
