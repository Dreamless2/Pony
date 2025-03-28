<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(FilmesController::class)->group(function () {
        Route::get('/primeiro', 'primeiro');
    });
});
