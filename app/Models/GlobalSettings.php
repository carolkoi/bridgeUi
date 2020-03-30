<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="GlobalSettings",
 *      required={""},
 *      @SWG\Property(
 *          property="switchsettingid",
 *          description="switchsettingid",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="serviceproviderid",
 *          description="serviceproviderid",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="setting",
 *          description="setting",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="settingvalue",
 *          description="settingvalue",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="valuetype",
 *          description="valuetype",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="addedby",
 *          description="addedby",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="ipaddress",
 *          description="ipaddress",
 *          type="string"
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
class GlobalSettings extends Model
{
    use SoftDeletes;

    public $table = 'tbl_switch_settings';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    public $timestamps = false;



    public $fillable = [
        'serviceproviderid',
        'setting',
        'settingvalue',
        'valuetype',
        'addedby',
        'ipaddress'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'switchsettingid' => 'integer',
        'serviceproviderid' => 'integer',
        'setting' => 'string',
        'settingvalue' => 'string',
        'valuetype' => 'string',
        'addedby' => 'integer',
        'ipaddress' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'serviceproviderid' => 'required',
        'setting' => 'required',
        'settingvalue' => 'required',
        'valuetype' => 'required',
        'addedby' => 'required',
        'ipaddress' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    public function serviceProviders(){
        return $this->hasMany(ServiceProviders::class, 'serviceproviderid', 'switchsettingid');
    }


}
