<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\supervisor;
use App\Models\coordinator;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
    * @param  string $role
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */



     public function handle(Request $request, Closure $next, string $role)
    {
        //dd(auth()->user()->role);
        if (auth()->user()->role != 'student' && $role == 'student') {
            abort(403);
        }

        if ($role == 'supervisor' && auth()->user()->role != 'supervisor') {
            abort(403);
        }

        if ($role == 'coordinator' && auth()->user()->role!= 'coordinator') {
            abort(403);
        }

        return $next($request);

    }
}
