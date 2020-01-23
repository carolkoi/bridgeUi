<?php

namespace App\Repositories;

use App\Models\ClosedTicket;
use App\Repositories\BaseRepository;

/**
 * Class ClosedTicketRepository
 * @package App\Repositories
 * @version January 23, 2020, 1:46 pm UTC
*/

class ClosedTicketRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'department_id',
        'issue_type_id',
        'business_continuity_impacted',
        'image',
        'description',
        'assign_to',
        'surrender_status',
        'resolved_status',
        'closed_status'
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
        return ClosedTicket::class;
    }
}
