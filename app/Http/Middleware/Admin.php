<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;

use Session;

use Closure;

class Admin
{
    protected $auth;
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->id !=1){
            Session::flash('clase','alert-danger');
            Session::flash('message-error-adm','no tenes los permisos');
            return redirect()->to('admin');

        }
        return $next($request);
    }
}
