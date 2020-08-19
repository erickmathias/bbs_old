<?php

namespace App\Repositories;

use App\Models\Company;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
/**
 * Class CompanyRepository
 * @package App\Repositories
 * @version July 14, 2020, 10:15 pm UTC
*/

class CompanyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'main_activity',
        'postal_address',
        'email',
        'fax',
        'telephone',
        'website',
        'municipal',
        'region',
        'national'
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
        return Company::class;
    }

    function createCompany(Request $request){
        $file = $request->file('logo_path');

        $originalname = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'upload/'.uniqid().'.'.$extension;
        //$img = Image::make($file)->resize(50,50);
        $img = Image::make($file)->resize(217,232);
        $img->save(public_path($path));

        $input = $request->all();
        $input['logo_path'] = $path;

        return $this->create($input);
    }
}
