<?php

// Put your web routes here

use App\Modules\Users\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => ['auth:sanctum', 'verified'],
    'prefix' => 'manage/users',
], function () {
    Route::get('/', [UsersController::class, 'index'])->name('manage.users.index');
})->whereNumber('movie');
