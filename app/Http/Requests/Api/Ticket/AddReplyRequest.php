<?php

namespace App\Http\Requests\Api\Ticket;

use Illuminate\Foundation\Http\FormRequest;

class AddReplyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'ticket' => 'required|integer|exists:tickets,id',
            'content' => 'required|string',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
