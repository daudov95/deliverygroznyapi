<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreItemResource extends JsonResource
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
//            "options" => $this->options ?? null,
//            "store_id" => $this->store_id,
            "date" => [
                'dmy' => $this->created_at->format('d.m.y'),
                'hms' => $this->created_at->format('H:i:s'),
                'unix' => $this->created_at->format('U')
            ],
        ];
    }
}
