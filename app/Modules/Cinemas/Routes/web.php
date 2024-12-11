<?php

// Put your web routes here

use App\Modules\Cinemas\Controllers\CinemasController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth:sanctum', 'verified'],
    'prefix' => 'manage/cinemas',
], function () {
    Route::get('/', [CinemasController::class, 'index'])->name('manage.cinemas.index');
})->whereNumber('cinema');
