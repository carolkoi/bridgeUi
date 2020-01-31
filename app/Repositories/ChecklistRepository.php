<?php

namespace App\Repositories;

use App\Models\Checklist;
use App\Repositories\BaseRepository;

/**
 * Class ChecklistRepository
 * @package App\Repositories
 * @version January 30, 2020, 7:10 am UTC
*/

class ChecklistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'action',
        'comment',
        'maintenance_schedule_id'
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
        return Checklist::class;
    }
}
