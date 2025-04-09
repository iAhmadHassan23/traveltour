<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\BlogController;



Route::resource('blog',BlogController::class );

