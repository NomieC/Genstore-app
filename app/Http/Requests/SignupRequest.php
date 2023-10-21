<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'username' => 'required|string|max:50|unique:users,username', 
            'email' => 'required|email|unique:users,email',
            'birthdate' => 'required|date', 
            'gender' => 'required|string|max:20',
            'password' => [
                'required',
                'confirmed',
                'min:8', // Minimum password length of 8 characters
                'alpha', // Requires at least one letter
                'unique', // Requires at least one symbol
            ],
            
        ];
    }
}
