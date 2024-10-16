<?php

namespace App\Api\V1\Category\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    public function toArray(\Illuminate\Http\Request $request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'created_at' => $this->created_at,
            'products' => ProductListResource::collection(
                $this->products
            )
        ];
    }
}
