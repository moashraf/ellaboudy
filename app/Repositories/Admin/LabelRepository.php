<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Label;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LabelRepository
 * @package App\Repositories\Admin
 * @version June 9, 2018, 10:25 am UTC
 *
 * @method Label findWithoutFail($id, $columns = ['*'])
 * @method Label find($id, $columns = ['*'])
 * @method Label first($columns = ['*'])
*/
class LabelRepository extends BaseRepository
{
    /**
     * @var array
     */

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Label::class;
    }
}
