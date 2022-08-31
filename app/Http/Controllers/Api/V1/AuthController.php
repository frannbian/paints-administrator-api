<?php
namespace App\Http\Controllers\Api\V1;

class AuthController
{
    /**
     * @OA\Post(
     *      path="/api/v1/oauth/token",
     *      operationId="getToken",
     *      tags={"Auth"},
     *      summary="Get authorization Token",
     *      description="Returns a Bearer token",
    *     @OA\RequestBody(
    *         @OA\MediaType(
    *             mediaType="application/json",
    *             @OA\Schema(
    *                 @OA\Property(
    *                     property="client_id",
    *                     type="string"
    *                 ),
    *                 @OA\Property(
    *                     property="client_secret",
    *                     type="string"
    *                 ),
    *                 @OA\Property(
    *                     property="grant_type",
    *                     type="string"
    *                 ),
    *                 example={"client_id": "3", "client_secret": "wae3tco18YmxsW25nLuTNlNSjG2pixqD6yJ9V6rh", "grant_type": "client_credentials"}
    *             )
    *         )
    *     ),
     *      @OA\Response(
     *          response=201,
     *          description="Authenticated",
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
    public function index() {}
}

