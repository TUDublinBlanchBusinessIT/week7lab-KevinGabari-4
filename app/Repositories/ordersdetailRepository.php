<?php

namespace App\Repositories;

use App\Models\ordersdetail;
use App\Repositories\BaseRepository;

/**
 * Class ordersdetailRepository
 * @package App\Repositories
 * @version March 4, 2024, 4:51 pm UTC
*/

class ordersdetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'productid',
        'orderid',
        'quantity',
        'subtotal'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ordersdetail::class;
    }
}
