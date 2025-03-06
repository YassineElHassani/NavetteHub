<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            $role = $user->roles->first();
            
            if ($role) {
                switch ($role->slug) {
                    case 'company':
                        return redirect()->route('company_dashboard');
                    case 'admin':
                        return redirect()->route('admin_dashboard');
                    case 'client':
                        return redirect()->route('client_dashboard');
                    default:
                        return redirect()->route('home');
                }
            }
        }

        return $next($request);
    }
}
