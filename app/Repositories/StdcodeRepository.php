<?php

namespace App\Repositories;

use App\Models\Stdcode;
use App\Repositories\BaseRepository;

/**
 * Class StdcodeRepository
 * @package App\Repositories
 * @version July 24, 2020, 7:16 am UTC
*/

class StdcodeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'standard_code',
        'shape_code',
        'remarks'
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
        return Stdcode::class;
    }
}
