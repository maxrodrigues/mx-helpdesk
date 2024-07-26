<?php

use Illuminate\Support\Facades\Route;

auth()->loginUsingId(1);

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('tickets', \App\Http\Controllers\TicketController::class);
Route::post('add-reply/{ticket}', \App\Http\Controllers\AddReplyController::class)->name('add-reply');
