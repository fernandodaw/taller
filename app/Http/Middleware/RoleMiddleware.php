<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /** Clase que permite filtrar según el tipo de role de usuario registrado.
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        return redirect('/');
        return $next($request);
    }
}
