<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Stdcode
 * @package App\Models
 * @version July 24, 2020, 7:16 am UTC
 *
 * @property string $standard_code
 * @property integer $shape_code
 * @property string $remarks
 */
class Stdcode extends Model
{
    use SoftDeletes;

    public $table = 'standard_codes_of_practice';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'standard_code',
        'shape_code',
        'remarks'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'standard_code' => 'string',
        'shape_code' => 'integer',
        'remarks' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'standard_code' => 'required',
        'shape_code' => 'required',
        'remarks' => 'required'
    ];

/*    function properties(){
        return $this->hasMany('App\Models\Mproperty','standard_code_id');
    }*/

function elements(){
    return $this->hasMany('App\Models\Element','stdcode_id');
}


}
