<?php

namespace App\Http\Controllers\Module\Frontend;

class ContactController extends FrontendController
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
