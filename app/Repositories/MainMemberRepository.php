<?php

namespace App\Repositories;

use App\Models\MainMember;
use App\Repositories\BaseRepository;

/**
 * Class MainMemberRepository
 * @package App\Repositories
 * @version July 24, 2020, 6:53 am UTC
*/

class MainMemberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'member_name',
        'stdcode_id',
        'mproperty_id'
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
        return MainMember::class;
    }
}
