<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class AuthRequest extends FormRequest
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
            'name'=>'required|min:3',
            'email'=>'required|email|unique:users,email',
            'password' =>['required','confirmed',Password::min(6)->max(20)->mixedCase()
            ->letters()->numbers()->symbols()->uncompromised()],
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required'=>'اسمتو وارد کن عزیز'
    //     ];
    // }
}
