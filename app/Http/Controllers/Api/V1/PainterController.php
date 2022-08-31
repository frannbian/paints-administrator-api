<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\{StorePainterRequest, UpdatePainterRequest};
use App\Models\Api\V1\Painter;
use App\Http\Resources\Api\V1\PainterResource;

class PainterController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/v1/painters",
     *      operationId="getPaintersList",
     *      tags={"Painters"},
     *      summary="Get list of painters",
     *      description="Returns list of painters",
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
        return PainterResource::collection(Painter::paginate());
    }
}
