<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *      title="Get Paint Filters request",
 *      description="Get Paint Filters request param data",
 *      type="object",
 *      required={"name"}
 * )
 */
class GetPaintsFiltersRequest extends FormRequest
{
    /**
     *
     * @OA\Property(
     *      type="array",
     *          @OA\Items(
     *              @OA\Property(
     *                      property="country",
     *                      type="array",
     *                      @OA\Items(type="string"),
     *                      description="Filter Country"
     *              )
     *          ),
     * )
     *
     * @var array
     */
    public $filters;
}
