<?php

// Put your web routes here

use App\Modules\Public\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'movies',
], function () {
    Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
    Route::get('/{movie}', [MoviesController::class, 'show'])->name('movies.detail');
})->whereNumber('movie');
