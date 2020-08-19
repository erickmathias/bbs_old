<?php

namespace App\Repositories;

use App\Models\Bbsformula;
use App\Repositories\BaseRepository;

/**
 * Class BbsformulaRepository
 * @package App\Repositories
 * @version July 26, 2020, 9:59 am UTC
*/

class BbsformulaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'stdcode_id',
        'shape_code',
        'shape',
        'formula',
        'd6',
        'd8',
        'd10',
        'd12',
        'd16',
        'd20',
        'd25',
        'd32',
        'd40',
        'd50',
        'steel_type_t',
        'steel_type_y',
        'steel_type_r'
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
        return Bbsformula::class;
    }
}
