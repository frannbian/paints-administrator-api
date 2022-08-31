<?php

namespace App\Repositories\V1;

use Illuminate\Http\Request;
use App\Http\Resources\Api\V1\PaintResource;
use App\Models\Api\V1\Paint;
class PaintRepository
{
    public static function save(Request $request, ?String $id = null) : PaintResource {
        // Adding user_id
        $request->merge(['user_id' => $request->headers->get('X-HTTP-USER-ID')]);

        $paint = Paint::updateOrCreate(
            [
                'id' => $id
            ],
            $request->all()
        );
        return new PaintResource($paint);

    }

    public static function get($request) : PaintResource {
        $requestData = $request->validated();
        $filters = $requestData['filters'] ?? [];
        $fields =  $requestData['fields'] ?? [];

        // Parsing fields
        $withRelationships = [];
        foreach($fields as $key => $field) {
            if($field === "painter") {
                $withRelationships[] = "painter";
                $fields[] = "painter_id";
                unset($fields[$key]);
            }
            if($field === "country") {
                $withRelationships[] = "country";
                $fields[] = "country_id";
                unset($fields[$key]);
            }
        }

        $paints = Paint::with($withRelationships)->filter($filters);
        $paints = $paints->paginate(15, $fields);
        return new PaintResource($paints);
    }
}