<?php

use Illuminate\Support\Facades\Route;

auth()->loginUsingId(1);

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('tickets', \App\Http\Controllers\TicketController::class);
Route::post('add-reply/{ticket}', \App\Http\Controllers\Ticket\AddReplyController::class)->name('ticket.add-reply');
Route::get('assign-me/{ticket}', \App\Http\Controllers\Ticket\SetAgentController::class)->name('ticket.assign-me');
Route::get('requester-me/{ticket}', \App\Http\Controllers\Ticket\SetRequesterController::class)->name('tickets.requester');
Route::get('remove-requester/{ticket}', \App\Http\Controllers\Ticket\RemoveRequesterController::class)->name('tickets.remove-requester');

Route::resource('customers', \App\Http\Controllers\CustomerController::class);

