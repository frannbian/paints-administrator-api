<?php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class PaintFilter extends AbstractFilter
{
    protected $filters = [
        'name' => NameFilter::class,
        'country' => CountryFilter::class,
        'painter' => PainterFilter::class,
    ];
}