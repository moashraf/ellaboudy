<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Banner
 * @package App\Models\Admin
 * @version June 9, 2018, 10:21 am UTC
 *
 * @property integer title
 * @property integer description
 * @property integer btn_text
 * @property integer project_route
 * @property integer image
 * @property integer lang_id
 */
class Banner extends Model
{

    public $table = 'banner';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $appends = array('title','description','btn_text','slider_description');



    public $fillable = [
        'project_route',
        'image',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'project_route' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
