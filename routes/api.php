<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;

Route::controller(FilmesController::class)->group(function () {
    Route::get('/primeiro', 'primeiro');
    Route::get('/ultimo', 'ultimo');
    Route::post('/inserir', 'store');
});
