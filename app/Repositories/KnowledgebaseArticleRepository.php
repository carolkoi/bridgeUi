<?php

namespace App\Repositories;

use App\Models\KnowledgebaseArticle;
use App\Repositories\BaseRepository;

/**
 * Class KnowledgebaseArticleRepository
 * @package App\Repositories
 * @version January 23, 2020, 11:30 am UTC
*/

class KnowledgebaseArticleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'category_id',
        'details',
        'uploads',
        'ticket_id'
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
        return KnowledgebaseArticle::class;
    }
}
