<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Label
//  * @package App\Models\Admin
//  * @version June 9, 2018, 10:25 am UTC
//  *
//  * @property string text
//  * @property integer language_id
  */

  class Label extends Model
{

    public $table = 'label';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $appends = array('text');



    protected $guarded = [];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
