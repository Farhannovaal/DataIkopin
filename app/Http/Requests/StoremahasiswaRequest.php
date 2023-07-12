<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoremahasiswaRequest extends FormRequest
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
            'txtNIM' => 'required|unique:mahasiswa,NIM|min:7|max:7',
            'txtFullname' => 'required',
            'txtgender' => 'required',
            'txtaddress' => 'required',
            'txtemail' => 'required|email|unique:mahasiswa,emailaddress',
            'txtphone' => 'required|numeric:phone|min:5',
        ];
    }

    public function messages()
    {
            return [
                'txtNIM.required' => ':attribute Tidak boleh kosong',
                'txtNIM.unique' => ':attribute ini sudah terdaftar',
                'txtFullname.required' => ':attribute Tidak boleh Kosong',
                'txtemail.unique' => ':attribute ini sudah terdaftar',
            ];
    }

    public function attributes()
    {
        return [
            'txtNIM' => 'Nomor Induk Mahasiswa',
            'txtFullname' => 'Nama Lengkap',
            'txtemail' => 'Alamat Email',
        ];
    }
  
}
