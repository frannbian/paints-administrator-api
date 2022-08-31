<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Api\V1\Painter;
use App\Http\Resources\Api\V1\PainterResource;
use Cache;

class PainterController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/v1/painters",
     *      operationId="getPaintersList",
     *      tags={"Painters"},
     *      summary="Get list of painters",
     *      description="Returns list of painters",
     *      @OA\Parameter(
     *       name="token",
     *       required=true,
     *       in="query",
     *       @OA\Schema(
     *           type="string",
     *       )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/PainterResource")
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function index()
    {
        $painters = Cache::remember('painters', 3600, function () {
            return PainterResource::collection(Painter::paginate());
        });

        return $painters;
    }
}
