<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Store extends Model
{
    use HasFactory;

    public function filters(): HasMany {
        return $this->hasMany(StoreFilter::class);
    }

    public function products(): HasMany {
        return $this->hasMany(StoreProduct::class);
    }
}
