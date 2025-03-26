<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FilmesController@Primeiro']);

Route::get('/ultimo', 'FilmesController@Ultimo');
