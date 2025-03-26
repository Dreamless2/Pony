<?php

use Illuminate\Support\Facades\Route;

Route::get('/primeiro', 'FilmesController@Primeiro');
Route::get('/ultimo', 'FilmesController@Ultimo');
