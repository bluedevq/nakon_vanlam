<?php

namespace App\Http\Controllers\Module\Frontend;

use App\Http\Controllers\Base\BaseController;
use App\Http\Controllers\Base\Traits\Model;

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
}
