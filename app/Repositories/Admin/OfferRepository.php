<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Offer;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OfferRepository
 * @package App\Repositories\Admin
 * @version June 9, 2018, 10:27 am UTC
 *
 * @method Offer findWithoutFail($id, $columns = ['*'])
 * @method Offer find($id, $columns = ['*'])
 * @method Offer first($columns = ['*'])
*/
class OfferRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Offer::class;
    }
}
