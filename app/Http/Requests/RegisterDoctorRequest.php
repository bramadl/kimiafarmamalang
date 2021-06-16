<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterDoctorRequest extends FormRequest
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
            'fullname' => 'required|string',
            'email_address' => 'required|string|email|unique:doctors',
            'password' => 'required|string|min:4'
        ];
    }

    /**
     * Get the error messages from the specified rules.
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'fullname.required' => 'Mohon tuliskan nama lengkap anda.',
            'email_address.required' => 'Mohon tuliskan alamat email anda.',
            'email_address.email' => 'Mohon tuliskan alamat email yang valid.',
            'email_address.unique' => 'Alamat email sudah terdaftar.',
            'password.required' => 'Mohon tuliskan password anda.',
            'password.min' => 'Mohon tuliskan password lebih dari empat huruf.'
        ];
    }
}
