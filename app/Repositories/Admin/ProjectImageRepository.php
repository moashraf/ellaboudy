<?php

namespace App\Repositories\Admin;

use App\Models\Admin\ProjectImage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProjectImageRepository
 * @package App\Repositories\Admin
 * @version June 11, 2018, 11:18 am UTC
 *
 * @method ProjectImage findWithoutFail($id, $columns = ['*'])
 * @method ProjectImage find($id, $columns = ['*'])
 * @method ProjectImage first($columns = ['*'])
*/
class ProjectImageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'image',
        'project_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProjectImage::class;
    }
}
