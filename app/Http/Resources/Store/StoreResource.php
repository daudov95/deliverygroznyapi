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

        $reviews = $this->reviews;
        $count = $reviews->count();
        $rating = $count ? ceil($reviews->sum('stars') / $count) : 0;


        return [
            "id" => $this->id,
            "title" => $this->title,
            "description" => $this->description,
            "time" => $this->time,
            "image" => $this->image,
            "price" => $this->price,
            "rating" => $rating,
            "is_open" => $this->is_open,
            "filter_id" => $this->filter_id,
            "type" => $this->type,
            "filters" => $filters,
            "products" => $products,
        ];
    }
}
