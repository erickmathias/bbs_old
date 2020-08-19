<?php

namespace App\Repositories;

use App\Models\Element;
use App\Repositories\BaseRepository;

/**
 * Class ElementRepository
 * @package App\Repositories
 * @version July 26, 2020, 6:13 am UTC
*/

class ElementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'project_id',
        'element_name',
        'stdcode_id',
        'steel_type_id',
        'density'
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
        return Element::class;
    }
}
