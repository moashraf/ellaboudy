<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class VideoProject
 * @package App\Models\Admin
 * @version June 19, 2018, 9:50 am UTC
 *
 * @property \App\Models\Admin\Project project
 * @property \Illuminate\Database\Eloquent\Collection bannerDescription
 * @property \Illuminate\Database\Eloquent\Collection labelDescription
 * @property \Illuminate\Database\Eloquent\Collection offerDescription
 * @property \Illuminate\Database\Eloquent\Collection serviceDescription
 * @property string video
 * @property integer project_id
 */
class VideoProject extends Model
{

    public $table = 'project_video';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'video',
        'project_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'video' => 'string',
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
