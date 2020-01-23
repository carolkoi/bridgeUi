<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="ResolvedTickets",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="department_id",
 *          description="department_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="issue_type_id",
 *          description="issue_type_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="business_continuity_impacted",
 *          description="business_continuity_impacted",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="image",
 *          description="image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="description",
 *          description="description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="assign_to",
 *          description="assign_to",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="surrender_status",
 *          description="surrender_status",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="resolved_status",
 *          description="resolved_status",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class ResolvedTickets extends Model
{
    use SoftDeletes;

    public $table = 'resolved_tickets';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'department_id',
        'issue_type_id',
        'business_continuity_impacted',
        'image',
        'description',
        'assign_to',
        'surrender_status',
        'resolved_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'department_id' => 'integer',
        'issue_type_id' => 'integer',
        'business_continuity_impacted' => 'boolean',
        'image' => 'string',
        'description' => 'string',
        'assign_to' => 'integer',
        'surrender_status' => 'boolean',
        'resolved_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
