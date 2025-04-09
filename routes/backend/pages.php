<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\PageController;



Route::resource('page',PageController::class );

Route::get('page/change/index-status/{id}', [PageController::class, 'changeIndexStatus'])->name('page.update.index.status');
Route::get('page/change/status/{id}', [PageController::class, 'changeStatus'])->name('page.update.status');

