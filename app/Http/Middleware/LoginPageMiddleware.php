<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginPageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_admin = auth("admin")->check();
        $user = auth("web")->check();

        if ($user_admin) {
            return redirect(route("manajemen_pengguna.index"));
        } else if ($user) {
            return redirect(route("siswa.kompetisi"));
        }

        return $next($request);
    }
}
