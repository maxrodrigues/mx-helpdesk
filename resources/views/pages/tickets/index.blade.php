@extends('app')
@section('content')
    <div class="my-5">
        <a href="{{ route('tickets.create') }}" class="bg-green-700 text-white px-10 py-2 font-semibold rounded text-sm">
            <i class="fa-solid fa-plus -ml-5 mr-3"></i>
            Novo Ticket
        </a>
    </div>
    <div class="flex justify-between space-x-5 my-5">
        <div class="bg-white shadow-md rounded min-w-full">
            <div class="flex justify-between items-center border-b border-b-gray-300 p-3">
                <div>
                    <h1>Urgente SLA's</h1>
                </div>
                <div>
                    <select class="bg-gray-200 p-1 text-sm rounded">
                        <option>7 days</option>
                        <option>15 days</option>
                        <option>30 days</option>
                    </select>
                    <i class="fa-solid fa-up-down-left-right bg-gray-200 p-1 rounded"></i>
                    <i class="fa-solid fa-ellipsis bg-gray-200 p-1"></i>
                </div>
            </div>
            <div class="p-0 overflow-x-auto">
                <table class="min-w-full text-xs">
                    <colgroup>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <thead class="bg-gray-300">
                    <tr class="text-left">
                        <th class="p-3 text-center w-16">#</th>
                        <th class="p-3">Ticket title</th>
                        <th class="p-3">Client</th>
                        <th class="p-3">Agent</th>
                        <th class="p-3">Status</th>
                        <th class="p-3">Priority</th>
                        <th class="p-3">Updated At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($tickets as $ticket)
                        <tr>
                            <td class="p-3 text-sm space-x-2 text-center">
                                <a href="{{ route('tickets.edit', ['ticket' => $ticket->id]) }}">
                                    <i class="fa-solid fa-reply text-blue-700"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-circle-xmark text-red-600"></i>
                                </a>
                            </td>
                            <td class="p-3 text-sm">{{ $ticket->title }}</td>
                            <td class="p-3 text-sm">...</td>
                            <td class="p-3 text-sm">...</td>
                            <td class="p-3 text-sm">
                                {{ $ticket->status->name }}
                            </td>
                            <td class="p-3 text-sm">
                                {{ $ticket->priority->name }}
                            </td>
                            <td class="p-3 text-sm">{{ \Carbon\Carbon::parse($ticket->updated_at)->diffForHumans($ticket->created_at) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="p-3 text-sm text-center" colspan="9">No Tickets</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
