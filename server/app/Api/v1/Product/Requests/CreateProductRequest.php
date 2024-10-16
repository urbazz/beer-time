<?php

namespace App\Api\V1\Product\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'category_id' => [
                'integer',
                'min:1'
            ],
            'brand_id' => [
                'integer',
                'min:1'
            ],
            'name' =>[
                'required',
                'min:1',
                'max:255'
            ],
            'price' => [
                'required',
                'numeric',
                'min:1'
            ],
            'barecode' => [
                'required',
                'string',
                'min:5',
                'max:13',
                // 'unique'.$this->entity['table'].',barecode',
            ],
            'datamatrix' => [
                'max:5000'
            ],
            'image' => [
                'mimes:jpeg,jpg,png',
                'max:5000'
            ],
            'description' => [
                'max:10000'
            ]
        ];
    }
}
