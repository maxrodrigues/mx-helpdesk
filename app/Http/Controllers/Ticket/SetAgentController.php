<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class SetAgentController extends Controller
{
    public function __invoke(Request $request, $ticket)
    {
        try {
            $ticket = Ticket::where('id', $ticket)->first();
            $ticket->user_id = auth()->user()->id;

            $ticket->save();
            return redirect()->route('tickets.edit', ['ticket' => $ticket]);
        } catch (\Exception $e) {
            // Todo: Log and return exception
             return $e->getMessage();
        }
    }
}
