<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:3|max:100',
            'author' => 'required|string|min:3',
            'price' => 'required|integer|min:0',
            'release' => 'nullable|date',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'MESTI ADA ISINYA.',
        ];
    }
}
