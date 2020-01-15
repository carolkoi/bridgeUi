<?php

namespace App\Repositories;

use App\Models\IssueType;
use App\Repositories\BaseRepository;

/**
 * Class IssueTypeRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:27 am UTC
*/

class IssueTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'issue'
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
        return IssueType::class;
    }
}
