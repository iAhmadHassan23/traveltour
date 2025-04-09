<?php

use \App\Http\Controllers\Backend\MenuController;

Route::group(['prefix' => 'menu', 'middleware' => []], function () {
     Route::get('/', [MenuController::class, 'index'])->name('menu.index');
     Route::post('/update', [MenuController::class, 'menu_update'])->name('menu.update');
     Route::get('/delete/item/{id}', [MenuController::class, 'menu_item_delete'])->name('menu.delete');
});