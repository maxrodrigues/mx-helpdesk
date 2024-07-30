<?php

namespace App\Http\Controllers\Api\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Ticket;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GetCustomerTicketsController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $customerId = Customer::whereUuid($request->customer)->first()->id;
            $tickets = Ticket::where('customer_id', $customerId)->paginate(10);
            return new JsonResponse([
                'data' => [
                    'tickets' => $tickets
                ],
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return new JsonResponse([
                'data' => [
                    'message' => $e->getMessage(),
                ],
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
