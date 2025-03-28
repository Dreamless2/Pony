<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// middleware auth sanctum filmes controller
Route::middleware('auth:sanctum')->group(function () {
    Route::controller(FilmesController::class)->group(function () {
        Route::get('/primeoro', 'primeiro');
    });
});
