<?php

namespace App\Repositories;

use App\Models\Asset;
use App\Repositories\BaseRepository;

/**
 * Class AssetRepository
 * @package App\Repositories
 * @version January 24, 2020, 12:43 pm UTC
*/

class AssetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Asset::class;
    }
}
