<?php

namespace App\Model\Entities;

use App\Model\Base\BaseModel;
use App\Model\Base\Traits\CustomBuilder;

/**
 * Class Category
 * @package App\Model\Entities
 */
class Category extends BaseModel
{
    use CustomBuilder;

    protected $table = 'categories';

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
