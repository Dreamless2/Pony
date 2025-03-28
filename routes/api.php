<?php

use App\Http\Controllers\FilmesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/inserir', [FilmesController::class, 'store']);

Route::get('/primeiro', [FilmesController::class, 'Primeiro'])->name('primeiro');
Route::get('/ultimo',  [FilmesControllersController::class, 'Ultimo'])->name('ultimo');
