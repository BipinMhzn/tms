<?php

use App\Http\Controllers\MovieController;
use App\Models\Movie;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'movies' => Movie::all()
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// movies
Route::group([
    'middleware' => ['auth:sanctum', 'verified'],
    'prefix' => 'manage/movies',
], function () {
    Route::get('/', [MovieController::class, 'index'])->name('manage.movies.index');
})->whereNumber('movie');

Route::group([
    'prefix' => 'movies',
], function () {
    Route::get('/', [MovieController::class, 'index'])->name('movies.index');
})->whereNumber('movie');
