<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;

    public function list()
    {
        return $this->hasMany(ProductOptionValue::class, 'option_id');
    }
}
