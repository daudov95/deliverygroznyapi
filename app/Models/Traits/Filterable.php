<?php

namespace App\Models\Traits;

use App\Filters\FilterInterface;
use Illuminate\Database\Eloquent\Builder;

trait Filterable
{
    /**
     * @param Builder $builder
     * @param FilterInterface $filter
     *
     * @return Builder
     */
    public function scopeFilter(Builder $builder, $filters)
    {
//        $filter->apply($builder);

        return $filters->apply($builder); //$builder
    }
}
