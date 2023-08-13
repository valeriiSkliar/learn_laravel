<?php

namespace App\Http\Requests\Pet;

use Illuminate\Foundation\Http\FormRequest;

class IndexPetFilterRequest extends FormRequest
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
            'name' => 'string',
            'description' => 'string',
            'age' => 'integer',
            'color' => 'string',
            'kind_id' => 'string',
        ];

//        return [
//            'name' => 'string',
//            'image' => 'string',
//            'age' => 'integer',
//            'color' => 'string',
//            'breed' => 'string',
//            'birth_date' => 'date',
//            'description' => 'string',
//            'kind_id' => 'integer',
//            'is_neutered' => 'boolean',
//            'is_vaccinated' => 'boolean',
//        ];
    }
}
