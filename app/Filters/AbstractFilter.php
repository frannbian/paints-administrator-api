<?php
namespace App\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

abstract class AbstractFilter
{
    protected $request;

    protected $filters = [];

    public function __construct(Array $requestFilters)
    {
        $this->requestFilters = $requestFilters;
    }
    
    public function filter(Builder $builder)
    {   
        foreach($this->requestFilters as $filter => $value)
        {
            $this->resolveFilter($filter)->filter($builder, $value);
        }
        return $builder;
    }

    protected function resolveFilter($filter)
    {
        return new $this->filters[$filter];
    }
}