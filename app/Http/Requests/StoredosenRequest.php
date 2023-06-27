<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoredosenRequest extends FormRequest
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
            'noDosen' => 'required|unique:dosen,noDosen|min:7|max:7',
            'txtFullname' => 'required',
            'txtgender' => 'required',
            'txtaddress' => 'required',
            'txtemail' => 'required|email|unique:dosen,emailaddress',
            'txtphone' => 'required|numeric:phone|min:5',
        ];
    }

    public function messages()
    {
            return [
                'noDosen.required' => ':attribute Tidak boleh kosong',
                'noDosen.unique' => ':attribut ini sudah terdaftar',
                'txtFullname.required' => ':attribute Tidak boleh Kosong',
                'txtemail.unique' => ':attribute ini sudah terdaftar',
            ];
    }

    public function attributes()
    {
        return [
            'noDosen' => 'Nomor Dosen',
            'txtFullname' => 'Nama Lengkap',
            'txtemail' => 'Alamat Email',
        ];
    }
  
}
