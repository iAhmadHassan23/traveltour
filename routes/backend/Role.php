<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\RoleController;

Route::resource('roles', RoleController::class);