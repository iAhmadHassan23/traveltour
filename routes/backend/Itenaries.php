<?php

use App\Http\Controllers\Backend\ItenaryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TourCategoryController;

Route::resource('itenaries', ItenaryController::class);

