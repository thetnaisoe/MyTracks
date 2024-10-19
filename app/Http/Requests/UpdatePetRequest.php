<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePetRequest extends FormRequest
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
            'name' => 'sometimes|required|string|max:255',
            'species' => 'sometimes|required|string|max:255',
            'dateOfBirth' => 'sometimes|required|date',
            'dateOfDeath' => 'sometimes|nullable|date',
            'note' => 'sometimes|nullable|string|max:1000',
        ];
        
    }
}
