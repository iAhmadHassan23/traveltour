<?php

use App\Http\Controllers\Backend\RecentTripController;
use App\Http\Controllers\Backend\ReviewController;
use Illuminate\Support\Facades\Route;

Route::resource('reviews',ReviewController::class );

