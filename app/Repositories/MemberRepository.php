<?php

namespace App\Repositories;

use App\Models\Member;
use App\Repositories\BaseRepository;

/**
 * Class MemberRepository
 * @package App\Repositories
 * @version July 26, 2020, 7:44 am UTC
*/

class MemberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'project_id',
        'element_id',
        'name',
        'bar_mark',
        'bar_type',
        'bar_size',
        'total_members',
        'no_of_bar_in_each',
        'total_no_of_bars',
        'total_length_of_bars',
        'shape_code',
        'length_a',
        'length_b',
        'length_c',
        'length_d',
        'length_e',
        'length_r',
        'length_f',
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
        return Member::class;
    }
}
