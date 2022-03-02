<?php

namespace App\Model\Entities;

use App\Model\Base\BaseModel;
use App\Model\Base\Traits\CustomBuilder;

/**
 * Class Product
 * @package App\Model\Entities
 */
class Product extends BaseModel
{
    use CustomBuilder;

    protected $table = 'products';
}
