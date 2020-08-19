<?php

namespace App\Repositories;

use App\Models\Mproperty;
use App\Repositories\BaseRepository;

/**
 * Class MpropertyRepository
 * @package App\Repositories
 * @version July 24, 2020, 7:12 am UTC
*/

class MpropertyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'standard_code_id',
        'property'
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
        return Mproperty::class;
    }
}
