<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'fullName' => 'required|min:3',
            'userName' => 'required|min:4|alpha_dash|unique:users,user_name',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|min:10',
            'address'=>'required',
            'referralId' => 'nullable|exists:users,user_name', // Nullable if referral ID is optional
        ];
    }
    public function messages()
    {
        return [
            'fullName.required' => 'The full name field is required.',
            'userName.required' => 'The username field is required.',
            'userName.min' => 'The username must be at least :min characters.',
            'userName.alpha_dash' => 'The username may only contain letters, numbers, dashes, and underscores.',
            'userName.unique' => 'The username has already been taken.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least :min characters.',
            'phone.required' => 'The phone field is required.',
            'phone.min'=>'The phone must be at least :min characters.',
            'address.required'=>'The address field is required.',
            'idNumber.required'=>'The idNumber field is required.',
            'idNumber.min'=>'The idNumber must be at least :min characters',

        ];
    }
}
