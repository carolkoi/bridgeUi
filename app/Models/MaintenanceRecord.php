<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="MaintenanceRecord",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="asset_id",
 *          description="asset_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="asset_details",
 *          description="asset_details",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="component_details",
 *          description="component_details",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="department_id",
 *          description="department_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="commission_date",
 *          description="commission_date",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="decommission_duration",
 *          description="decommission_duration",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="decommission_reminder",
 *          description="decommission_reminder",
 *          type="string",
 *          format="date"
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
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class MaintenanceRecord extends Model
{
    use SoftDeletes;

    public $table = 'maintenance_records';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'asset_id',
        'asset_details',
        'component_details',
        'department_id',
        'commission_date',
        'decommission_duration',
        'decommission_reminder'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'asset_id' => 'integer',
        'asset_details' => 'string',
        'component_details' => 'string',
        'department_id' => 'integer',
        'commission_date' => 'date',
        'decommission_duration' => 'date',
        'decommission_reminder' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
