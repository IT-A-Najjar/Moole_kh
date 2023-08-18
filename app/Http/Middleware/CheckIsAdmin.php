<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // قم بفحص إذا كان المستخدم مسجلاً دخوله وإذا كان قيمة is_admin هي 1
        if ($request->user() && $request->user()->is_admin == 1) {
            return $next($request);
        }

        return redirect('/');
    }
}
