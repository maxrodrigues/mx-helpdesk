<?php

namespace App\Http\Controllers\Api\Ticket;

use App\Enum\TicketPriorityEnum;
use App\Enum\TicketStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Ticket;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateTicketController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $customer = Customer::where('uuid', $request->customer)->first();
            if (! $customer) {
                $customer = Customer::create([
                    'uuid' => $request->customer,
                ]);
            }

            $ticket = Ticket::create([
                'title' => $request->title,
                'description' => $request->description,
                'status' => TicketStatusEnum::OPEN,
                'priority' => TicketPriorityEnum::LOW,
                'customer_id' => $customer->id,
            ]);

            return new JsonResponse([
                'data' => [
                    'message' => 'Ticket has been created'
                ]
            ], Response::HTTP_CREATED);

        } catch (Exception $e) {
            return new JsonResponse([
                'data' => [
                    'message' => $e->getMessage(),
                ]
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
