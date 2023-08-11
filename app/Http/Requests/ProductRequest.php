<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'nameProduct' => 'required|min:5|max:15',
            'brand' => 'required|min:5|max:20',
            'description' => 'required|min:10|max:1500',
            'img' => 'required',
        ];

    }

    public function messages(){
        return [
            'nameProduct.required' => 'Campo obbligatorio',
            'nameProduct.min' => 'Questo campo deve essere minimo di 5 caratteri',
            'nameProduct.max' => 'Questo campo deve essere massimo di 15 caratteri',
            'brand.required' => 'Campo obbligatorio',
            'brand.min' => 'Questo campo deve essere minimo di 5 caratteri',
            'brand.max' => 'Questo campo deve essere massimo di 20 caratteri',
            'description.required' => 'Campo obbligatorio',
            'description.min' => 'Questo campo deve essere minimo di 10 caratteri',
            'description.max' => 'Questo campo deve essere massimo di 1500 caratteri',
            'img' => 'Campo obbligatorio',
        ];
    }
}
