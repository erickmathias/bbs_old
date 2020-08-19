<?php

namespace App\Repositories;

use App\Models\Clients;
use App\Repositories\BaseRepository;

/**
 * Class ClientsRepository
 * @package App\Repositories
 * @version July 31, 2020, 6:25 am UTC
*/

class ClientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'client_name',
        'postal_address',
        'street_name',
        'municipal',
        'region',
        'nationality'
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
        return Clients::class;
    }
}
