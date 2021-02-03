<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Config;

class AllowedCorsRequestOrigins
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $origin = $request->headers->get('origin');
        $allowedOrigins = \Config::get('api.allowed_cors_origins');

        if (in_array($origin, $allowedOrigins)) {
        // if(1){
            $response = $next($request);

            $response->headers->set('Access-Control-Allow-Origin' , $origin);
            $response->headers->set('Access-Control-Allow-Methods', 'POST,GET,PUT,DELETE,OPTIONS');

            return $response;
        } else {
            // dd('Falhou', $request->headers, $request->headers->get('origin'));
            return response()->json(['Unauthorized access to this server from this route'], 401);
        }
    }
}
