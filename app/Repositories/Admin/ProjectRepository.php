<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Project;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProjectRepository
 * @package App\Repositories\Admin
 * @version June 11, 2018, 7:58 am UTC
 *
 * @method Project findWithoutFail($id, $columns = ['*'])
 * @method Project find($id, $columns = ['*'])
 * @method Project first($columns = ['*'])
*/
class ProjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'image',
        'units_number',
        'map',
        'area'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Project::class;
    }
}
