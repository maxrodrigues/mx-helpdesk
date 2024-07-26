<?php

use Illuminate\Support\Facades\Route;

auth()->loginUsingId(1);

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('tickets', \App\Http\Controllers\TicketController::class);
Route::post('add-reply/{ticket}', \App\Http\Controllers\Ticket\AddReplyController::class)->name('ticket.add-reply');
Route::get('assign-me/{ticket}', \App\Http\Controllers\Ticket\SetAgentController::class)->name('ticket.assign-me');


Route::resource('customers', \App\Http\Controllers\CustomerController::class);
