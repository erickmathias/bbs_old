<?php

namespace App\Repositories;

use App\Models\Steeltype;
use App\Repositories\BaseRepository;

/**
 * Class SteeltypeRepository
 * @package App\Repositories
 * @version July 25, 2020, 9:55 pm UTC
*/

class SteeltypeRepository extends BaseRepository
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
        return Steeltype::class;
    }
}
