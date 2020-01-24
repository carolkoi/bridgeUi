<?php

namespace App\Repositories;

use App\Models\Item;
use App\Repositories\BaseRepository;

/**
 * Class ItemRepository
 * @package App\Repositories
 * @version January 24, 2020, 12:38 pm UTC
*/

class ItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'qty_available',
        'requested_quantity'
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
        return Item::class;
    }
}
