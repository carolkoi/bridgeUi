<?php

namespace App\Repositories;

use App\Models\Cycle;
use App\Repositories\BaseRepository;

/**
 * Class CycleRepository
 * @package App\Repositories
 * @version January 28, 2020, 2:05 pm UTC
*/

class CycleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cycle'
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
        return Cycle::class;
    }
}
