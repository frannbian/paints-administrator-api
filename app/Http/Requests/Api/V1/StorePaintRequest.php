<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;
/**
 * @OA\Schema(
 *      title="Store Paint request",
 *      description="Store Paint request body data",
 *      type="object",
 *      required={"name", "painter_id"}
 * )
 */
class StorePaintRequest extends FormRequest
{
    /**
     * @OA\Property(
     *      title="name",
     *      description="Name of the new paint",
     *      example="A nice paint"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="country_id",
     *      description="Country ID of the paint",
     *      example="1"
     * )
     *
     * @var int
     */
    public $country_id;

 
    /**
     * @OA\Property(
     *      title="painter_id",
     *      description="Painter ID of the paint",
     *      example="1"
     * )
     *
     * @var int
     */
    public $painter_id;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'painter_id' => 'required|exists:painters,id',
            'country_id' => 'nullable|exists:countries,id'
        ];
    }
}
