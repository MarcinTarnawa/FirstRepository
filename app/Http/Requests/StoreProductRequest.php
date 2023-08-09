<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'description' => 'required|max:500',
            'amount' => 'required|integer|min:0',
            'price' => 'required|numeric|between:0,999999.99',
            'category_id' => 'nullable|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,png',
        ];
    }
}
