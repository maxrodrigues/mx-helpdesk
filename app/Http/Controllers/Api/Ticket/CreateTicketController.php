<?php

namespace App\Http\Controllers\Api\Ticket;

use App\Enum\TicketPriorityEnum;
use App\Enum\TicketStatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Ticket\CreateTicketRequest;
use App\Models\Customer;
use App\Models\Ticket;
use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CreateTicketController extends Controller
{
    public function __invoke(CreateTicketRequest $request): JsonResponse
    {
        try {
            $data = $request->validated();
            $customer = Customer::where('uuid', $data['customer'])->first();
            if (! $customer) {
                $customer = Customer::create([
                    'uuid' => $data['customer'],
                ]);
            }

            $ticket = Ticket::create([
                'title' => $data['title'],
                'description' => $data['description'],
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
