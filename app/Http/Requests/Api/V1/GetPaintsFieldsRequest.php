<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *      title="Get Paint Fields request",
 *      description="Get Paint Fields request param data",
 *      type="object",
 *      required={"name"}
 * )
 */
class GetPaintsFieldsRequest extends FormRequest
{
    /**
     *
     * @OA\Property(
     *      type="array",
     *          @OA\Items(
     *              @OA\Property(
     *                      property="1",
     *                      type="array",
     *                      @OA\Items(type="string"),
     *                      description="Field ID"
     *              ),
     *              @OA\Property(
     *                      property="2",
     *                      type="array",
     *                      @OA\Items(type="string"),
     *                      description="Field Name"
     *              ),
     *              @OA\Property(
     *                      property="3",
     *                      type="array",
     *                      @OA\Items(type="string"),
     *                      description="Field Painter"
     *              ),
     *          ),
     * )
     *
     * @var array
     */
    public $fields;
}
