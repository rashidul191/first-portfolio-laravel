<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('userLogin');
});
