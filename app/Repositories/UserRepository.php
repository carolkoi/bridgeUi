<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version January 14, 2020, 10:23 am UTC
*/

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'middle_name',
        'name',
        'email',
        'password',
        'department_id',
        'location'
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
        return User::class;
    }
}
