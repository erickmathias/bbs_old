<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Member
 * @package App\Models
 * @version July 26, 2020, 7:44 am UTC
 *
 * @property integer $project_id
 * @property integer $element_id
 * @property string $name
 * @property string $bar_mark
 * @property string $bar_type
 * @property string $bar_size
 * @property integer $total_members
 * @property integer $no_of_bar_in_each
 * @property integer $total_no_of_bars
 * @property number $total_length_of_bars
 * @property string $shape_code
 * @property number $length_a
 * @property number $lenth_b
 * @property number $length_c
 * @property number $length_d
 * @property number $lenth_e_r
 * @property number $lenth_f
 */
class Member extends Model
{
    use SoftDeletes;

    public $table = 'members';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'length_f'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'project_id' => 'integer',
        'element_id' => 'integer',
        'name' => 'string',
        'bar_mark' => 'string',
        'bar_type' => 'string',
        'bar_size' => 'string',
        'total_members' => 'integer',
        'no_of_bar_in_each' => 'integer',
        'total_no_of_bars' => 'integer',
        'total_length_of_bars' => 'float',
        'shape_code' => 'string',
        'length_a' => 'float',
        'length_b' => 'float',
        'length_c' => 'float',
        'length_d' => 'float',
        'length_e' => 'float',
        'length_r' => 'float',
        'length_f' => 'float',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'project_id' => 'required',
        'element_id' => 'required',
        'name' => 'required',
        'bar_mark' => 'required',
        //'bar_type' => 'required',
        'bar_size' => 'required',
        //'total_members' => 'required',
        'no_of_bar_in_each' => 'required',
        //'total_no_of_bars' => 'required',
        //'total_length_of_bars' => 'required',
        'shape_code' => 'required',
        'length_a' => 'required',
        //'length_b' => 'required',
        //'length_c' => 'required',
        //'length_d' => 'required',
        //'length_e_r' => 'required',
        //'length_f' => 'required',
    ];

    function element(){
        return $this->belongsTo('App\Models\Element','element_id');
    }

    function bbsformula(){
        return $this->belongsTo('App\Models\Bbsformula','shape_code');
    }


}
