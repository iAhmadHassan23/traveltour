<?php

use App\Http\Controllers\Backend\BannerController;
use Illuminate\Support\Facades\Route;

Route::resource('banner',BannerController::class );

