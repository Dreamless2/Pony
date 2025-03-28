<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(FilmesController::class)->group(function () {
    Route::get('/primeiro', 'Primeiro');
    Route::get('/ultimo', 'Ultimo');
    Route::post('/store', 'store');
});
