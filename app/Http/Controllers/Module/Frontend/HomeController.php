<?php

namespace App\Http\Controllers\Module\Frontend;

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
    }

    public function index()
    {
        $this->setViewData([
            'entities' => app()->make(User::class)->search($this->getParams())->get()
        ]);
        return $this->render();
    }
}
