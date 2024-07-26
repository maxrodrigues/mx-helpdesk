<?php

namespace App\Http\Controllers;

use App\Http\Requests\Customer\AddCustomerRequest;
use App\Http\Requests\Customer\EditCustomerRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('pages.customers.index', compact('customers'));
    }

    public function create()
    {
        return view('pages.customers.create');
    }

    public function store(AddCustomerRequest $request)
    {
        try {
            Customer::create($request->validated());
            return redirect()->route('customers.index');
        } catch (\Exception $e) {
            // Todo: Log and return exception
        }
    }

    public function edit($id)
    {
        try {
            $customer = Customer::where('id', $id)->firstOrFail();

            return view('pages.customers.edit', compact('customer'));
        } catch (\Exception $e) {
            // Todo: Log and return exception
        }
    }

    public function update(EditCustomerRequest $request, $customer)
    {
        $customer = Customer::where('id', $customer)->firstOrFail();

        dd($request->all(), $customer);
    }
}
