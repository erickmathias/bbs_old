<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Mproperty
 * @package App\Models
 * @version July 24, 2020, 7:12 am UTC
 *
 * @property integer $standard_code_id
 * @property string $property
 */
class Mproperty extends Model
{
    use SoftDeletes;

    public $table = 'material_properties';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'standard_code_id',
        'property'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'standard_code_id' => 'integer',
        'property' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'standard_code_id' => 'required',
        'property' => 'required'
    ];

/*    function stdcode(){
        return $this->belongsTo('App\Models\Stdcode','standard_code_id');
    }*/


}
