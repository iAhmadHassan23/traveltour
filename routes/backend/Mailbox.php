<?php

use App\Http\Controllers\Mailbox\MailboxController;
use App\Http\Controllers\Mailbox\EmailAccountController;
use App\Http\Controllers\Mailbox\SignatureController;

Route::resource('email-accounts', EmailAccountController::class);
Route::resource('signatures', SignatureController::class);
Route::group(['prefix' => 'mailbox', 'middleware' => []], function () {
    Route::get('/compose/{folderName?}/{message_id?}', [MailboxController::class, 'compose'])->name('admin.mailbox.compose');
    Route::post('/compose/send', [MailboxController::class, 'message_send'])->name('admin.mailbox.message_send');
    Route::post('/delete-message', [MailboxController::class, 'delete'])->name('admin.mailbox.delete.message');
    Route::post('/message/move-to-trash/{message_id}', [MailboxController::class, 'move_to_trash'])->name('admin.message.move_to_trashed');
    Route::post('/delete-message/{message_id}', [MailboxController::class, 'delete_message'])->name('admin.mailbox.delete.single_message');
    Route::get('/{folder_name?}', [MailboxController::class, 'index'])->name('admin.mailbox.index');
    Route::get('/{folder}/{message_id}', [MailboxController::class, 'message_detail'])->name('admin.mailbox.message.detail');
});
