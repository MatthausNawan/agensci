<?php

namespace App\Http\Middleware;

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
        return $next($request);
    }

    protected function getRoutePanel($role)
    {
        $routes =  [
            1 => RouteServiceProvider::ADMIN_PANEL,
            3 => RouteServiceProvider::COMPANY_PANEL,
            4 => RouteServiceProvider::STUDENT_PANEL,
            5 => RouteServiceProvider::TEACHER_PANEL
        ];

        return $routes[$role];
    }
}
