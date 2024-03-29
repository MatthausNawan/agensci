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

        if (Auth::check()) {
            // dump(Auth::user()->painel['role'] == $request->segment(2));
            if (Auth::user()->painel['role'] == $request->segment(2)) {

                return $next($request);
            };
            return redirect()->back();
        }
        return $next($request);
    }
}
