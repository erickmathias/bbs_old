<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Steeltype
 * @package App\Models
 * @version July 25, 2020, 9:55 pm UTC
 *
 * @property string $name
 */
class Steeltype extends Model
{
    use SoftDeletes;

    public $table = 'steel_type';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    function steeltype(){
        return $this->hasMany('App\Models\Steeltype','steel_type_id');
    }


}
