<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPanelRouteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check())
        {
            return redirect()->route('site.home');
        }

        if($this->checkRoutePermission($request)){

            return $next($request);
        }

        return redirect()->route('site.home');
    }

    protected function checkRoutePermission($request)
    {

       return Auth::user()->painel['route'] == $request->path();
    }
}
