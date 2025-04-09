<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\ServiceController;
use \App\Http\Controllers\Backend\SubserviceController;



Route::resource('services',ServiceController::class );

Route::get('services/change/index-status/{id}', [ServiceController::class, 'changeIndexStatus'])->name('services.update.index.status');
Route::get('services/change/status/{id}', [ServiceController::class, 'changeStatus'])->name('services.update.status');

Route::resource('sub_services',SubserviceController::class );

Route::get('sub_services/change/index-status/{id}', [SubserviceController::class, 'changeIndexStatus'])->name('sub_services.update.index.status');
Route::get('sub_services/change/status/{id}', [SubserviceController::class, 'changeStatus'])->name('sub_services.update.status');
