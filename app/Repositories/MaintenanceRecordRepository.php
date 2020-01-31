<?php

namespace App\Repositories;

use App\Models\MaintenanceRecord;
use App\Repositories\BaseRepository;

/**
 * Class MaintenanceRecordRepository
 * @package App\Repositories
 * @version January 31, 2020, 11:38 am UTC
*/

class MaintenanceRecordRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'asset_id',
        'asset_details',
        'component_details',
        'department_id',
        'commission_date',
        'decommission_duration',
        'decommission_reminder'
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
        return MaintenanceRecord::class;
    }
}
