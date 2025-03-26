<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

Route::get('/primeiro', [FilmesControllerer::class, 'Primeiro']);
Route::get('/ultimo',  [FilmesController::class, 'Ultimo']);
