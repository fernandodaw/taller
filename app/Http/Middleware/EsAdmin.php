<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EsAdmin
{
    /**  CLASE QUE PERMITE COMPROBAR SI EL USUARIO REGISTRADO ES ADMINISTRADOR
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       $user = Auth::user();

        if ( ! Auth::check()) {
            abort(403, 'No autorizado ');
        }

       if ($user==null)
        {  return view('principal');}
       if(!$user->esAdmin()){  // si no es administrador lo mandamos a la página principal
           echo 'no admin';
           return redirect('/');

       }
        return $next($request);
    }


}
