<?php

namespace App\Http\Middleware;

use Closure;

class PreflightRequests
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
        if ($request->getMethod() === "OPTIONS") {
            return response('')
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'POST,GET,DELETE,OPTIONS,PUT')
            ->header('Access-Control-Allow-Headers', "{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
            // ->header('Access-Control-Allow-Headers', 'X-Client,Authorization,X-request-token,X-Login-Version,X-requested-with,Content-Type');
        }

        return $next($request);
    }
}
