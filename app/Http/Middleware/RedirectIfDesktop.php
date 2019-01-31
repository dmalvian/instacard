<?php

namespace App\Http\Middleware;

use Closure;
use Agent;

class RedirectIfDesktop
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
        if (Agent::isDesktop())
        {
            return redirect('/');
        }
        return $next($request);
    }
}
