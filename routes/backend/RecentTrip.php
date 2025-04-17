<?php

use App\Http\Controllers\Backend\RecentTripController;
use Illuminate\Support\Facades\Route;

Route::resource('trips',RecentTripController::class );

