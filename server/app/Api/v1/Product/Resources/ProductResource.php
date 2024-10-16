<?php

namespace App\Api\V1\Product\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(\Illuminate\Http\Request $request)
    {
        return [
            'category_id' => $this->categoty_id,
            'producer_id' => $this->producer_id,
            'barecode' => $this->barecode,
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'datamatrix' => $this->datamatrix,
            'price' => $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
