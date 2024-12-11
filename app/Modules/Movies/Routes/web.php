<?php

// Put your web routes here

// movies
use App\Modules\Movies\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth:sanctum', 'verified'],
    'prefix' => 'manage/movies',
], function () {
    Route::get('/', [MoviesController::class, 'index'])->name('manage.movies.index');
})->whereNumber('movie');
