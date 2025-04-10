<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TourController;

Route::resource('tour',TourController::class );

