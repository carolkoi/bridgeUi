<?php

namespace App\Repositories;

use App\Models\Ticket;
use App\Repositories\BaseRepository;

/**
 * Class TicketRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:26 am UTC
*/

class TicketRepository extends BaseRepository
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
        'description'
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
        return Ticket::class;
    }
}
