<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [FilmesController::class, 'FilmesController@Primeiro']);
