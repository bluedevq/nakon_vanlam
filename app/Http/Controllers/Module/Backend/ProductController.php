<?php

namespace App\Http\Controllers\Module\Backend;

use App\Model\Entities\Product;

/**
 * Class ProductController
 * @package App\Http\Controllers\Module\Backend
 */
class ProductController extends BackendController
{
    public function __construct()
    {
        parent::__construct();
        $this->registModel(Product::class);
    }

    public function index()
    {
        $this->setViewData([
            'entities' => $this->fetchModel(Product::class)->where(function ($q) {
                $q->orWhere('deleted_at', '');
                $q->orWhereNull('deleted_at');
            })->get()
        ]);
        return $this->render();
    }
}
