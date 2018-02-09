<?php

namespace App\Http\Middleware;

use App\Roles\BaseRole;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Roles\OwnerRole;

class CheckRules
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
        //rule that allows access to rout
        $routRule = Route::currentRouteName();

        $role = Auth::user()->role()->first()->name;
        $classForRole = 'App\Roles\\' . $role . 'Role';

        //available rules in Role
        $currentUserRulesArr = (new $classForRole)->getRules();

        if (!in_array($routRule, $currentUserRulesArr)) {
            return redirect()->back()->with('message', 'Доступ заборонено');
        }

        return $next($request);
    }
}
