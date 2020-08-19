<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bbsformula
 * @package App\Models
 * @version July 26, 2020, 9:59 am UTC
 *
 * @property integer $stdcode_id
 * @property integer $shape_code
 * @property string $shape
 * @property string $formula
 * @property number $d6
 * @property number $d8
 * @property number $d10
 * @property number $d12
 * @property number $d16
 * @property number $d20
 * @property number $d25
 * @property number $d32
 * @property number $d40
 * @property number $d50
 * @property integer $steel_type_t
 * @property integer $steel_type_y
 * @property integer $steel_type_r
 */
class Bbsformula extends Model
{
    use SoftDeletes;

    public $table = 'bbs_formula';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'stdcode_id' => 'integer',
        'shape_code' => 'integer',
        'shape' => 'string',
        'formula' => 'string',
        'd6' => 'float',
        'd8' => 'float',
        'd10' => 'float',
        'd12' => 'float',
        'd16' => 'float',
        'd20' => 'float',
        'd25' => 'float',
        'd32' => 'float',
        'd40' => 'float',
        'd50' => 'float',
        'steel_type_t' => 'integer',
        'steel_type_y' => 'integer',
        'steel_type_r' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'stdcode_id' => 'required',
        'shape_code' => 'required',
        'formula' => 'required',
        'd6' => 'required',
        'd8' => 'required',
        'd10' => 'required',
        'd12' => 'required',
        'd16' => 'required',
        'd20' => 'required',
        'd25' => 'required',
        'd32' => 'required',
        'd40' => 'required',
        'd50' => 'required',
        'steel_type_t' => 'required',
        'steel_type_y' => 'required',
        'steel_type_r' => 'required'
    ];


    function members(){
        return $this->hasMany('App\Models\Member','shape_code');
    }


}
