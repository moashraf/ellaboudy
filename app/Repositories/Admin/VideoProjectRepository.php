<?php

namespace App\Repositories\Admin;

use App\Models\Admin\VideoProject;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VideoProjectRepository
 * @package App\Repositories\Admin
 * @version June 19, 2018, 9:50 am UTC
 *
 * @method VideoProject findWithoutFail($id, $columns = ['*'])
 * @method VideoProject find($id, $columns = ['*'])
 * @method VideoProject first($columns = ['*'])
*/
class VideoProjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'video',
        'project_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return VideoProject::class;
    }
}
