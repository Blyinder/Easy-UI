<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class NormalUser
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

        // normal user
        if($userRole == 3) {
            return $next($request);
        }

        // super admin
        if($userRole == 1) {
            return redirect()->route('super-admin.dashboard');
        }

        // admin
        if($userRole == 2) {
            return redirect()->route('admin.dashboard');
        }
    }
}
