<?php

namespace App\Http\Middleware;

use Closure;

class Cliente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $usuarioOn = $request->session()->get('client_on');
        
        if( is_int($usuarioOn) && $usuarioOn > 0 )
        {
            return $next($request);
        }

        return redirect('/orcamento/login?1');
    }
}
