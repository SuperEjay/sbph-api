<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'product_description.max' => ':attribute should not be more than 255 characters',
            'product_description.required' => ':attribute should not be more than 255 characters',
        ];
    }

    public function attributes(): array
    {
        return [
            'product_name' => 'Product Name',
            'product_price' => 'Product Price',
            'product_description' => 'Product Description',
            'image' => 'Product Image',
        ];
    }
}
