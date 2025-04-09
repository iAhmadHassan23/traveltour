<?php

use \App\Http\Controllers\Backend\PageSectionController;

Route::get('sections/{page_id}/pages', [PageSectionController::class, 'page_section'])->name('page.sections');

Route::get('page/sections/{page_id}/create', [PageSectionController::class, 'page_section_create'])->name('page.sections.create');

Route::post('page/section/store/{page_id}', [PageSectionController::class, 'pageStoreSection'])->name('page.sections.store');

Route::get('sections/{id}/edit/{section}', [PageSectionController::class, 'sectionEdit'])->name('sections.edit');
Route::put('section/update/{section_id}', [PageSectionController::class, 'UpdateSection'])->name('sections.update');
Route::delete('section/delete/{section_id}', [PageSectionController::class, 'deleteSection'])->name('sections.delete');
 
Route::get('section/change/status/{id}', [PageSectionController::class, 'changeStatus'])->name('section.update.status');
Route::post('sections/sorting', [PageSectionController::class, 'sectionSorting'])->name('sections.sorting');


Route::get('section/create', [PageSectionController::class, 'create_section'])->name('section.create');
Route::post('section/create/store', [PageSectionController::class, 'create_section_store'])->name('section.create.store');

Route::post('section/{section_id}/duplicate', [PageSectionController::class, 'duplicateRow'])->name('section.duplicate');

