<?php

namespace Phambinh\CmsInstall\Http\Middleware;

use \Closure;

class Installed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  array|string $role
     * @return mixed
     */
    public function handle($request, Closure $next, ...$params)
    {
        if (!env('INSTALLED')) {
            return redirect()->route('install.index');
        }

        return $next($request);
    }
}
