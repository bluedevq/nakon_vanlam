<?php

namespace App\Http\Controllers\Module\Backend;

use App\Helper\Common;
use App\Model\Entities\User;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;

/**
 * Class LoginController
 * @package App\Http\Controllers\Module\Backend
 */
class LoginController extends BackendController
{
    protected $_area = 'backend';

    public function __construct(User $user)
    {
        parent::__construct();
        $this->setModel($user);
    }

    public function index()
    {
        return $this->render();
    }

    public function auth()
    {
        $userData = [
            'email' => request()->get('email'),
            'password' => request()->get('password'),
        ];
        if (backendGuard()->attempt($userData)) {
            return $this->_redirectToHome();
        }
        return $this->_back();
    }

    public function logout()
    {
        backendGuard()->logout();
        Session::flush();
        return $this->_redirectToHome();
    }
}
