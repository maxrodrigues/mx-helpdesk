<?php

namespace App\Http\Controllers;

use App\Enum\TicketPriorityEnum;
use App\Enum\TicketStatusEnum;
use App\Models\Ticket;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $tickets = Ticket::all();
        $ticketsByImportance = $tickets->groupBy('priority');
        $ticketsUrgentsSla = $tickets->where('priority', TicketPriorityEnum::URGENT);
        $openTickets = [
            'open' => $tickets->where('status', TicketStatusEnum::OPEN)->count(),
            'in_progress' => $tickets
                ->where('status', TicketStatusEnum::IN_PROGRESS)
                ->where('status', TicketStatusEnum::PENDING)
                ->where('status', TicketStatusEnum::AWAITING_CUSTOMER)
                ->where('status', TicketStatusEnum::ANSWERED_BY_CUSTOMER)
                ->count(),
            'closed' => $tickets
                ->where('status', TicketStatusEnum::CLOSED)
                ->where('status', TicketStatusEnum::COMPLETED)
                ->where('status', TicketStatusEnum::CANCELLED)
                ->count(),
        ];

        return view('dashboard', compact(
            'ticketsByImportance',
            'ticketsUrgentsSla',
            'openTickets',
        ));
    }
}
