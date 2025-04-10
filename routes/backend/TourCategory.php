<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TourCategoryController;

Route::resource('tour-category',TourCategoryController::class);

