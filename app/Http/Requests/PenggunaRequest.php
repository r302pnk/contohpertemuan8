<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenggunaRequest extends FormRequest
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
            'nama' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'tanggal_lahir' => 'required|date',
            'file' => 'image|mimes:png,jpg,jpeg|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'in' => ':attribute wajib diisi',
            'date' => ':attribute wajib diisi',
            'image' => ':attribute harus berupa gambar',
            'mimes' => ':attribute wajib diisi',
            'max' => ':attribute wajib diisi',
        ];
    }
}
