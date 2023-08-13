<?php

namespace App\Http\Requests\Pet;

use Illuminate\Foundation\Http\FormRequest;

class StorePetRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255', // Name is required, must be a string and cannot exceed 255 characters
            'image' => 'string', // Name is required, must be a string and cannot exceed 255 characters
            'age' => 'nullable|integer', // Age is optional, but if provided must be an integer
            'color' => 'nullable|string|max:255', // Color is optional, but if provided must be a string and cannot exceed 255 characters
            'breed' => 'nullable|string|max:255', // Breed is optional, but if provided must be a string and cannot exceed 255 characters
            'birth_date' => 'nullable|date', // Birth date is optional, but if provided must be a date
            'description' => 'nullable|string', // Description is optional, but if provided must be a string
            'kind_id' => 'required|integer', // Species is required, must be a string and cannot exceed 255 characters
            'is_neutered' => 'boolean', // Is neutered is required and must be a boolean
            'is_vaccinated' => 'boolean', // Is vaccinated is required and must be a boolean
        ];
    }
}
