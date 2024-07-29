<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Ticket;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SetRequesterController extends Controller
{
    public function __invoke($ticket)
    {
        try {
            $user = auth()->user();
            $customer = Customer::where('email', $user->email)->first();

            if(empty($customer)) {
                $customer = Customer::create([
                    'uuid' => Str::uuid(),
                    'name' => $user->name,
                    'email' => $user->email,
                    'phone' => null,
                ]);
            }

            $ticket = Ticket::where('id', $ticket)->first();
            $ticket->customer_id = $customer->id;
            $ticket->save();

            return redirect()->route('tickets.edit', ['ticket' => $ticket->id]);
        } catch (Exception $e) {
            // Todo: Log and return exception
        }
    }
}
