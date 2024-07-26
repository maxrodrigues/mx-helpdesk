<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddReplyRequest;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AddReplyController extends Controller
{
    public function __invoke(AddReplyRequest $request, $ticket)
    {
        try {
            $ticket = Ticket::with('replies')->where("id", $ticket)->first();
            $ticket->replies()
                ->create([
                    'content' => $request->reply,
                    'user_id' => auth()->id(),
                ]);

            return redirect()
                ->route('tickets.edit', ['ticket' => $ticket]);
        } catch (\Exception $e) {

        }
    }
}
