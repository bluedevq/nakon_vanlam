<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;

/**
 * Class BackendAuthenticate
 * @package App\Http\Middleware
 */
class BackendAuthenticate extends BaseAuthenticate
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($this->_isResetRoute($request) || $request->routeIs('*login')) {
            return $next($request);
        }

        if (!$this->getGuard()->check()) {
            return $this->_toLogin($request);
        }

        return $next($request);
    }

    public function init()
    {
        $this->setGuard(backendGuard());
    }

    protected function _toLogin($request)
    {
        if (blank(backendGuard()->user()) || !backendGuard()->user()->isSuperAdmin()) {
            return parent::_toLogin($request)->with('error', 'Not permission');
        }
        return parent::_toLogin($request);
    }
}
