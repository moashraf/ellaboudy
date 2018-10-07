<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Service
 * @package App\Models\Admin
 * @version June 9, 2018, 10:37 am UTC
 *
 * @property string image
 * @property string title
 * @property string description
 */
class Service extends Model
{
    
    public $table = 'service';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $appends = array('title','description');


    public $fillable = [
        'image',
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
