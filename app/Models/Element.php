<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Element
 * @package App\Models
 * @version July 26, 2020, 6:13 am UTC
 *
 * @property integer $project_id
 * @property string $element_name
 * @property integer $stdcode_id
 * @property integer $steel_type_id
 * @property number $density
 */
class Element extends Model
{
    use SoftDeletes;

    public $table = 'elements';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'project_id',
        'element_name',
        'stdcode_id',
        'steel_type_id',
        'density'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'project_id' => 'integer',
        'element_name' => 'string',
        'stdcode_id' => 'integer',
        'steel_type_id' => 'integer',
        'density' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'project_id' => 'required',
        'element_name' => 'required',
        'stdcode_id' => 'required',
        'steel_type_id' => 'required',
        'density' => 'required'
    ];

    function stdcode(){
        return $this->belongsTo('App\Models\Stdcode','stdcode_id');
    }

    function steeltype(){
        return $this->belongsTo('App\Models\Steeltype','steel_type_id');
    }

    function members(){
        return $this->hasMany('App\Models\Member','element_id');
    }

    function project(){
        return $this->belongsTo('App\Models\Project','project_id');
    }


}
