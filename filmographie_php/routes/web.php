<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', function () {
    return view('movies.index');
});

//Route::get('/movies', [MovieController::class, 'index']);

