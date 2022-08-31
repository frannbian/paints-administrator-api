<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Response;

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
            // Fields
            'fields.*' => [
                'nullable',
                Rule::in(['id', 'name', 'country', 'painter'])
            ],
            // Filters
            'filters.id' => 'nullable',
            'filters.name' => 'nullable',
            'filters.country' => 'nullable',
            'filters.painter' => 'nullable',
        ];
    }


    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $response = new Response(['error' => $validator->errors()->first()], 422);
        throw new ValidationException($validator, $response);
    }
}
