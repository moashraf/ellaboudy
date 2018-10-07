<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * @package App\Models\Admin
 * @version June 11, 2018, 7:58 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection bannerDescription
 * @property \Illuminate\Database\Eloquent\Collection labelDescription
 * @property \Illuminate\Database\Eloquent\Collection offerDescription
 * @property \Illuminate\Database\Eloquent\Collection serviceDescription
 * @property string title
 * @property string description
 * @property string image
 * @property integer units_number
 * @property integer map
 * @property integer area
 */
class Project extends Model
{

    public $table = 'project';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $appends = ['images','videos'];


    public $fillable = [
        'title',
        'description',
        'image',
        'units_number',
        'map',
        'area',
        'short_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'image' => 'string',
        'units_number' => 'string',
        'map' => 'string',
        'area' => 'string',
        'short_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
