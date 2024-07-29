<?php

namespace App\Http\Controllers;

use App\Enum\TicketPriorityEnum;
use App\Models\Reply;
use App\Models\Ticket;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
//        dd(TicketPriorityEnum::URGENT);
        return view('pages.tickets.index', compact('tickets'));
    }

    public function create()
    {
        return view('pages.tickets.create');
    }

    public function store(Request $request)
    {
        $ticket = Ticket::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 1,
            'priority' => $request->priority,
        ]);

        return redirect()->route('tickets.index');
    }

    public function edit($id)
    {
        try {
            $me = auth()->user();
            $ticket = Ticket::with(['user', 'customer'])->find($id);
            $agent = $ticket->user;
            $customer = $ticket->customer;

            $replies = Reply::with('user')->where('ticket_id', $ticket->id)->get();

            return view('pages.tickets.edit', compact('ticket', 'replies', 'agent', 'me', 'customer'));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function update(Request $request, Ticket $ticket)
    {
        return redirect()->route('tickets.index');
    }

    public function destroy($id)
    {
        Ticket::findOrFail($id)->delete();
        return redirect()->route('tickets.index');
    }
}
