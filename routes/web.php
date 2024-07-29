<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Ticket\AddReplyController;
use App\Http\Controllers\Ticket\RemoveRequesterController;
use App\Http\Controllers\Ticket\SetAgentController;
use App\Http\Controllers\Ticket\SetRequesterController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

auth()->loginUsingId(1);

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('tickets', TicketController::class);
Route::post('add-reply/{ticket}', AddReplyController::class)->name('ticket.add-reply');
Route::get('assign-me/{ticket}', SetAgentController::class)->name('ticket.assign-me');
Route::get('requester-me/{ticket}', SetRequesterController::class)->name('tickets.requester');
Route::get('remove-requester/{ticket}', RemoveRequesterController::class)->name('tickets.remove-requester');

Route::resource('customers', CustomerController::class);

