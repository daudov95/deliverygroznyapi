<?php
namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

//abstract class AbstractFilter implements FilterInterface
//{
//    /** @var array */
//    private $queryParams = [];
//
//    /**
//    * AbstractFilter constructor.
//    *
//    * @param array $queryParams
//    */
//    public function __construct(array $queryParams)
//    {
//        $this->queryParams = $queryParams;
//    }
//
//    abstract protected function getCallbacks(): array;
//
//    public function apply(Builder $builder)
//    {
//        $this->before($builder);
//
//        foreach ($this->getCallbacks() as $name => $callback) {
//            if (isset($this->queryParams[$name])) {
//                call_user_func($callback, $builder, $this->queryParams[$name]);
//            }
//        }
//    }
//
//    /**
//    * @param Builder $builder
//    */
//    protected function before(Builder $builder)
//    {
//    }
//
//    /**
//    * @param string $key
//    * @param mixed|null $default
//    *
//    * @return mixed|null
//    */
//    protected function getQueryParam(string $key, $default = null)
//    {
//        return $this->queryParams[$key] ?? $default;
//    }
//
//    /**
//    * @param string[] $keys
//    *
//    * @return AbstractFilter
//    */
//    protected function removeQueryParam(string ...$keys)
//    {
//        foreach ($keys as $key) {
//        unset($this->queryParams[$key]);
//    }
//
//    return $this;
//    }
//}


abstract class QueryFilter
{
    protected $request;
    protected $builder;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($builder)
    {
        $this->builder = $builder;

        foreach ($this->filters() as $filter => $value) {
            if (method_exists($this, $filter)) {
                $this->$filter($value);
            }
        }

        return $this->builder;
    }

    public function filters()
    {
        return $this->request->all();
    }
}
