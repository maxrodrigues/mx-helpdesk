<?php

namespace App\Http\Controllers\Api\Ticket;

use App\Enum\TicketStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Ticket\AddReplyRequest;
use App\Models\Customer;
use App\Models\Reply;
use App\Models\Ticket;
use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AddReplyController extends Controller
{
    public function __invoke(AddReplyRequest $request)
    {
        try {
            $data = $request->validated();
            $customerId = Customer::whereUuid($request->customer)->first()->id;
            Reply::create([
                'ticket_id' => $data['ticket'],
                'customer_id' => $customerId,
                'content' => $data['content'],
            ]);

            $ticket = Ticket::whereId($request->ticket)->first();
            $ticket->status = TicketStatusEnum::ANSWERED_BY_CUSTOMER;
            $ticket->save();

            return new JsonResponse([
                'data' => [
                    'message' => $data
                ],
            ], Response::HTTP_OK);
        } catch (Exception $e) {
            return new JsonResponse([], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
