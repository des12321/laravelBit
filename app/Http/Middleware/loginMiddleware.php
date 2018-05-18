<?php

namespace App\Http\Middleware;

use Closure;

class loginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $cookieBank = $request->cookie("businetbybinanceusernamevalueusername");

        if (!empty($cookieBank)) {
            return redirect('/dashboard');
        } else {
            return redirect('/login');
        }
        return $next($request);
    }
}
