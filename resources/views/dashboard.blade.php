@extends('app')
@section('content')
    <div class="flex justify-between space-x-5 my-5">
        <div class="bg-white shadow-md rounded w-1/3">
            <div class="flex justify-between items-center border-b border-b-gray-300 p-3">
                <div>
                    <h1>Tickets by importance</h1>
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
            <div class="p-3">
                Graficos importantes
            </div>
        </div>
        <div class="bg-white shadow-md rounded w-1/3">
            <div class="flex justify-between items-center border-b border-b-gray-300 p-3">
                <div>
                    <h1>Tickets by type</h1>
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
            <div class="p-3">
                Graficos importantes
            </div>
        </div>
        <div class="bg-white shadow-md rounded w-1/3">
            <div class="flex justify-between items-center border-b border-b-gray-300 p-3">
                <div>
                    <h1>Tickets creation nature</h1>
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
            <div class="p-3">
                Graficos importantes
            </div>
        </div>
    </div>
    <div class="flex justify-between space-x-5 my-5">
        <div class="bg-white shadow-md rounded w-1/2">
            <div class="flex justify-between items-center border-b border-b-gray-300 p-3">
                <div>
                    <h1>Tickets activity</h1>
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
            <div class="p-3">
                Graficos importantes
            </div>
        </div>
        <div class="bg-white shadow-md rounded w-1/2">
            <div class="flex justify-between items-center border-b border-b-gray-300 p-3">
                <div>
                    <h1>Open Tickets</h1>
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
            <div class="p-3">
                Graficos importantes
            </div>
        </div>
    </div>
    <div class="flex justify-between space-x-5 my-5">
        <div class="bg-white shadow-md rounded w-1/2">
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
                        <th class="p-3">#</th>
                        <th class="p-3">Ticket ID</th>
                        <th class="p-3">Ticket title</th>
                        <th class="p-3">Client</th>
                        <th class="p-3">Time Remaining</th>
                        <th class="p-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="p-3 text-center">1</td>
                        <td class="p-3 text-sm">SM-12771</td>
                        <td class="p-3 text-sm">Make 'Form #getUsersFields' mo...</td>
                        <td class="p-3 text-sm">Strich LLC</td>
                        <td class="p-3 text-sm">06:14:01</td>
                        <td class="p-3 text-sm">
                            <button type="button" title="Open details" class="p-1 rounded-full dark:text-gray-400 hover:dark:bg-gray-300 focus:dark:bg-gray-300">
                                <svg viewBox="0 0 24 24" class="w-4 h-4 fill-current">
                                    <path d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bg-white shadow-md rounded w-1/2">
            <div class="flex justify-between items-center border-b border-b-gray-300 p-3">
                <div>
                    <h1>Latest Tasks</h1>
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
            <div class="p-3">
                Graficos importantes
            </div>
        </div>
    </div>
@endsection
