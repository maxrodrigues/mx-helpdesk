<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Exception;

class RemoveRequesterController extends Controller
{
    public function __invoke($ticket)
    {
        try {
            $ticket = Ticket::where('id', $ticket)->first();
            $ticket->customer_id = null;
            $ticket->save();

            return redirect()->route('tickets.edit', ['ticket' => $ticket]);
        } catch (Exception $e) {
            // Todo: Log and return exception
        }
    }
}
