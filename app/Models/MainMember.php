<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MainMember
 * @package App\Models
 * @version July 24, 2020, 6:53 am UTC
 *
 * @property string $member_name
 * @property integer $stdcode_id
 * @property integer $mproperty_id
 */
class MainMember extends Model
{
    use SoftDeletes;

    public $table = 'main_members';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'member_name',
        'stdcode_id',
        'mproperty_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'member_name' => 'string',
        'stdcode_id' => 'integer',
        'mproperty_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'member_name' => 'required',
        'stdcode_id' => 'required',
        //'mproperty_id' => 'required'
    ];


}
