<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "image" => $this->image,
            "old_price" => $this->old_price,
            "price" => $this->price,
            "options" => $this->options,
//            "restaurant_id" => $this->restaurant_id,
            "date" => [
                'dmy' => $this->created_at->format('d.m.y'),
                'hms' => $this->created_at->format('H:i:s'),
                'unix' => $this->created_at->format('U')
            ],
        ];
    }
}
