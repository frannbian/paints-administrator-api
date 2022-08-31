<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Filters\PaintFilter;
use Illuminate\Database\Eloquent\Builder;

/**
 * @OA\Schema(
 *     title="Paint",
 *     description="Paint model",
 *     @OA\Xml(
 *         name="Paint"
 *     )
 * )
 */
class Paint extends Model
{
    use HasFactory;
    
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var integer
     */
    private $id;

    /**
     * @OA\Property(
     *      title="Name",
     *      description="Name of the new paint",
     *      example="A nice paint"
     * )
     *
     * @var string
     */
    public $name;
    
    /**
     * @OA\Property(
     *      title="Painter ID",
     *      description="Painter's id of the new Paint",
     *      format="int64",
     *      example=1
     * )
     *
     * @var integer
     */
    public $painter_id;


    /**
     * @OA\Property(
     *     title="Painter",
     *     description="Paint painter model"
     * )
     *
     * @var \App\Virtual\Models\Painter
     */
    private $painter;

    /**
     * @OA\Property(
     *      title="Country ID",
     *      description="Country's id of the new Paint",
     *      format="int64",
     *      example=1
     * )
     *
     * @var integer
     */
    public $country_id;


    /**
     * @OA\Property(
     *     title="Country",
     *     description="Paint country model"
     * )
     *
     * @var \App\Virtual\Models\Country
     */
    private $country;

    /**
     * @OA\Property(
     *      title="User ID",
     *      description="User's id of the new Paint",
     *      format="int64",
     *      example=1
     * )
     *
     * @var integer
     */
    public $user_id;


    /**
     * @OA\Property(
     *     title="User",
     *     description="Paint user model"
     * )
     *
     * @var \App\Virtual\Models\User
     */
    private $user;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $updated_at;


    protected $fillable = ['name'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function painter()
    {
        return $this->belongsTo(Painter::class);
    }

    public function scopeFilter(Builder $builder, $request)
    {
        return (new PaintFilter($request))->filter($builder);
    }
}
