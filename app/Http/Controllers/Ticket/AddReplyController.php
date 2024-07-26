<?php

namespace App\Http\Controllers\Ticket;

use App\Enum\TicketStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddReplyRequest;
use App\Models\Ticket;

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

            $ticket->status = TicketStatusEnum::AWAITING_CUSTOMER;
            $ticket->save();

            return redirect()
                ->route('tickets.edit', ['ticket' => $ticket]);
        } catch (\Exception $e) {

        }
    }
}
