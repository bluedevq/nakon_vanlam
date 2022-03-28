<?php

namespace App\Http\Controllers\Module\Frontend;

use App\Helper\Common;
use App\Http\Controllers\Base\BaseController;
use App\Http\Controllers\Base\Traits\Model;
use App\Model\Entities\Category;

/**
 * Class FrontendController
 * @package App\Http\Controllers\Module\Frontend
 */
class FrontendController extends BaseController
{
    use Model;

    protected $_area = 'frontend';

    public function __construct()
    {
        parent::__construct();
    }

    public function render($view = null, $params = array(), $mergeData = array())
    {
        $categories = app()->make(Category::class)->where(function ($q) {
            $q->orWhere('deleted_at', '');
            $q->orWhereNull('deleted_at');
        })->with('products')->get();
        $this->setViewData(['categories' => $categories]);
        $this->setTitle(Common::getConfig('title'));
        return parent::render($view, $params, $mergeData);
    }
}
