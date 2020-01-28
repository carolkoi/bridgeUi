<?php

namespace App\Repositories;

use App\Models\MaintenanceSchedule;
use App\Repositories\BaseRepository;

/**
 * Class MaintenanceScheduleRepository
 * @package App\Repositories
 * @version January 28, 2020, 2:01 pm UTC
*/

class MaintenanceScheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'department_id',
        'asset_id',
        'cycle_id',
        'start_date'
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
        return MaintenanceSchedule::class;
    }
}
