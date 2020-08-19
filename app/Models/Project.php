<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * @package App\Models
 * @version July 16, 2020, 1:34 am UTC
 *
 * @property string $project_name
 * @property integer $client_id
 * @property string $prepared_by
 * @property string|\Carbon\Carbon $date_prepared
 * @property string $checked_by
 * @property string|\Carbon\Carbon $date_checked
 * @property string $reviewed_by
 * @property string|\Carbon\Carbon $date_reviewed
 */
class Project extends Model
{
    use SoftDeletes;

    public $table = 'projects';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'project_name',
        'client_id',
        'prepared_by',
        'date_prepared',
        'checked_by',
        'date_checked',
        'reviewed_by',
        'date_reviewed'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'project_name' => 'string',
        'client_id' => 'integer',
        'prepared_by' => 'string',
        'date_prepared' => 'datetime',
        'checked_by' => 'string',
        'date_checked' => 'datetime',
        'reviewed_by' => 'string',
        'date_reviewed' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'project_name' => 'required',
        'client_id' => 'required|integer|min:1',
        'prepared_by' => 'required',
        'date_prepared' => 'required',
        'checked_by' => 'required',
        'date_checked' => 'required',
        'reviewed_by' => 'required',
        'date_reviewed' => 'required'
    ];

    function client(){
        return $this->belongsTo('App\Models\Clients','client_id');
    }

    function elements(){
        return $this->hasMany('App\Models\Element','project_id');
    }


}
