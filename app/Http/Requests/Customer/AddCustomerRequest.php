<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class AddCustomerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'phone' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
