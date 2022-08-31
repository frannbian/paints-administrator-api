<?php

namespace App\Filters;

class CountryFilter
{
    public function filter($builder, $value)
    {
        return $builder->whereHas('country', function($query) use ($value) {
            $query->where('countries.code', $value);
        });
    }
}