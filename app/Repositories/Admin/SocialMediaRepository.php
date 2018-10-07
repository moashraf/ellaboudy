<?php

namespace App\Repositories\Admin;

use App\Models\Admin\SocialMedia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SocialMediaRepository
 * @package App\Repositories\Admin
 * @version June 20, 2018, 12:11 pm UTC
 *
 * @method SocialMedia findWithoutFail($id, $columns = ['*'])
 * @method SocialMedia find($id, $columns = ['*'])
 * @method SocialMedia first($columns = ['*'])
*/
class SocialMediaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'icon',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SocialMedia::class;
    }
}
