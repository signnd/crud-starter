<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'nama' => 'required|string|max:250',
            'id_kategori' => 'nullable',
            'qty' => 'required|integer|min:1|max:10000',
            'harga_beli' => 'required',
            'harga_jual' => 'required'
        ];
    }
}