<?php

namespace App\Http\Controllers\Module\Frontend;

use App\Helper\Common;
use App\Model\Entities\Category;
use App\Model\Entities\Product;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Module\Frontend
 */
class CategoryController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
        $this->registModel(Category::class, Product::class);
    }

    public function show($id)
    {
        $this->setViewData([
            'entity' => $this->fetchModel(Category::class)->find($id),
            'listProducts' => $this->fetchModel(Product::class)
                ->where(function ($q) {
                    $q->orWhere('deleted_at', '');
                    $q->orWhereNull('deleted_at');
                })
                ->where('category_id', $id)
                ->paginate(Common::getConfig('pagination.backend.product')),
        ]);
        return $this->render();
    }
}
