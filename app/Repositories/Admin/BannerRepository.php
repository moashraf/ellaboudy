<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Banner;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BannerRepository
 * @package App\Repositories\Admin
 * @version June 9, 2018, 10:21 am UTC
 *
 * @method Banner findWithoutFail($id, $columns = ['*'])
 * @method Banner find($id, $columns = ['*'])
 * @method Banner first($columns = ['*'])
*/
class BannerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'project_route',
        'image',
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Banner::class;
    }
}
