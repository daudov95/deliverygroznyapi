<?php

namespace App\Filters;

use App\Models\StoreReview;
use Illuminate\Database\Eloquent\Builder;

class StoreFilter extends QueryFilter
{
    private array $list = ['id', 'price', 'time'];
    private string $defaultField = 'id';
    private string $defaultSort = 'asc';

    public function order($value)
    {
        $sort = request('sort');

        if(in_array($value, $this->list)) {
            $this->defaultField = $value;
        }

        if($sort) {
            $this->defaultSort = $sort;
        }

        $this->builder->orderBy($this->defaultField, $this->defaultSort);
    }

    public function sort($value)
    {
        $order = request('order');
        $sort = request('sort');

        if($order) {
            return;
        }

        if($sort) {
            $this->defaultSort = $sort;
        }

        $this->builder->orderBy($this->defaultField, $this->defaultSort);
    }

}
