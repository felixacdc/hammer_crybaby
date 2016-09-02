<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;

abstract class IsType
{
    private $auth;
    private $redirectUser;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    abstract public function getType();

    public function getRedirect()
    {
        switch ( $this->auth->user()->id_user_type ) {
            case 1:
                $this->redirectUser = '/admin';
                break;
            case 2:
                $this->redirectUser = '/user';
                break;

            default:
                $this->redirectUser = 'auth/logout';
                break;
        }
    }

    public function handle($request, Closure $next)
    {
        if ( !$this->auth->user()->is($this->getType()) ) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->to($this->redirectUser);
            }
        }
        
        return $next($request);
    }
}
