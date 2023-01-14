<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CrossHttp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
		$response->header('Access-Control-Allow-Origin', 'http://127.0.0.1:8000/');
		$response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, Accept');
		$response->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, OPTIONS');
		// $response->header('Access-Control-Allow-Credentials', 'true');
		return $response;

    }
}
