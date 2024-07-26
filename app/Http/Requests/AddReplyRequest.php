<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddReplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'reply' => 'required|min:10|max:500',
        ];
    }

    public function messages(): array
    {
        return [
            'reply.required' => 'O campo responder é obrigatório',
            'reply.min' => 'Minimo de 10 caracteres',
            'reply.max' => '',
        ];
    }
}
