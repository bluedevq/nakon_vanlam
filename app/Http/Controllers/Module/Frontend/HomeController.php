<?php

namespace App\Http\Controllers\Module\Frontend;

use App\Model\Entities\Category;
use App\Model\Entities\Product;
use App\Model\Entities\User;

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
        })->get();
        $listProduct = [];
        foreach ($categories as $category) {
            $listProduct[$category->name] = $this->fetchModel(Product::class)->where(function ($q) {
                $q->orWhere('deleted_at', '');
                $q->orWhereNull('deleted_at');
            })->where('category_id', $category->id)->get();
        }

        $this->setViewData([
            'listProduct' => $listProduct
        ]);
        return $this->render();
    }
}
