<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;
/**
 * @OA\Schema(
 *      title="Get Paint request",
 *      description="Get Paint request param data",
 *      type="object",
 *      required={"name"}
 * )
 */
class GetPaintsRequest extends FormRequest
{
    /**
     *
     * @OA\Property(
     *      type="array",
     *          @OA\Items(
     *              @OA\Property(
     *                      property="filter_name",
     *                      type="array",
     *                      @OA\Items(type="string"),
     *                      description="Filter Name"
     *              )
     *          ),
     * )
     *
     * @var array
     */
    public $filters;
}
