<?php

namespace App\Models;

use App\Filters\FilterInterface;
use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Store extends Model
{
    use HasFactory, Filterable;

    public function filters(): HasMany
    {
        return $this->hasMany(StoreFilter::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(StoreProduct::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(StoreReview::class);
    }

//    public function scopeFilter(Builder $builder)
//    {
//        return $builder->when(request('order'), function ($query) {
//                $query->orderBy(request('order'));
//            })
//            ->when(request('limit'), function ($query) {
//                $query->take(request('limit'));
//            })
//            ->when(request('order'), function ($query) {
//                $query->orderBy('id', request('sort') ?? 'desc');
//            })
//            ->when(request('sort'), function ($query) {
////                $query->when(request('order'), function ($query) {
////                    $query->orderBy(request('order') ?? 'id', request('sort') ?? 'desc');
////                });
//                $query->orderBy('rating', request('sort') ?? 'desc');
//            });
//    }
}
