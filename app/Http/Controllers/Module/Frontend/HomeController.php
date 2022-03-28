<?php

namespace App\Http\Controllers\Module\Frontend;

use App\Model\Entities\Category;
use App\Model\Entities\Product;

/**
 * Class HomeController
 * @package App\Http\Controllers\Module\Frontend
 */
class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
        $this->registModel(Product::class, Category::class);
    }

    public function index()
    {
        $categories = $this->fetchModel(Category::class)->where(function ($q) {
            $q->orWhere('deleted_at', '');
            $q->orWhereNull('deleted_at');
        })->with('products')->get();
        $listProducts = $sliders = [];
        foreach ($categories as $category) {
            $products = $category->products;
            if (blank($products)) {
                continue;
            }
            $listProducts[$category->name] = $products;
            $sliders = array_merge($sliders, array_map(function ($item) {
                return $item;
            }, $products->toArray()));
        }
        shuffle($sliders);
        $this->setViewData([
            'listProducts' => $listProducts,
            'sliders' => array_slice($sliders, 0, 6),
        ]);

        return $this->render();
    }
}
