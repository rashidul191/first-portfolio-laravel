<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route;

Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [UserController::class, 'userLogin'])->name('userLogin');
});
