<?php

namespace App\Api\V1\Producer\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductListResource extends JsonResource
{
    public function toArray(\Illuminate\Http\Request $request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image,
            'price' => $this->price,
        ];
    }
}
