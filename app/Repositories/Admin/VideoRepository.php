<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Video;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VideoRepository
 * @package App\Repositories\Admin
 * @version June 9, 2018, 10:26 am UTC
 *
 * @method Video findWithoutFail($id, $columns = ['*'])
 * @method Video find($id, $columns = ['*'])
 * @method Video first($columns = ['*'])
*/
class VideoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Video::class;
    }
}
