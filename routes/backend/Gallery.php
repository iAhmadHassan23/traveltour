<?php

use \App\Http\Controllers\Backend\GalleryController;

Route::group(['prefix' => 'gallery', 'middleware' => []], function () {
    Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
    Route::delete('/delete/gallery/image/{gallery_id}', [GalleryController::class, 'delete'])->name('remove.gallery.image');
    Route::post('/replace/gallery/image/{gallery_id}', [GalleryController::class, 'replace_image'])->name('gallery.image.replace');
    Route::post('/new/gallery/image', [GalleryController::class, 'image_upload'])->name('gallery.image.upload');
});