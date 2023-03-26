<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "image" => $this->image,
            "old_price" => $this->old_price,
            "price" => $this->price,
            "filter_id" => $this->filter_id,
            "store_id" => $this->store_id,
            "option_id" => $this->option_id,
        ];
    }
}
