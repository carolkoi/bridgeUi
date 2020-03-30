<?php

namespace App\Repositories;

use App\Models\GlobalSettings;
use App\Repositories\BaseRepository;

/**
 * Class GlobalSettingsRepository
 * @package App\Repositories
 * @version March 30, 2020, 8:16 am UTC
*/

class GlobalSettingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'serviceproviderid',
        'setting',
        'settingvalue',
        'valuetype',
        'addedby',
        'ipaddress'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GlobalSettings::class;
    }
}
