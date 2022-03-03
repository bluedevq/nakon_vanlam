<?php

namespace App\Http\Controllers\Module\Frontend;

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
        $this->registModel(Product::class);
    }

    public function index()
    {
        $this->setViewData([
            'listProduct' => [
                'Các loại cửa cuốn' => $this->fetchModel(Product::class)->where(function ($q) {
                    $q->orWhere('deleted_at', '');
                    $q->orWhereNull('deleted_at');
                })->where('category_id', 1)->get(),
                'Các loại Cửa nhôm hệ Xingfa' => $this->fetchModel(Product::class)->where(function ($q) {
                    $q->orWhere('deleted_at', '');
                    $q->orWhereNull('deleted_at');
                })->where('category_id', 2)->get(),
                'Lan can cầu thang kính' => $this->fetchModel(Product::class)->where(function ($q) {
                    $q->orWhere('deleted_at', '');
                    $q->orWhereNull('deleted_at');
                })->where('category_id', 3)->get(),
            ]
        ]);
        return $this->render();
    }
}
