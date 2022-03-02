<?php

namespace App\Http\Controllers\Module\Frontend;

use App\Model\Entities\Product;

/**
 * Class ProductController
 * @package App\Http\Controllers\Module\Frontend
 */
class ProductController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->setViewData([
            'entities' => app()->make(Product::class)->search($this->getParams())->get()
        ]);
        return $this->render();
    }

    public function show($id)
    {
        $this->setViewData([
            'entity' => app()->make(Product::class)->find($id)->first()
        ]);
        return $this->render();
    }
}
