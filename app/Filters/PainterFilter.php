<?php

namespace App\Filters;

class PainterFilter
{
    public function filter($builder, $value)
    {
        return $builder->whereHas('painter', function($query) use ($value) {
            $query->where('painters.name', $value);
        });
    }
}