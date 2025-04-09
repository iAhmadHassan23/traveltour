<?php

use App\Http\Controllers\Backend\DashboardController;

 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');