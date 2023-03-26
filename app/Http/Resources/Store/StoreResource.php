<?php

namespace App\Http\Resources\Store;

use App\Http\Resources\Filter\FilterResource;
use App\Http\Resources\Product\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $filters = count($this->filters) > 0 ? FilterResource::collection($this->filters) : null;
        $products = count($this->products) > 0 ? ProductResource::collection($this->products) : null;

        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "image" => $this->image,
            "price" => $this->price,
            "rating" => $this->rating,
            "is_open" => $this->is_open,
            "is_hide" => $this->is_hide,
            "filter_id" => $this->filter_id,
            "type" => $this->type,
//            "created_at" => $this->created_at,
//            "updated_at" => $this->updated_at,
            "filters" => $filters,
            "products" => $products,
        ];
    }
}
