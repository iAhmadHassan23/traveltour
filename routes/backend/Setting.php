<?php

use Illuminate\Support\Facades\Route;


Route::get('setting/{page}',[\App\Http\Controllers\Backend\SettingController::class , 'index'])->name('setting.index');
Route::post('setting/{page}',[\App\Http\Controllers\Backend\SettingController::class , 'update'])->name('settings.store');

