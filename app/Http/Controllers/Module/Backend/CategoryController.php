<?php

namespace App\Http\Controllers\Module\Backend;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Module\Backend
 */
class CategoryController extends BackendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return $this->render();
    }
}
