<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'nullable',
            'code' => 'nullable',
            'sale_price' => 'nullable',
            'purchase_price'=>'nullable',
            'entry_date' => 'nullable',
            'vat' => 'nullable',
            'stock' => 'nullable',
            'category' =>'nullable'
        ];
    }
}
