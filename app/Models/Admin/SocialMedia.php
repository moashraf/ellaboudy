<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SocialMedia
 * @package App\Models\Admin
 * @version June 20, 2018, 12:11 pm UTC
 *
 * @property string icon
 * @property string url
 */
class SocialMedia extends Model
{

    public $table = 'social_media';
    



    public $fillable = [
        'icon',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'icon' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
