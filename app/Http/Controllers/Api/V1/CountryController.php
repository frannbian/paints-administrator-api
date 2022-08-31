<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Api\V1\Country;
use App\Http\Resources\Api\V1\CountryResource;
use Cache;

class CountryController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/v1/countries",
     *      operationId="getCountriesList",
     *      tags={"Countries"},
     *      summary="Get list of countries",
     *      description="Returns list of countries",
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
     *          @OA\JsonContent(ref="#/components/schemas/CountryResource")
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
        $countries = Cache::remember('countries', 3600, function () {
            return CountryResource::collection(Country::paginate());
        });

        return $countries;
    }
}
