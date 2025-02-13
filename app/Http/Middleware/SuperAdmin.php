<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //if user is logged
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userRole = Auth::user()->role;

        // super admin
        if($userRole == 1) {
            return $next($request);
        }
        
        // admin
        if($userRole == 2) {
            return redirect()->route('admin.dashboard');
        }

        // normal user
        if($userRole == 3) {
            return redirect()->route('dashboard');
        }
    }
}
