<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreregisterRequest extends FormRequest
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
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ];
    }

    public function messages()
    {
            return [
                'name.required' => ':attribute Tidak boleh Kosong',
                'name.unique' => ' Data nama ini sudah terdaftar didatabase',
                'email.unique' => ':attribute  sudah terdaftar',
                'email.required' => ':attribute  tidak boleh kosong',
                'password.required' => ':attribute  tidak boleh kosong',
            ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nama Lengkap',
            'email' => 'Alamat Email',
        ];
    }
  
}
