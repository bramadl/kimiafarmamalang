<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginDoctorRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'email_address' => 'required|string|email',
            'password' => 'required|string'
        ];
    }

    /**
     * Get the error messages from the specified rules.
     * 
     * @var array
     */
    public function messages()
    {
        return [
            'email_address.required' => 'Mohon tuliskan alamat email anda',
            'email_address.email' => 'Mohon tuliskan alamat email yang valid.',
            'password.required' => 'Mohon tuliskan password anda.'
        ];
    }
}
