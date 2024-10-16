<?php

namespace App\Api\V1\Producer\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CreateProducerRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|max:255'
        ];
    }
}
