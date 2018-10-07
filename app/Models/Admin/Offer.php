<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Offer
 * @package App\Models\Admin
 * @version June 9, 2018, 10:27 am UTC
 *
 * @property string title
 * @property string description
 * @property string image
 */
class Offer extends Model
{

    public $table = 'offer';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $appends = array('title','description','offer_description');



    public $fillable = [
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
