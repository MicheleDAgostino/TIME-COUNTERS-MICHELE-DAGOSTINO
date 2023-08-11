<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'email' => 'required',
            'name' => 'required|min:5|max:15',
            'comment' => 'required|min:10|max:1500',
        ];
    }

    public function messages(){
        return [
            'email.required' => 'Campo obbligatorio',
            'name.required' => 'Campo obbligatorio',
            'name.min' => 'Questo campo deve essere minimo di 5 caratteri',
            'name.max' => 'Questo campo deve essere massimo di 15 caratteri',
            'comment.required' => 'Campo obbligatorio',
            'comment.min' => 'Questo campo deve essere minimo di 10 caratteri',
            'comment.max' => 'Questo campo deve essere massimo di 1500 caratteri',
        ];
    }
}
