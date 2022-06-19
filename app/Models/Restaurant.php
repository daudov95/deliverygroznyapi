<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'time', 'price', 'rating', 'is_open'];

    public function products() {
        return $this->hasMany(RestaurantProduct::class);
    }
}
