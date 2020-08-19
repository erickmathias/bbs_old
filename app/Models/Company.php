<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Company
 * @package App\Models
 * @version July 14, 2020, 10:15 pm UTC
 *
 * @property string $name
 * @property string $main_activity
 * @property string $postal_address
 * @property string $email
 * @property string $fax
 * @property string $telephone
 * @property string $website
 * @property string $municipal
 * @property string $region
 * @property string $national
 */
class Company extends Model
{
    use SoftDeletes;

    public $table = 'companies';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'main_activity',
        'postal_address',
        'email',
        'fax',
        'telephone',
        'website',
        'municipal',
        'region',
        'national',
        'logo_path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'main_activity' => 'string',
        'postal_address' => 'string',
        'email' => 'string',
        'fax' => 'string',
        'telephone' => 'string',
        'website' => 'string',
        'municipal' => 'string',
        'region' => 'string',
        'national' => 'string',
        'logo_path' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'main_activity' => 'required',
        'postal_address' => 'required',
        'email' => 'required',
        'fax' => 'required',
        'telephone' => 'required',
        'website' => 'required',
        'municipal' => 'required',
        'region' => 'required',
        'national' => 'required',
        'logo_path' => 'required'
    ];

    function clients(){
        return $this->hasMany('App\Models\Clients','company_id');
    }

    function users(){
        return $this->hasMany('App\Users','company_id');
    }

}
