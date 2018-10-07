<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProjectImage
 * @package App\Models\Admin
 * @version June 11, 2018, 11:18 am UTC
 *
 * @property \App\Models\Admin\Project project
 * @property \Illuminate\Database\Eloquent\Collection bannerDescription
 * @property \Illuminate\Database\Eloquent\Collection labelDescription
 * @property \Illuminate\Database\Eloquent\Collection offerDescription
 * @property \Illuminate\Database\Eloquent\Collection serviceDescription
 * @property integer id
 * @property string image
 * @property integer project_id
 */
class ProjectImage extends Model
{


    public $table = 'project_image';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'image',
        'project_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'project_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function project()
    {
        return $this->belongsTo(\App\Models\Admin\Project::class);
    }
}
