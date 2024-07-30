<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('get-tickets', \App\Http\Controllers\Api\Ticket\GetCustomerTicketsController::class);
Route::post('add-reply', \App\Http\Controllers\Api\Ticket\AddReplyController::class);
Route::post('create-ticket', \App\Http\Controllers\Api\Ticket\CreateTicketController::class);

