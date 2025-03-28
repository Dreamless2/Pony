<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// middleware auth sanctum filmes controller
Route::middleware('auth:sanctum')->group(function () {
    // route controller FilmesController
    Route::get('/filmes', [FilmesController::class, 'index']);
    Route::post('/filmes', [FilmesController::class, 'store']);
    Route::get('/filmes/{id}', [FilmesController
