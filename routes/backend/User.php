<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\UserController;

Route::resource('users',UserController::class );

Route::get('/change-password', [UserController::class, 'changepassword'])->name('changepassword');
Route::post('/change-password', [UserController::class, 'change_password'])->name('change.password');