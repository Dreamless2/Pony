<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// middleware auth sanctum filmes controller
Route::get('/filmes', [FilmesController::class, 'index']);
Route::get('/filmes/{id}', [FilmesController::class, 'show']);
Route::post('/filmes', [FilmesController::class, 'store']); 

