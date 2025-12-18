<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Enums\UserRole;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!$request->user()) {
            return redirect('/login');
        }

        $requiredRole = match($role) {
            'admin' => UserRole::ADMIN,
            'customer' => UserRole::CUSTOMER,
            default => null,
        };

        if (!$requiredRole || $request->user()->role !== $requiredRole) {
            abort(403, 'Accès non autorisé.');
        }

        return $next($request);
    }
}