<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')

Route::post('/inserir', [FilmesController::class, 'store']);
Route::get('/primeiro', [FilmesController::class, 'Primeiro'])->name('primeiro');
Route::get('/ultimo',  [FilmesController::class, 'Ultimo'])->name('ultimo');
