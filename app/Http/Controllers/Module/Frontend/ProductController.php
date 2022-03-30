<?php

namespace App\Http\Controllers\Module\Frontend;

use App\Helper\Common;
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
        $this->registModel(Product::class);
    }

    public function index()
    {
        $this->setViewData([
            'entities' => $this->fetchModel(Product::class)
                ->search($this->getParams())
                ->paginate(Common::getConfig('pagination.frontend.product'))
        ]);
        return $this->render();
    }

    public function show($id)
    {
        $this->setViewData([
            'entity' => $this->fetchModel(Product::class)->find($id)
        ]);
        return $this->render();
    }
}
