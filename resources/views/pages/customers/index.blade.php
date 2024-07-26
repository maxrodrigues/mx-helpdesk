@extends('app')

@section('content')
    <div class="my-5">
        <a href="{{ route('customers.create') }}" class="bg-green-700 text-white px-10 py-2 font-semibold rounded text-sm">
            <i class="fa-solid fa-plus -ml-5 mr-3"></i>
            Novo Cliente
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
                    </colgroup>
                    <thead class="bg-gray-300">
                    <tr class="text-left">
                        <th class="p-3 text-center w-16">#</th>
                        <th class="p-3">Nome</th>
                        <th class="p-3">Telefone</th>
                        <th class="p-3">E-mail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($customers as $customer)
                        <tr class="border-b">
                            <td class="p-3 text-sm space-x-2 text-center">
                                <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}">
                                    <i class="fa-solid fa-reply text-blue-700"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-circle-xmark text-red-600"></i>
                                </a>
                            </td>
                            <td class="p-3 text-sm">{{ $customer->name }}</td>
                            <td class="p-3 text-sm">{{ $customer->phone }}</td>
                            <td class="p-3 text-sm">{{ $customer->email }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="p-3 text-sm text-center" colspan="9">No Customers</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
