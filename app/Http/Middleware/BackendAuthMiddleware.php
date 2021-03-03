<?php

namespace App\Http\Middleware;

use Closure;

class BackendAuthMiddleware
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
        $isLogined = true;

        if(!$isLogined) {
            dd('Vui long dang nhap');
        }

        return $next($request);
    }
}
