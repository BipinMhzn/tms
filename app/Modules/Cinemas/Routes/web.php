<?php

// Put your web routes here

use App\Modules\Cinemas\Controllers\CinemasController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth:sanctum', 'verified'],
    'prefix' => 'manage/cinemas',
], function () {
    Route::get('/', [CinemasController::class, 'index'])->name('manage.cinemas.index');
    Route::post('/', [CinemasController::class, 'store'])->name('manage.cinemas.store');
    Route::put('/{cinema}', [CinemasController::class, 'update'])->name('manage.cinemas.update');
    Route::get('/{cinema}', [CinemasController::class, 'show'])->name('manage.cinemas.show');
    Route::delete('{cinema}', [CinemasController::class, 'destroy'])->name('manage.cinemas.destroy');
    Route::put('/{cinema}/status', [CinemasController::class, 'status'])->name('manage.cinemas.status');
})->whereNumber('cinema');
