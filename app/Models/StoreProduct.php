<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StoreProduct extends Model
{
    use HasFactory;

    public function options(): HasMany
    {
        return $this->hasMany(ProductOption::class, 'product_id');
    }
}
