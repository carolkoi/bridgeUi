<?php

namespace App\Repositories;

use App\Models\ServiceProviders;
use App\Repositories\BaseRepository;

/**
 * Class ServiceProvidersRepository
 * @package App\Repositories
 * @version March 30, 2020, 8:24 am UTC
*/

class ServiceProvidersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'companyid',
        'moneyservicename',
        'provideridentifier',
        'accountnumber',
        'serviceprovidercategoryid',
        'cutofflimit',
        'settlementaccount',
        'b2cbalance',
        'c2bbalance',
        'processingmode',
        'addedby',
        'serviceprovidertype',
        'status'
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
        return ServiceProviders::class;
    }
}
