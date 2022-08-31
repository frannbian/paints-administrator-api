<?php

namespace App\Repositories\V1;

use Illuminate\Http\Request;
use App\Http\Resources\Api\V1\PaintResource;
use App\Models\Api\V1\Paint;
class PaintRepository
{
    public function save(Request $request) : PaintResource {
    }

    public static function get() : PaintResource {
        $filters = request()->query("filters");
        $paints = Paint::filter($filters)->paginate();
        return new PaintResource($paints);
    }
}