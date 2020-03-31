<?php

namespace App\Repositories;

use App\Models\Companies;
use App\Repositories\BaseRepository;

/**
 * Class CompaniesRepository
 * @package App\Repositories
 * @version March 31, 2020, 12:22 pm UTC
*/

class CompaniesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'companyname',
        'companyaddress',
        'companyemail',
        'contactperson',
        'companytype',
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
        return Companies::class;
    }
}
