<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// middleware auth sanctum filmes controller
Route::middleware('auth:sanctum')->group(function () {
    Route::controller(FilmesController::class)->group(function () {
        Route::get('/filmes', 'index');
        Route::get('/filmes/{id}', 'show');
        Route::post('/filmes', 'store');
        Route::put('/filmes/{id}', 'update');
        Route::delete('/filmes/{id}', 'destroy');
    });
});
});

