<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatemahasiswaRequest extends FormRequest
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
            'txtFullname' => 'required',
            'txtgender' => 'required',
            'txtaddress' => 'required',
            'txtemail' => [
                'required',
                Rule::unique('mahasiswa','emailaddress')->ignore($this->txtNIM,'NIM'),
                'email'
            ],
            'txtphone' => 'required|numeric:phone|min:5',
        ];
    }

    public function messages()
    {
            return [
                
                'txtFullname.required' => ':attribute Tidak boleh Kosong',
          
            ];
    }

    public function attributes()
    {
        return [
            'txtFullname' => 'Nama Lengkap',
        ];
    }
  
}
