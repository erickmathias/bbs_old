<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Clients
 * @package App\Models
 * @version July 31, 2020, 6:25 am UTC
 *
 * @property string $client_name
 * @property string $postal_address
 * @property string $street_name
 * @property string $municipal
 * @property string $region
 * @property string $nationality
 */
class Clients extends Model
{
    use SoftDeletes;

    public $table = 'company_clients';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'client_name',
        'postal_address',
        'street_name',
        'municipal',
        'region',
        'nationality'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_name' => 'string',
        'postal_address' => 'string',
        'street_name' => 'string',
        'municipal' => 'string',
        'region' => 'string',
        'nationality' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'client_name' => 'required',
        'postal_address' => 'required',
        'street_name' => 'required',
        'municipal' => 'required',
        'region' => 'required',
        'nationality' => 'required'
    ];

    function company(){
        return $this->belongsTo('App\Models\Company','company_id');
    }


}
