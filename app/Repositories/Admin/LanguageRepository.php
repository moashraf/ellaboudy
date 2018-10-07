<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Language;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LanguageRepository
 * @package App\Repositories\Admin
 * @version June 9, 2018, 10:36 am UTC
 *
 * @method Language findWithoutFail($id, $columns = ['*'])
 * @method Language find($id, $columns = ['*'])
 * @method Language first($columns = ['*'])
*/
class LanguageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'language',
        'is_default'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Language::class;
    }
}
