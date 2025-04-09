<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Backend\BackupController;



Route::get('backups',[BackupController::class , 'index'])->name('backups.index');
Route::get('backups/download',[BackupController::class , 'download'])->name('download.backups');

